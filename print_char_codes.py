with open("extracted_pdfminer.txt", "r", encoding="utf-8") as f:
    lines = f.readlines()

print("--- Printing lines 10 to 45 of extracted_pdfminer.txt with character codes ---")
for i in range(9, 44):
    line = lines[i].strip()
    char_codes = [ord(c) for c in line]
    print(f"Line {i+1}: {line}")
    print(f"  Codes: {char_codes}")
