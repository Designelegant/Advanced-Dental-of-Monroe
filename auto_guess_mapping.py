import re
import os
import json
from collections import Counter

# Helper to compute signature
def get_signature(word):
    seen = {}
    sig = []
    for c in word:
        if c not in seen:
            seen[c] = len(seen)
        sig.append(seen[c])
    return tuple(sig)

# 1. Load a large dictionary of English words from ref files + standard words
english_words = set()

# Read all PHP files for domain-specific words
for filename in os.listdir("."):
    if filename.endswith(".php"):
        with open(filename, "r", encoding="utf-8") as f:
            text = f.read()
            text = re.sub(r"<\?php.*?\?>", " ", text, flags=re.DOTALL)
            text = re.sub(r"<[^>]+>", " ", text)
            for w in re.findall(r"[a-zA-Z]+", text):
                english_words.add(w.lower())

# Add some common English words just in case
common_words = [
    "the", "be", "to", "of", "and", "a", "in", "that", "have", "i",
    "it", "for", "not", "on", "with", "he", "as", "you", "do", "at",
    "this", "but", "his", "by", "from", "they", "we", "say", "her",
    "she", "or", "an", "will", "my", "one", "all", "would", "there",
    "their", "what", "so", "up", "out", "if", "about", "who", "get",
    "which", "go", "me", "when", "make", "can", "like", "time", "no",
    "just", "him", "know", "take", "people", "into", "year", "your",
    "good", "some", "could", "them", "see", "other", "than", "then",
    "now", "look", "only", "come", "its", "over", "think", "also",
    "back", "after", "use", "two", "how", "our", "work", "first",
    "well", "way", "even", "new", "want", "because", "any", "these",
    "give", "day", "most", "us"
]
for w in common_words:
    english_words.add(w)

# Group english words by signature
sig_to_words = {}
for w in english_words:
    sig = get_signature(w)
    if sig not in sig_to_words:
        sig_to_words[sig] = []
    sig_to_words[sig].append(w)

# 2. Load extracted_pypdf.txt
with open("extracted_pypdf.txt", "r", encoding="utf-8") as f:
    cipher_content = f.read()

# Parse pages
pages = {}
current_page = None
for line in cipher_content.splitlines():
    if line.startswith("--- Page "):
        current_page = int(re.search(r"\d+", line).group())
        pages[current_page] = []
    elif current_page is not None and line.strip():
        parts = line.split("/i255")
        line_words = []
        for part in parts:
            if not part.strip():
                continue
            ids = [x for x in part.split("/") if x.strip()]
            if ids:
                line_words.append(ids)
        if line_words:
            pages[current_page].append(line_words)

def solve_page(page_num, page_lines):
    print(f"\n--- Solving Page {page_num} ---")
    all_words = []
    for line in page_lines:
        all_words.extend(line)
        
    mapping = {}
    reverse_mapping = {}
    
    # Base seeds
    if page_num in (1, 2):
        known_seed = {
            "38": "h", "32": "t", "33": "p", "26": "s", "64": ":", "71": "/",
            "37": "w", "40": ".", "18": "a", "21": "d", "63": "v", "19": "n",
            "29": "c", "31": "e", "28": "l", "30": "o", "27": "f", "17": "m",
            "34": "r", "102": "j", "62": "u", "68": "-", "77": "t", "103": "m"
        }
        for k, v in known_seed.items():
            mapping[k] = v
            reverse_mapping[v] = k

    # Pre-map alphanumeric chars if they are already plain text
    for cw in all_words:
        for cid in cw:
            if re.match(r"^[a-zA-Z\.:/-]$", cid):
                mapping[cid] = cid.lower()
                reverse_mapping[cid.lower()] = cid

    # 1. Constraint Propagation phase
    for _ in range(15):
        changed = False
        unique_cw = set(tuple(x) for x in all_words)
        for cw in unique_cw:
            sig = get_signature(cw)
            options = sig_to_words.get(sig, [])
            if not options:
                continue
            
            valid_options = []
            for opt in options:
                match = True
                for cid, char in zip(cw, opt):
                    if cid in mapping:
                        if mapping[cid] != char:
                            match = False
                            break
                    else:
                        if char in reverse_mapping:
                            match = False
                            break
                if match:
                    valid_options.append(opt)
                    
            if len(valid_options) == 1:
                opt = valid_options[0]
                for cid, char in zip(cw, opt):
                    if cid not in mapping:
                        mapping[cid] = char
                        reverse_mapping[char] = cid
                        changed = True
        if not changed:
            break

    # 2. Dictionary Guessing phase for unmapped tokens
    all_tokens = set(cid for cw in all_words for cid in cw)
    unmapped = all_tokens - set(mapping.keys())
    
    # Try to guess mapping for each unmapped token based on most frequent word completions
    for token in sorted(unmapped, key=lambda t: sum(1 for cw in all_words if t in cw), reverse=True):
        contexts = [cw for cw in all_words if token in cw]
        if not contexts:
            continue
            
        candidates = Counter()
        for cw in contexts:
            sig = get_signature(cw)
            options = sig_to_words.get(sig, [])
            for opt in options:
                match = True
                possible_char = None
                for cid, char in zip(cw, opt):
                    if cid == token:
                        possible_char = char
                    elif cid in mapping:
                        if mapping[cid] != char:
                            match = False
                            break
                    else:
                        if char in reverse_mapping:
                            match = False
                            break
                if match and possible_char and possible_char not in reverse_mapping:
                    candidates[possible_char] += 1
                    
        if candidates:
            best_char, count = candidates.most_common(1)[0]
            mapping[token] = best_char
            reverse_mapping[best_char] = token
            # Propagate again
            for cw in all_words:
                sig = get_signature(cw)
                options = sig_to_words.get(sig, [])
                for opt in options:
                    match = True
                    for cid, char in zip(cw, opt):
                        if cid in mapping:
                            if mapping[cid] != char:
                                match = False
                                break
                        else:
                            if char in reverse_mapping:
                                match = False
                                break
                    if match:
                        for cid, char in zip(cw, opt):
                            if cid not in mapping:
                                mapping[cid] = char
                                reverse_mapping[char] = cid

    print(f"Final Mapped {len(mapping)} characters on Page {page_num}")
    
    # Decrypt and display
    decrypted_lines = []
    for line in page_lines:
        dec_line = []
        for cw in line:
            dec_word = "".join(mapping.get(cid, f"[{cid}]") for cid in cw)
            dec_line.append(dec_word)
        decrypted_lines.append(" ".join(dec_line))
        
    return "\n".join(decrypted_lines)

# Solve all pages
all_decrypted = []
for page_num in sorted(pages.keys()):
    dec_text = solve_page(page_num, pages[page_num])
    all_decrypted.append(f"--- Page {page_num} ---\n" + dec_text)

# Save to decrypted_content.txt
with open("decrypted_content.txt", "w", encoding="utf-8") as f:
    f.write("\n\n".join(all_decrypted))

print("\nSaved decrypted content to decrypted_content.txt")
