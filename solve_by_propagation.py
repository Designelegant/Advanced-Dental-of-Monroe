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

print("Loaded unique reference words:", len(ref_words))

# Parse cipher pages into words
cipher_words = []
lines = cipher_content.splitlines()
for line in lines:
    if line.startswith("--- Page ") or not line.strip():
        continue
    parts = line.split("/i255")
    for part in parts:
        if not part.strip():
            continue
        ids = [x for x in part.split("/") if x.strip()]
        if ids:
            cipher_words.append(ids)

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

# Mapping dictionary
mapping = {}
reverse_mapping = {}

# Manually seeding known maps from our URL analysis:
# https://www.advanceddentalofmonroe.com
# 38->h, 32->t, 33->p, 26->s, 64->:, 71->/, 37->w, 40->., 18->a, 21->d, 63->v, 19->n, 29->c, 31->e, 28->l, 30->o, 27->f, 17->m, 34->r, 102->j, 62->u
known_seed = {
    "38": "h", "32": "t", "33": "p", "26": "s", "64": ":", "71": "/",
    "37": "w", "40": ".", "18": "a", "21": "d", "63": "v", "19": "n",
    "29": "c", "31": "e", "28": "l", "30": "o", "27": "f", "17": "m",
    "34": "r", "102": "j", "62": "u"
}

for k, v in known_seed.items():
    mapping[k] = v
    reverse_mapping[v] = k

# Constraint propagation loop
changed = True
while changed:
    changed = False
    
    # Check all cipher words
    unique_cw = set(tuple(x) for x in cipher_words)
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
                
        # If only 1 valid option remains, we map it!
        if len(valid_options) == 1:
            opt = valid_options[0]
            for cid, char in zip(cw, opt):
                if cid not in mapping:
                    mapping[cid] = char
                    reverse_mapping[char] = cid
                    changed = True
                    print(f"Mapped {cid} -> {char} from word '{opt}'")

print("Propagation finished. Mapped count:", len(mapping))

# Print decrypted preview of first 50 cipher words
decrypted_words = []
for cw in cipher_words[:100]:
    dec_word = "".join(mapping.get(cid, "?") for cid in cw)
    decrypted_words.append(dec_word)

print("Decrypted preview:", " ".join(decrypted_words))

# Dump mapping to mapping.json
with open("mapping.json", "w") as f:
    json.dump(mapping, f, indent=2)
