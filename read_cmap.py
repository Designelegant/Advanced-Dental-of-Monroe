import pypdf

pdf_path = "Advanced Dental of Monroe - Content Extraction - Google Docs.pdf"
reader = pypdf.PdfReader(pdf_path)

print("Number of pages:", len(reader.pages))

# Let's inspect the fonts on page 1
page = reader.pages[0]
if "/Resources" in page and "/Font" in page["/Resources"]:
    fonts = page["/Resources"]["/Font"]
    for font_key in fonts:
        font = fonts[font_key]
        print("Font key:", font_key)
        print("Font type:", font.get("/Subtype"))
        print("Font name:", font.get("/BaseFont"))
        if "/ToUnicode" in font:
            tu = font["/ToUnicode"]
            print("ToUnicode type:", type(tu))
            try:
                data = tu.get_data()
                print("ToUnicode data preview:", data[:400])
            except Exception as e:
                print("Error reading ToUnicode data:", e)
        else:
            print("No ToUnicode CMap for this font")
