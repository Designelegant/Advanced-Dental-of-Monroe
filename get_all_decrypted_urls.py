with open("decrypted_content.txt", "r", encoding="utf-8") as f:
    text = f.read()

import re
urls = re.findall(r"https?://[^\s]+", text)
for u in sorted(set(urls)):
    print("Found URL in decrypted text:", u)
