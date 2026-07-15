import pypdf
import pdfminer.high_level

pdf_path = "Advanced Dental of Monroe - Content Extraction - Google Docs.pdf"

print("=== PYPDF ===")
try:
    reader = pypdf.PdfReader(pdf_path)
    for i in range(min(5, len(reader.pages))):
        print(f"--- Page {i+1} ---")
        print(reader.pages[i].extract_text()[:400])
except Exception as e:
    print("pypdf error:", e)

print("=== PDFMINER ===")
try:
    text = pdfminer.high_level.extract_text(pdf_path, page_numbers=[0, 1, 2])
    print(text[:1000])
except Exception as e:
    print("pdfminer error:", e)
