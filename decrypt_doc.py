import json
import re

# Load mapping
with open("mapping.json", "r") as f:
    mapping = json.load(f)

# Read extracted_pypdf.txt
with open("extracted_pypdf.txt", "r", encoding="utf-8") as f:
    cipher_content = f.read()

# Let's decrypt line by line
decrypted_lines = []
for line in cipher_content.splitlines():
    if line.startswith("--- Page "):
        decrypted_lines.append("\n" + line + "\n")
        continue
    
    parts = line.split("/i255")
    decrypted_words = []
    for part in parts:
        if not part.strip():
            continue
        ids = [x for x in part.split("/") if x.strip()]
        dec_word = ""
        for cid in ids:
            dec_word += mapping.get(cid, f"[{cid}]")
        decrypted_words.append(dec_word)
    decrypted_lines.append(" ".join(decrypted_words))

# Save decrypted content
with open("decrypted_content.txt", "w", encoding="utf-8") as f:
    f.write("\n".join(decrypted_lines))

print("Saved decrypted content to decrypted_content.txt")
