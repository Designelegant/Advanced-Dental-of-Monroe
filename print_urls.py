import re

with open("decrypted_content.txt", "r", encoding="utf-8") as f:
    text = f.read()

print("--- Printing lines containing '.com/' in decrypted_content.txt ---")
for line in text.splitlines():
    if ".com/" in line or ".com" in line or "http" in line or "html" in line:
        print(line)
