import re

with open("extracted_pypdf.txt", "r", encoding="utf-8") as f:
    content = f.read()

# Separate pages
pages = {}
current_page = None
for line in content.splitlines():
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

# Load mapped characters from mapping.json
import json
with open("mapping.json", "r", encoding="utf-8") as f:
    char_map = json.load(f)

# Let's write a decryptor for each page
for page_num in sorted(pages.keys()):
    print(f"\n--- Page {page_num} ---")
    for idx, line in enumerate(pages[page_num]):
        words = []
        for cw in line:
            w = ""
            for cid in cw:
                # If cid is in char_map, use it
                if cid in char_map:
                    w += char_map[cid]
                else:
                    # Let's check if it is already a letter
                    if re.match(r"^[a-zA-Z\.:/-]$", cid):
                        w += cid.lower()
                    else:
                        w += f"[{cid}]"
            words.append(w)
        dec_line = " ".join(words)
        # Check if this line looks like a URL or has meta/title
        if "http" in dec_line or ".com" in dec_line or "meta" in dec_line or "title" in dec_line:
            print(f"Line {idx+1}: {dec_line}")
