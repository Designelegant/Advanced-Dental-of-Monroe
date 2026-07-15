with open("extracted_pypdf.txt", "r", encoding="utf-8") as f:
    for line in f:
        if "boto" in line or "79" in line:
            if "advanced" in line or "15/27/30" in line:
                print(line)
