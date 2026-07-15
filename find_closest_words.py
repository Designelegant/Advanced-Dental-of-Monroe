import re

with open("clean_decrypted_pages.txt", "r", encoding="utf-8") as f:
    clean_text = f.read()

# Let's find all words on Page 1 of clean_decrypted_pages.txt
words = re.findall(r"[a-zA-Z-]+", clean_text)
print("Unique words in clean text:", len(set(words)))

# Let's check signature matching
def get_signature(word):
    seen = {}
    sig = []
    for c in word.lower():
        if c not in seen:
            seen[c] = len(seen)
        sig.append(seen[c])
    return tuple(sig)

for w in sorted(set(words)):
    sig = get_signature(w)
    if len(sig) == 12:
        print(f"12-char word: {w} -> {sig}")
    elif len(sig) == 4:
        # print(f"4-char word: {w} -> {sig}")
        pass
    elif len(sig) == 6:
        print(f"6-char word: {w} -> {sig}")
