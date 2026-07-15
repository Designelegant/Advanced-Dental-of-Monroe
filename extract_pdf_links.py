import pypdf

reader = pypdf.PdfReader("Advanced Dental of Monroe - Content Extraction - Google Docs.pdf")

print("--- Extracting all links from PDF annotations ---")
for idx, page in enumerate(reader.pages):
    print(f"\nPage {idx+1}:")
    if "/Annots" in page:
        annots = page["/Annots"]
        for annot in annots:
            obj = annot.get_object()
            if "/A" in obj and "/URI" in obj["/A"]:
                print("Link URI:", obj["/A"]["/URI"])
            else:
                print("Annotation without URI:", obj.get("/Subtype"))
    else:
        print("No annotations on this page.")
