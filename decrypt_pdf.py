import os
import re
import html

# 1. Read the cipher text
with open("extracted_pypdf.txt", "r", encoding="utf-8") as f:
    cipher_content = f.read()

# Parse pages from extracted_pypdf.txt
cipher_pages = {}
current_page = None
for line in cipher_content.splitlines():
    if line.startswith("--- Page "):
        current_page = int(re.search(r"\d+", line).group())
        cipher_pages[current_page] = []
    elif current_page is not None and line.strip():
        cipher_pages[current_page].append(line.strip())

# 2. Helper to clean text
def clean_text(text):
    # Remove HTML tags
    text = re.sub(r"<[^>]+>", " ", text)
    # Decode HTML entities
    text = html.unescape(text)
    # Keep only alphanumeric, spaces, and basic punctuation
    text = re.sub(r"\s+", " ", text)
    return text.strip()

# 3. Read some existing pages to use as plain text reference
reference_texts = []
ref_files = [
    "restorative-procedures-12.php",
    "dental-implants-13.php",
    "cosmetic-procedures-11.php",
    "cleaning-and-prevention-10.php",
    "pediatric-dentistry-16.php",
    "tooth-extractions-14.php"
]

for filename in ref_files:
    if os.path.exists(filename):
        with open(filename, "r", encoding="utf-8") as f:
            content = f.read()
            # Extract plain text content inside body/tags
            cleaned = clean_text(content)
            reference_texts.append((filename, cleaned))

print(f"Loaded {len(reference_texts)} reference files.")

# Let's inspect the cipher lines of page 1 and page 2
print("\nPage 1 cipher line count:", len(cipher_pages.get(1, [])))
print("Page 2 cipher line count:", len(cipher_pages.get(2, [])))
print("Page 3 cipher line count:", len(cipher_pages.get(3, [])))
print("Page 4 cipher line count:", len(cipher_pages.get(4, [])))
