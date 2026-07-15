import pypdf
import pdfminer.high_level

pdf_path = "Advanced Dental of Monroe - Content Extraction - Google Docs.pdf"

print("Trying pypdf...")
try:
    reader = pypdf.PdfReader(pdf_path)
    pypdf_text = []
    for i, page in enumerate(reader.pages):
        pypdf_text.append(f"--- Page {i+1} ---\n{page.extract_text()}\n")
    with open("extracted_pypdf.txt", "w", encoding="utf-8") as f:
        f.write("\n".join(pypdf_text))
    print("pypdf done!")
except Exception as e:
    print("pypdf error:", e)

print("Trying pdfminer...")
try:
    text = pdfminer.high_level.extract_text(pdf_path)
    with open("extracted_pdfminer.txt", "w", encoding="utf-8") as f:
        f.write(text)
    print("pdfminer done!")
except Exception as e:
    print("pdfminer error:", e)
