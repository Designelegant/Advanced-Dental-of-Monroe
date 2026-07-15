import os

path_ids = ["27", "20", "u", "25", "15", "43", "53", "43", "23", "u", "21", "16", "53", "64", "129"]

# Let's list all PHP files in current directory
files = [f for f in os.listdir(".") if f.endswith(".php")]

print("Path IDs length:", len(path_ids))

for f in files:
    name = f[:-4] # remove .php
    # replace hyphens/numbers to get characters
    # Let's see if the length matches
    if len(name) == len(path_ids):
        print(f"Match by length: {f}")
        # Let's check matching pattern
        # Group path_ids by their value
        pattern = {}
        for i, val in enumerate(path_ids):
            if val not in pattern:
                pattern[val] = []
            pattern[val].append(i)
            
        name_pattern = {}
        for i, char in enumerate(name):
            if char not in name_pattern:
                name_pattern[char] = []
            name_pattern[char].append(i)
            
        if sorted(pattern.values()) == sorted(name_pattern.values()):
            print(f"  EXACT PATTERN MATCH: {f} !!!")
