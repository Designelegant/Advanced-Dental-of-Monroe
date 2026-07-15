import re
import os
import json

# Read extracted_pypdf.txt
with open("extracted_pypdf.txt", "r", encoding="utf-8") as f:
    cipher_content = f.read()

# Load all text from reference pages
ref_files = [
    "dental-services-7.php",
    "dr-nyman-aydin-9.php",
    "cleaning-and-prevention-10.php",
    "cosmetic-procedures-11.php",
    "restorative-procedures-12.php",
    "dental-implants-13.php",
    "tooth-extractions-14.php",
    "pediatric-dentistry-16.php",
    "dr-monica-mossad-17.php"
]

ref_words = set()
for filename in ref_files:
    if os.path.exists(filename):
        with open(filename, "r", encoding="utf-8") as f:
            text = f.read()
            # Remove PHP, tags, scripts, CSS
            text = re.sub(r"<\?php.*?\?>", " ", text, flags=re.DOTALL)
            text = re.sub(r"<script.*?>.*?</script>", " ", text, flags=re.DOTALL)
            text = re.sub(r"<style.*?>.*?</style>", " ", text, flags=re.DOTALL)
            text = re.sub(r"<[^>]+>", " ", text)
            # Find all words
            words = re.findall(r"[a-zA-Z]+", text)
            for w in words:
                ref_words.add(w.lower())

print("Loaded unique reference words count:", len(ref_words))

# Parse cipher pages into words
# Word is a list of integers (or strings representing integers)
cipher_words = []
all_cipher_tokens = set()

lines = cipher_content.splitlines()
for line in lines:
    if line.startswith("--- Page ") or not line.strip():
        continue
    # Find all sequences of numbers, e.g. /1/2/3/4
    # Note: /i255 is the space separator
    parts = line.split("/i255")
    for part in parts:
        if not part.strip():
            continue
        # Extract individual character IDs
        ids = [x for x in part.split("/") if x.strip()]
        if ids:
            cipher_words.append(ids)
            for cid in ids:
                all_cipher_tokens.add(cid)

print("Unique cipher tokens count:", len(all_cipher_tokens))
print("Total cipher words count:", len(cipher_words))

# Let's perform a backtracking search or dictionary search to find the mapping!
# Let's define the signature of a word
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

print("Number of unique word signatures in reference:", len(sig_to_ref_words))

# Let's build a map from cipher word to possible reference words
cipher_word_options = []
for cw in cipher_words:
    sig = get_signature(cw)
    options = sig_to_ref_words.get(sig, [])
    cipher_word_options.append((cw, options))

# Let's sort cipher words by number of options (ascending) to solve easily
# We only want unique word tokens to solve globally
unique_cipher_words = []
seen_cw = set()
for cw, options in cipher_word_options:
    cw_tuple = tuple(cw)
    if cw_tuple not in seen_cw:
        seen_cw.add(cw_tuple)
        unique_cipher_words.append((cw, options))

unique_cipher_words.sort(key=lambda x: len(x[1]))

print("Unique cipher words to map:", len(unique_cipher_words))

# Let's write a simple constraint satisfaction solver (CSP) in Python
mapping = {}
reverse_mapping = {}

def solve(index):
    if index >= len(unique_cipher_words):
        return True
    
    cw, options = unique_cipher_words[index]
    
    # If no options, we cannot map this word (maybe it's not in the reference set)
    # We can skip words with 0 options first, or try to map them later
    if not options:
        return solve(index + 1)
        
    for option in options:
        # Try to map cw to option
        temp_added = {}
        possible = True
        for cid, char in zip(cw, option):
            if cid in mapping:
                if mapping[cid] != char:
                    possible = False
                    break
            else:
                if char in reverse_mapping:
                    # Character is already mapped to another ID
                    possible = False
                    break
                # Add temporary mapping
                mapping[cid] = char
                reverse_mapping[char] = cid
                temp_added[cid] = char
        
        if possible:
            if solve(index + 1):
                return True
                
        # Backtrack
        for cid in temp_added:
            del mapping[cid]
            char = temp_added[cid]
            del reverse_mapping[char]
            
    return False

# Try to solve starting with words that have > 0 options
solve_list = [x for x in unique_cipher_words if len(x[1]) > 0]
unique_cipher_words = solve_list

success = solve(0)
print("CSP Solve success:", success)
print("Mapped count:", len(mapping))

# Dump mapping to a JSON file
with open("mapping.json", "w") as f:
    json.dump(mapping, f, indent=2)

print("Saved mapping to mapping.json")
