with open("decrypted_content.txt", "r", encoding="utf-8") as f:
    dec_lines = f.read().splitlines()

with open("extracted_pypdf.txt", "r", encoding="utf-8") as f:
    ext_lines = f.read().splitlines()

print("=== DECRYPTED ===")
for i in range(20, 32):
    if i < len(dec_lines):
        print(f"{i}: {dec_lines[i]}")

print("=== EXTRACTED ===")
for i in range(20, 32):
    if i < len(ext_lines):
        print(f"{i}: {ext_lines[i]}")
