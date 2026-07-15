import os

path_ids = ["27", "20", "u", "25", "15", "43", "53", "43", "23", "u", "21", "16", "53", "64", "129"]

# Let's collect all words from the website's PHP files
all_words = set()
for filename in os.listdir("."):
    if filename.endswith(".php"):
        with open(filename, "r", encoding="utf-8") as f:
            text = f.read()
            import re
            words = re.findall(r"[a-zA-Z]+", text)
            for w in words:
                all_words.add(w.lower())

# Add some common dental terms
common = [
    "dental", "laser", "decay", "crown", "tooth", "teeth", "bridge", "veneer", "fill",
    "smile", "brace", "align", "clean", "white", "bleach", "doctor", "nyman", "aydin",
    "monica", "mossad", "monroe", "office", "policy", "forms", "implants", "extract",
    "same", "day", "dentist", "dentistry", "child", "pediatric", "procedures", "cosmetic",
    "restore", "restorative"
]
for w in common:
    all_words.add(w.lower())

words_6 = [w for w in all_words if len(w) == 6]
words_5 = [w for w in all_words if len(w) == 5]
words_2 = [w for w in all_words if len(w) == 2] + [str(x) for x in range(10, 100)]

# Optimize: path_ids pattern constraint mapping:
# Let's match the character equality constraints directly!
# path_ids: ["27", "20", "u", "25", "15", "43", "53", "43", "23", "u", "21", "16", "53", "64", "129"]
# Index mapping:
# 0: 27
# 1: 20
# 2: u
# 3: 25
# 4: 15
# 5: 43
# 6: 53 (hyphen)
# 7: 43
# 8: 23
# 9: u
# 10: 21
# 11: 16
# 12: 53 (hyphen)
# 13: 64
# 14: 129
#
# Constraints:
# - s[6] == '-'
# - s[12] == '-'
# - s[2] == s[9]  (u)
# - s[5] == s[7]  (43)
# - All other characters at different ID positions must be unique and not match each other!

print(f"6-letter: {len(words_6)}, 5-letter: {len(words_5)}, 2-letter: {len(words_2)}")

for w1 in words_6:
    for w2 in words_5:
        # s[5] == s[7] -> w1[5] == w2[0]
        if w1[5] != w2[0]:
            continue
        for w3 in words_2:
            s = f"{w1}-{w2}-{w3}"
            # s[2] == s[9] -> w1[2] == w2[2]
            if w1[2] != w2[2]:
                continue
            
            # Check full pattern uniqueness mapping
            seen = {}
            possible = True
            for cid, char in zip(path_ids, s):
                if cid in seen:
                    if seen[cid] != char:
                        possible = False
                        break
                else:
                    if char in seen.values():
                        possible = False
                        break
                    seen[cid] = char
            if possible:
                print(f"MATCH FOUND: {s}")
