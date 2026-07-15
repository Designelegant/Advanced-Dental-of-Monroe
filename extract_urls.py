import re
import json

with open("mapping.json", "r") as f:
    mapping = json.load(f)

# More mappings
mapping.update({
    "61": ":", "62": "/", "49": "w", "37": ".", "17": "h", "25": "t", "36": "p", "16": "s",
    "15": "a", "27": "d", "30": "v", "u": "n", "19": "c", "20": "e", "43": "l", "53": "-",
    "23": "i", "21": "k", "64": "1", "129": "8", "32": "m", "v": "o", "41": "f", "26": "r",
    "c": "o", "p": "n"
})

with open("extracted_pypdf.txt", "r", encoding="utf-8") as f:
    content = f.read()

# Let's find all words / URL-like segments (containing dots/slashes/etc)
parts = re.findall(r"/i255(.*?)/i255", content, re.DOTALL)

urls = []
for p in parts:
    ids = [x for x in p.split("/") if x.strip()]
    dec_word = "".join(mapping.get(cid, f"[{cid}]") for cid in ids)
    if ".html" in dec_word or "http" in dec_word or "www" in dec_word or "monroe" in dec_word:
        urls.append(dec_word)

for u in sorted(set(urls)):
    print("Found URL:", u)
