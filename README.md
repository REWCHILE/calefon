# Central Calefón Chile

Sitio web oficial de **Central Calefón** ([centralcalefon.cl](https://centralcalefon.cl/)), servicio técnico especializado en reparación, mantención preventiva e instalación de calefones, calderas y termos eléctricos a domicilio en Chile, con gasfíteres autorizados y acreditados por la **Superintendencia de Electricidad y Combustibles (SEC)**.

---

## 🛠️ Tecnologías y Arquitectura
- **Backend / Core:** PHP 8.x nativo de alto rendimiento (sin dependencias pesadas, sin necesidad de base de datos MySQL para formularios).
- **Conversión WhatsApp Directa:** Enrutamiento instantáneo de cotizaciones e incidencias directamente a la API de WhatsApp Business (`+56 9 3223 7072`).
- **Frontend:** HTML5 Semántico + CSS3 Vanilla avanzado (variables CSS, micro-animaciones, diseño responsive para móviles/tablets).
- **Sliders Interactivos:** Motor universal JavaScript nativo con **Autoplay**, indicador de estado en tiempo real (`Autoplay activo` / `Pausado para lectura`) y pausa instantánea al posar el cursor o leer.
- **SEO & AI Search:**
  - Microdatos Schema.org (`LocalBusiness`, `Plumber`, `HVACBusiness`, `FAQPage`).
  - Metadatos Open Graph y Twitter Cards optimizados para **Facebook Sharing Debugger** y WhatsApp (`1200x630`).
  - Archivos de indexación para motores de inteligencia artificial (`llm.txt`, `full-llm.txt`, `sitemap.xml`, `robots.txt`).

---

## 🚀 Despliegue en VPS (HestiaCP / Apache / Nginx)

En servidores con **Hestia Control Panel** (ej. Hostinger KVM8):
La ruta web pública del dominio suele ubicarse en:
`/home/<USUARIO>/web/<DOMINIO>/public_html/`

Ver las instrucciones de migración y comandos bash proporcionados en la documentación del proyecto.
