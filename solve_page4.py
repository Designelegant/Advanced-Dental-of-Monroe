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

# Load english words
english_words = set()
for filename in os.listdir("."):
    if filename.endswith(".php"):
        with open(filename, "r", encoding="utf-8") as f:
            text = f.read()
            text = re.sub(r"<\?php.*?\?>", " ", text, flags=re.DOTALL)
            text = re.sub(r"<[^>]+>", " ", text)
            for w in re.findall(r"[a-zA-Z]+", text):
                english_words.add(w.lower())

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

sig_to_words = {}
for w in english_words:
    sig = get_signature(w)
    if sig not in sig_to_words:
        sig_to_words[sig] = []
    sig_to_words[sig].append(w)

# Load extracted_pypdf.txt Page 4
with open("extracted_pypdf.txt", "r", encoding="utf-8") as f:
    cipher_content = f.read()

# Get only page 4 lines
p4_lines = []
current_page = None
for line in cipher_content.splitlines():
    if line.startswith("--- Page "):
        current_page = int(re.search(r"\d+", line).group())
    elif current_page == 4 and line.strip():
        parts = line.split("/i255")
        line_words = []
        for part in parts:
            if not part.strip():
                continue
            ids = [x for x in part.split("/") if x.strip()]
            if ids:
                line_words.append(ids)
        if line_words:
            p4_lines.append(line_words)

all_words = []
for line in p4_lines:
    all_words.extend(line)

# Let's perform a solver with seeded mappings for Page 4!
# Based on our analysis:
# - URL: https://www.advanceddentalofmonroe.com/dental-links-18.html
# Let's map the IDs from this URL:
# 17->h, 25->t, 36->p, 16->s, 61->:, 62->/, 49->w, 37->., 15->a, 27->d, 30->v, u->n, 19->c, 20->e, 43->l, 53->-, 23->i, 21->k, 64->1, 129->8, 32->m
mapping = {
    "17": "h", "25": "t", "36": "p", "16": "s", "61": ":", "62": "/", "49": "w",
    "37": ".", "15": "a", "27": "d", "30": "v", "u": "n", "19": "c", "20": "e",
    "43": "l", "53": "-", "23": "i", "21": "k", "64": "1", "129": "8", "32": "m",
    "v": "o", "41": "f", "26": "r", "84": "c", "14": "o", "2": "o"
}

reverse_mapping = {v: k for k, v in mapping.items()}

# Propagation loop
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

# Dictionary Guessing
all_tokens = set(cid for cw in all_words for cid in cw)
unmapped = all_tokens - set(mapping.keys())

for token in sorted(unmapped, key=lambda t: sum(1 for cw in all_words if t in cw), reverse=True):
    contexts = [cw for cw in all_words if token in cw]
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
        
        # Propagate
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

# Output decrypted page 4
print("--- DECRYPTED PAGE 4 ---")
for line in p4_lines:
    dec_line = []
    for cw in line:
        dec_word = "".join(mapping.get(cid, f"[{cid}]") for cid in cw)
        dec_line.append(dec_word)
    print(" ".join(dec_line))
