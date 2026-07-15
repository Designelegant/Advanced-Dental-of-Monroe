import re
import os
import json
from collections import Counter

# 1. Load all text from all PHP files in the directory as reference
ref_words = set()
for filename in os.listdir("."):
    if filename.endswith(".php"):
        with open(filename, "r", encoding="utf-8") as f:
            text = f.read()
            # Clean PHP and HTML
            text = re.sub(r"<\?php.*?\?>", " ", text, flags=re.DOTALL)
            text = re.sub(r"<[^>]+>", " ", text)
            words = re.findall(r"[a-zA-Z]+", text)
            for w in words:
                ref_words.add(w.lower())

print("Loaded reference words:", len(ref_words))

# Helper to compute signature
def get_signature(word):
    seen = {}
    sig = []
    for c in word:
        if c not in seen:
            seen[c] = len(seen)
        sig.append(seen[c])
    return tuple(sig)

# Group reference words by signature
sig_to_ref_words = {}
for w in ref_words:
    sig = get_signature(w)
    if sig not in sig_to_ref_words:
        sig_to_ref_words[sig] = []
    sig_to_ref_words[sig].append(w)

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
        # Each line has words separated by /i255
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

# 3. Solver function for a single page
def solve_page(page_num, page_lines):
    print(f"\n--- Solving Page {page_num} ---")
    
    # Collect all words on this page
    all_words = []
    for line in page_lines:
        all_words.extend(line)
        
    # Seed mapping from known words or manual overrides if we have any.
    # We can also do a greedy propagation.
    mapping = {}
    reverse_mapping = {}
    
    # Seed page 1 and 2 with known letters if needed
    if page_num in (1, 2):
        known_seed = {
            "38": "h", "32": "t", "33": "p", "26": "s", "64": ":", "71": "/",
            "37": "w", "40": ".", "18": "a", "21": "d", "63": "v", "19": "n",
            "29": "c", "31": "e", "28": "l", "30": "o", "27": "f", "17": "m",
            "34": "r", "102": "j", "62": "u"
        }
        for k, v in known_seed.items():
            mapping[k] = v
            reverse_mapping[v] = k

    # Seed page 3 and 4 with known lowercase/uppercase letters that pypdf extracted directly!
    # In pypdf output, some letters are kept as literal characters if they are not in bracket.
    # Wait, our parse step converts them to ids. For page 3, let's see:
    # If a token in ids is a letter (like 'y', 'b', 'm', 'a', 'n'), we can map it to itself!
    for cw in all_words:
        for cid in cw:
            if re.match(r"^[a-zA-Z\.:/]$", cid):
                mapping[cid] = cid.lower()
                reverse_mapping[cid.lower()] = cid

    # Propagation loop
    changed = True
    while changed:
        changed = False
        
        # Check all unique words on the page
        unique_cw = set(tuple(x) for x in all_words)
        for cw in unique_cw:
            sig = get_signature(cw)
            options = sig_to_ref_words.get(sig, [])
            if not options:
                continue
                
            # Filter options based on current mapping
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
                        
    print(f"Mapped {len(mapping)} characters on Page {page_num}")
    
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
