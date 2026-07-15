import pypdf

reader = pypdf.PdfReader("Advanced Dental of Monroe - Content Extraction - Google Docs.pdf")
print("Total pages:", len(reader.pages))

for idx, page in enumerate(reader.pages):
    print(f"\n--- Page {idx+1} Raw Text ---")
    text = page.extract_text()
    print(text[:1000]) # Print first 1000 characters of each page
