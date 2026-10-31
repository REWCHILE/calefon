import os
from PIL import Image, ImageDraw, ImageFont, ImageFilter

def draw_checkmark(draw, x, y, size=18, color=(34, 197, 94)):
    # Draw nice circle with checkmark
    r = size // 2
    cx, cy = x + r, y + r
    draw.ellipse([(x, y), (x + size, y + size)], fill=color)
    # Checkmark lines
    draw.line([(cx - 4, cy), (cx - 1, cy + 3)], fill=(255, 255, 255), width=2)
    draw.line([(cx - 1, cy + 3), (cx + 5, cy - 3)], fill=(255, 255, 255), width=2)

def draw_phone_icon(draw, x, y, color=(255, 255, 255)):
    # Modern handset icon drawn with shapes
    draw.rounded_rectangle([(x, y), (x + 16, y + 26)], radius=4, outline=color, width=2)
    draw.line([(x + 5, y + 3), (x + 11, y + 3)], fill=color, width=2)
    draw.ellipse([(x + 6, y + 20), (x + 10, y + 24)], fill=color)

def draw_bolt_icon(draw, x, y, color=(245, 158, 11)):
    # Lightning bolt polygon
    pts = [(x + 8, y), (x + 2, y + 10), (x + 7, y + 10), (x + 4, y + 18), (x + 12, y + 7), (x + 7, y + 7)]
    draw.polygon(pts, fill=color)

def draw_shield_icon(draw, x, y, color=(59, 130, 246)):
    # Shield shape
    pts = [(x, y), (x + 16, y), (x + 16, y + 12), (x + 8, y + 20), (x, y + 12)]
    draw.polygon(pts, fill=color)
    draw.line([(x + 5, y + 9), (x + 7, y + 12)], fill=(255, 255, 255), width=2)
    draw.line([(x + 7, y + 12), (x + 12, y + 6)], fill=(255, 255, 255), width=2)

def create_og_image():
    W, H = 1200, 630
    
    # 1. Crear fondo degradado elegante Deep Navy
    base = Image.new("RGBA", (W, H), (15, 23, 42, 255))
    draw = ImageDraw.Draw(base)
    
    # Gradiente vertical/radial suave
    for y in range(H):
        ratio = y / H
        r = int(10 + ratio * 8)
        g = int(18 + ratio * 10)
        b = int(34 + ratio * 18)
        draw.line([(0, y), (W, y)], fill=(r, g, b, 255))
        
    # Crear capas de resplandor (glow)
    glow_layer = Image.new("RGBA", (W, H), (0, 0, 0, 0))
    glow_draw = ImageDraw.Draw(glow_layer)
    
    # Resplandor naranja llama en la parte superior izquierda
    glow_draw.ellipse([(-120, -120), (550, 480)], fill=(255, 94, 20, 50))
    # Resplandor azul institucional SEC a la derecha
    glow_draw.ellipse([(760, 40), (1380, 620)], fill=(37, 99, 235, 60))
    glow_layer = glow_layer.filter(ImageFilter.GaussianBlur(90))
    
    base = Image.alpha_composite(base, glow_layer)
    draw = ImageDraw.Draw(base)
    
    # Fuentes de Windows
    font_title_bold = ImageFont.truetype('C:/Windows/Fonts/bahnschrift.ttf', 44)
    font_phone = ImageFont.truetype('C:/Windows/Fonts/bahnschrift.ttf', 54)
    font_sec_title = ImageFont.truetype('C:/Windows/Fonts/bahnschrift.ttf', 24)
    font_h2 = ImageFont.truetype('C:/Windows/Fonts/arialbd.ttf', 26)
    font_body_bold = ImageFont.truetype('C:/Windows/Fonts/arialbd.ttf', 19)
    font_body = ImageFont.truetype('C:/Windows/Fonts/arial.ttf', 17)
    font_badge = ImageFont.truetype('C:/Windows/Fonts/arialbd.ttf', 14)
    font_small = ImageFont.truetype('C:/Windows/Fonts/arial.ttf', 14)
    font_footer = ImageFont.truetype('C:/Windows/Fonts/arialbd.ttf', 14)

    # 2. Barra Superior: Tag de Marca y Cobertura
    # Tag flame pill
    draw.rounded_rectangle([(50, 36), (460, 72)], radius=8, fill=(255, 94, 20, 235))
    draw.text((65, 45), "CENTRAL CALEFÓN CHILE • SERVICIO TÉCNICO", fill=(255, 255, 255), font=font_badge)
    
    # Subtag urgente
    draw.rounded_rectangle([(475, 36), (725, 72)], radius=8, fill=(30, 41, 59, 235), outline=(51, 65, 85), width=1)
    draw_bolt_icon(draw, 490, 45, color=(245, 158, 11))
    draw.text((512, 45), "URGENCIAS EN EL DÍA 24/7", fill=(245, 158, 11), font=font_badge)

    # 3. Titular Principal
    draw.text((50, 92), "REPARACIÓN Y MANTENCIÓN", fill=(255, 255, 255), font=font_title_bold)
    draw.text((50, 142), "DE CALEFONES A DOMICILIO", fill=(255, 94, 20), font=font_title_bold)

    # 4. TARJETA PRIORITARIA: NÚMERO DE TELÉFONO DE CONTACTO
    # "La imagen tiene que priorizar el número de teléfono de contacto"
    phone_card_x1, phone_card_y1 = 50, 210
    phone_card_x2, phone_card_y2 = 700, 390
    
    # Sombra del contenedor de teléfono
    draw.rounded_rectangle([(phone_card_x1+4, phone_card_y1+4), (phone_card_x2+4, phone_card_y2+4)], radius=16, fill=(0, 0, 0, 130))
    # Fondo con borde flame brillante
    draw.rounded_rectangle([(phone_card_x1, phone_card_y1), (phone_card_x2, phone_card_y2)], radius=16, fill=(16, 26, 46), outline=(255, 94, 20), width=3)
    
    # Franja de cabecera de la tarjeta
    draw.rounded_rectangle([(phone_card_x1, phone_card_y1), (phone_card_x2, phone_card_y1+44)], radius=14, fill=(255, 94, 20))
    draw_phone_icon(draw, phone_card_x1 + 22, phone_card_y1 + 9, color=(255, 255, 255))
    draw.text((phone_card_x1 + 48, phone_card_y1 + 13), "CONTACTO DIRECTO & WHATSAPP 24 HORAS", fill=(255, 255, 255), font=font_badge)

    # Número de teléfono ENORME y súper claro
    draw.text((phone_card_x1 + 35, phone_card_y1 + 60), "+56 9 3223 7072", fill=(255, 255, 255), font=font_phone)
    
    # Subtítulo del teléfono
    draw.text((phone_card_x1 + 35, phone_card_y1 + 128), "Atención Telefónica y Visitas Técnicas Inmediatas en Terreno", fill=(203, 213, 225), font=font_body)

    # 5. Beneficios rápidos con círculos checkmark limpios
    benefits = [
        "Técnicos en Terreno con Repuestos Originales Multimarca",
        "Diagnóstico Certero y Presupuesto Transparente en su Hogar",
        "Cobertura Integral en Santiago y Principales Regiones"
    ]
    by = 412
    for ben in benefits:
        draw_checkmark(draw, 52, by + 1, size=18, color=(34, 197, 94))
        draw.text((80, by), ben, fill=(226, 232, 240), font=font_body_bold)
        by += 34

    # 6. TARJETA PRIORITARIA DERECHA: CERTIFICACIÓN OFICIAL SEC
    # "y de que es certificado SEC"
    sec_x1, sec_y1 = 735, 92
    sec_x2, sec_y2 = 1150, 525
    
    # Sombra
    draw.rounded_rectangle([(sec_x1+4, sec_y1+4), (sec_x2+4, sec_y2+4)], radius=18, fill=(0, 0, 0, 150))
    # Contenedor azul oficial SEC
    draw.rounded_rectangle([(sec_x1, sec_y1), (sec_x2, sec_y2)], radius=18, fill=(13, 31, 60), outline=(59, 130, 246), width=2)
    
    # Cabecera de acreditación SEC
    draw.rounded_rectangle([(sec_x1, sec_y1), (sec_x2, sec_y1+65)], radius=16, fill=(30, 64, 175))
    draw.text((sec_x1 + 22, sec_y1 + 12), "CERTIFICACIÓN OFICIAL SEC", fill=(255, 255, 255), font=font_sec_title)
    draw.text((sec_x1 + 22, sec_y1 + 40), "Superintendencia de Electricidad y Combustibles", fill=(191, 219, 254), font=font_small)

    # Datos del Técnico Acreditado
    draw.text((sec_x1 + 22, sec_y1 + 80), "GASFÍTER INSTALADOR AUTORIZADO", fill=(245, 158, 11), font=font_badge)
    draw.text((sec_x1 + 22, sec_y1 + 102), "Domingo Isaín Plaza Caamaño", fill=(255, 255, 255), font=font_body_bold)
    draw.text((sec_x1 + 22, sec_y1 + 128), "R.U.T: 12.738.961-6  •  SEC Clase 3", fill=(148, 163, 184), font=font_body)
    
    # Línea separadora
    draw.line([(sec_x1 + 22, sec_y1 + 158), (sec_x2 - 22, sec_y1 + 158)], fill=(51, 65, 85), width=1)

    # Incrustar el código QR Oficial SEC
    qr_path = "assets/images/enlace-sec-qr.png"
    if os.path.exists(qr_path):
        qr_img = Image.open(qr_path).convert("RGBA")
        qr_size = 135
        qr_img = qr_img.resize((qr_size, qr_size), Image.Resampling.LANCZOS)
        
        # Fondo blanco para el QR
        draw.rounded_rectangle([(sec_x1 + 22, sec_y1 + 172), (sec_x1 + 22 + qr_size + 10, sec_y1 + 172 + qr_size + 10)], radius=8, fill=(255, 255, 255))
        base.paste(qr_img, (sec_x1 + 27, sec_y1 + 177), qr_img)
        
        # Texto junto al QR
        draw.text((sec_x1 + 175, sec_y1 + 182), "VERIFICACIÓN SEC", fill=(255, 255, 255), font=font_badge)
        draw.text((sec_x1 + 175, sec_y1 + 206), "Código QR oficial", fill=(148, 163, 184), font=font_small)
        draw.text((sec_x1 + 175, sec_y1 + 226), "de validación estatal", fill=(148, 163, 184), font=font_small)
        draw.text((sec_x1 + 175, sec_y1 + 246), "con la SEC de Chile.", fill=(148, 163, 184), font=font_small)
        
        # Sello de validez con checkmark
        draw.rounded_rectangle([(sec_x1 + 175, sec_y1 + 276), (sec_x2 - 22, sec_y1 + 312)], radius=6, fill=(16, 185, 129))
        draw_checkmark(draw, sec_x1 + 184, sec_y1 + 285, size=16, color=(5, 150, 105))
        draw.text((sec_x1 + 208, sec_y1 + 286), "VIGENTE & REGULADO", fill=(255, 255, 255), font=font_badge)

    # Sello de garantía de seguridad
    draw.rounded_rectangle([(sec_x1 + 22, sec_y1 + 338), (sec_x2 - 22, sec_y1 + 418)], radius=8, fill=(15, 23, 42), outline=(30, 58, 138), width=1)
    draw_shield_icon(draw, sec_x1 + 32, sec_y1 + 348, color=(59, 130, 246))
    draw.text((sec_x1 + 56, sec_y1 + 350), "TRABAJOS 100% SEGUROS BAJO NORMA", fill=(255, 255, 255), font=font_badge)
    draw.text((sec_x1 + 34, sec_y1 + 378), "Garantía escrita de 3 a 6 meses en todas las reparaciones.", fill=(148, 163, 184), font=font_small)

    # 7. BARRA INFERIOR / FOOTER
    draw.rectangle([(0, H - 72), (W, H)], fill=(7, 12, 23))
    draw.line([(0, H - 72), (W, H - 72)], fill=(30, 41, 59), width=1)
    
    footer_text = "MULTIMARCA: Junkers • Splendid • Mademsa • Neckar • Rheem • Ursus Trotter • Bosch • Trotter • Anwo • Rinnai"
    draw.text((50, H - 46), footer_text, fill=(148, 163, 184), font=font_footer)
    
    # Guardar en JPEG alta calidad optimizado para Facebook Debugger (1200x630)
    output_path = "assets/images/og-central-calefon-sec.jpg"
    rgb_img = base.convert("RGB")
    rgb_img.save(output_path, "JPEG", quality=95, optimize=True)
    print(f"Generated {output_path} successfully ({os.path.getsize(output_path)} bytes)")

if __name__ == '__main__':
    create_og_image()
