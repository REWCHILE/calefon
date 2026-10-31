<?php
// includes/header.php
if (!isset($pageTitle)) {
    $pageTitle = "Central Calefón | Servicio Técnico Gasfíter Certificado SEC a Domicilio Chile";
}
if (!isset($pageDescription)) {
    $pageDescription = "Servicio técnico especialista en reparación, mantención e instalación de calefones y calderas a domicilio en Chile. Técnicos autorizados SEC. Cobertura nacional 24/7. Llama al +56 9 3223 7072.";
}
if (!isset($currentPage)) {
    $currentPage = 'home';
}
$canonicalUrl = "https://centralcalefon.cl/" . (($currentPage === 'home') ? '' : $currentPage . '.php');
$ogImage = "https://centralcalefon.cl/assets/images/og-central-calefon-sec.jpg";
?>
<!DOCTYPE html>
<html lang="es-CL">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://centralcalefon.cl/<?php echo ($currentPage === 'home') ? '' : $currentPage . '.php'; ?>">
  
  <!-- Open Graph / Facebook Debugger / WhatsApp / Redes Sociales -->
  <meta property="og:locale" content="es_CL">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:site_name" content="Central Calefón Chile">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta property="og:image:secure_url" content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Central Calefón Chile - Servicio Técnico Gasfíter Certificado SEC - Urgencias: +56 9 3223 7072">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta name="twitter:image:alt" content="Central Calefón Chile - Certificado SEC - Teléfono: +56 9 3223 7072">
  
  <!-- Tipografía Google Fonts moderna -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Font Awesome para Iconografía Técnica -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Hoja de Estilos Principal -->
  <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo file_exists(__DIR__ . '/../assets/css/styles.css') ? filemtime(__DIR__ . '/../assets/css/styles.css') : '1.2'; ?>">
  <link rel="icon" type="image/webp" href="logotipo-central-calefon.webp">

  <!-- SCHEMA JSON-LD: LocalBusiness + Plumber + HVACBusiness -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": ["LocalBusiness", "Plumber", "HVACBusiness"],
    "@id": "https://centralcalefon.cl/#business",
    "name": "Central Calefón - Servicio Técnico Gasfíter Certificado SEC",
    "alternateName": "Central Calefón Chile",
    "url": "https://centralcalefon.cl",
    "logo": "https://centralcalefon.cl/logotipo-central-calefon.webp",
    "image": "https://centralcalefon.cl/imagen-certificado-encargado-domingo-isain-caamaño.jpg",
    "description": "Servicio técnico integral de gasfitería, mantención, reparación e instalación de calefones multimarca a domicilio en todo Chile con técnicos certificados por la Superintendencia de Electricidad y Combustibles (SEC).",
    "telephone": "+56932237072",
    "priceRange": "$$",
    "currenciesAccepted": "CLP",
    "paymentAccepted": "Efectivo, Transferencia Bancaria, Tarjeta de Débito, Tarjeta de Crédito",
    "areaServed": [
      { "@type": "AdministrativeArea", "name": "Región Metropolitana de Santiago" },
      { "@type": "AdministrativeArea", "name": "Región de Coquimbo - La Serena" },
      { "@type": "AdministrativeArea", "name": "Región de Valparaíso" },
      { "@type": "Country", "name": "Chile" }
    ],
    "hasCredential": {
      "@type": "EducationalOccupationalCredential",
      "credentialCategory": "Certificación Oficial SEC Gasfíter",
      "recognizedBy": {
        "@type": "GovernmentOrganization",
        "name": "Superintendencia de Electricidad y Combustibles (SEC)",
        "url": "https://www.sec.cl"
      }
    },
    "founder": {
      "@type": "Person",
      "name": "Domingo Isaín Plaza Caamaño",
      "jobTitle": "Técnico Gasfíter Certificado SEC",
      "identifier": "12.738.961-6",
      "telephone": "+56932237072"
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      }
    ]
  }
  </script>

  <!-- SCHEMA JSON-LD: Preguntas Frecuentes (FAQPage) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "¿Por qué mi calefón prende y se apaga a los pocos segundos?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Esta falla suele deberse a la termocupla o al sensor de ionización defectuoso, acumulación de sarro en el serpentín, pilas agotadas en modelos automáticos, o activación del sensor de temperatura por evacuación deficiente de gases (tiro forzado/natural)."
        }
      },
      {
        "@type": "Question",
        "name": "¿Qué diferencia hay entre un calefón ionizado y uno de tiro forzado?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "El calefón ionizado enciende automáticamente mediante pilas o hidrogenerador al abrir la llave de agua, sin llama piloto constante. El calefón de tiro forzado cuenta adicionalmente con un extractor eléctrico que expulsa los gases de combustión hacia el exterior, siendo obligatorio en edificios y recintos con ventilación limitada según la norma SEC."
        }
      },
      {
        "@type": "Question",
        "name": "¿Qué exige la normativa SEC para la instalación de un calefón en Chile?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "La normativa chilena (Decreto Supremo 66 de la SEC) exige que todo calefón sea instalado por un técnico gasfíter con certificación SEC vigente, con ductos de evacuación adecuados (tiro natural o forzado), llave de paso de gas reglamentaria, ventilaciones superior e inferior, y prohibición absoluta de instalación en baños o dormitorios."
        }
      },
      {
        "@type": "Question",
        "name": "¿Cuánto tarda la visita y reparación de un calefón a domicilio?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Atendemos emergencias en el mismo día. La mayoría de las mantenciones y reparaciones de piezas comunes (diafragma, sensores, termocupla, limpieza de quemadores) se resuelven en 45 a 90 minutos en terreno, ya que nuestros móviles cuentan con repuestos originales multimarca."
        }
      },
      {
        "@type": "Question",
        "name": "¿Qué marcas de calefón reparan y mantienen?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Reparamos todas las marcas presentes en Chile: Junkers (Bosch), Splendid, Mademsa, Neckar, Rheem, Ursus Trotter, Bosch, Rinnai, Anwo, Beretta, Vaillant, Fensa, Sindelen, Albin Trotter, Teka, Midea, Haier y Walter Trotter."
        }
      },
      {
        "@type": "Question",
        "name": "¿Los técnicos cuentan con carnet y certificación SEC verificable?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Sí, nuestro encargado técnico titular es Domingo Isaín Plaza Caamaño, RUT 12.738.961-6, con carnet oficial de Instalador de Gas y Gasfíter Certificado emitido por la Superintendencia de Electricidad y Combustibles (SEC), verificable mediante código QR oficial."
        }
      }
    ]
  }
  </script>
</head>
<body>

  <!-- Top Bar de Emergencia y Confianza -->
  <aside class="top-bar" aria-label="Aviso de Emergencias">
    <div class="container top-bar-content">
      <div style="display: flex; align-items: center; gap: 0.75rem;">
        <span class="top-bar-badge">
          <span class="pulse-dot"></span> Emergencias 24/7
        </span>
        <span>Atención a domicilio en todo Chile | Técnicos Certificados SEC</span>
      </div>
      <div class="top-bar-links">
        <a href="tel:+56932237072" class="top-bar-link">
          <i class="fa-solid fa-phone-volume"></i> 9 3223 7072
        </a>
        <a href="https://wa.me/56932237072?text=Hola%20Central%20Calefon,%20necesito%20atenci%C3%B3n%20urgente%20a%20domicilio" target="_blank" class="top-bar-link" style="color: #4ade80;">
          <i class="fa-brands fa-whatsapp"></i> WhatsApp Directo
        </a>
      </div>
    </div>
  </aside>

  <!-- Cabecera Principal -->
  <header class="site-header">
    <div class="container header-container">
      <!-- Logotipo e Identidad -->
      <a href="index.php" class="brand-logo-wrap" title="Central Calefón Chile - Inicio">
        <img src="logotipo-central-calefon.webp" alt="Logotipo Central Calefón Gasfíter Certificado SEC" class="brand-logo-img">
        <div class="brand-title-box">
          <div class="brand-title">CENTRAL <span>CALEFÓN</span></div>
          <div class="brand-subtitle">Gasfíter Autorizado SEC Chile</div>
        </div>
      </a>

      <!-- Menú Desktop -->
      <nav class="nav-menu-desktop" aria-label="Navegación Principal">
        <a href="index.php" class="nav-link <?php echo ($currentPage === 'home') ? 'active' : ''; ?>">Inicio</a>
        <a href="index.php#marcas" class="nav-link">Marcas</a>
        <a href="index.php#servicios" class="nav-link">Servicios</a>
        <a href="index.php#diagnostico" class="nav-link">Diagnóstico Falla</a>
        <a href="index.php#tipos" class="nav-link">Tiro Forzado / Tipos</a>
        <a href="nosotros.php" class="nav-link <?php echo ($currentPage === 'nosotros') ? 'active' : ''; ?>">Nosotros</a>
        <a href="contacto.php" class="nav-link <?php echo ($currentPage === 'contacto') ? 'active' : ''; ?>">Contacto</a>
      </nav>

      <!-- Botones de Acción Rápida -->
      <div class="header-actions">
        <a href="https://wa.me/56932237072?text=Hola,%20solicito%20un%20t%C3%A9cnico%20autorizado%20SEC%20para%20mi%20calef%C3%B3n" target="_blank" class="btn btn-whatsapp btn-sm" title="Contactar por WhatsApp">
          <i class="fa-brands fa-whatsapp"></i>
          <span>Pedir Técnico</span>
        </a>

        <!-- Botón Hamburguesa Móvil -->
        <button class="hamburger-btn" id="hamburgerBtn" aria-label="Abrir Menú de Navegación" aria-expanded="false">
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
        </button>
      </div>
    </div>
  </header>

  <!-- =========================================================================
       MENÚ MÓVIL DESLIZANTE DE IZQUIERDA A DERECHA
       "que se deslice de izquierda a derecha, cuando se cierre de derecha a izquierda"
       ========================================================================= -->
  <div class="mobile-nav-backdrop" id="mobileNavBackdrop">
    <div class="mobile-nav-drawer" id="mobileNavDrawer" role="dialog" aria-modal="true" aria-label="Menú Móvil">
      <div class="drawer-header">
        <div class="brand-logo-wrap">
          <img src="logotipo-central-calefon.webp" alt="Central Calefón" style="width: 40px; height: 40px; border-radius: 50%;">
          <div class="brand-title-box">
            <span style="font-family: var(--font-heading); font-weight: 800; font-size: 1.1rem; color: var(--color-primary);">CENTRAL CALEFÓN</span>
            <span style="font-size: 0.7rem; font-weight: 700; color: #c41230;">CERTIFICADO SEC</span>
          </div>
        </div>
        <button class="drawer-close-btn" id="drawerCloseBtn" aria-label="Cerrar Menú">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <div class="drawer-body">
        <a href="index.php" class="drawer-link <?php echo ($currentPage === 'home') ? 'active' : ''; ?>">
          <i class="fa-solid fa-house"></i> Inicio
        </a>
        <a href="index.php#marcas" class="drawer-link">
          <i class="fa-solid fa-tags"></i> Marcas de Calefón
        </a>
        <a href="index.php#servicios" class="drawer-link">
          <i class="fa-solid fa-screwdriver-wrench"></i> Reparación &amp; Mantención
        </a>
        <a href="index.php#diagnostico" class="drawer-link">
          <i class="fa-solid fa-stethoscope"></i> Diagnóstico de Averías
        </a>
        <a href="index.php#tipos" class="drawer-link">
          <i class="fa-solid fa-fire-flame-curved"></i> Tiro Forzado / Ionizado
        </a>
        <a href="index.php#faq" class="drawer-link">
          <i class="fa-solid fa-circle-question"></i> Preguntas Frecuentes
        </a>
        <a href="nosotros.php" class="drawer-link <?php echo ($currentPage === 'nosotros') ? 'active' : ''; ?>">
          <i class="fa-solid fa-user-shield"></i> Nosotros (Certificación SEC)
        </a>
        <a href="contacto.php" class="drawer-link <?php echo ($currentPage === 'contacto') ? 'active' : ''; ?>">
          <i class="fa-solid fa-envelope"></i> Contacto Directo
        </a>

        <!-- Credencial SEC en Menú Móvil -->
        <div class="drawer-sec-badge">
          <img src="imagen-certificado-encargado-domingo-isain-caamaño.jpg" alt="Domingo Isaín Plaza Caamaño">
          <div>
            <div style="font-weight: 800; font-size: 0.85rem; color: var(--color-primary);">Domingo Isaín Plaza</div>
            <div style="font-size: 0.75rem; color: #64748b;">RUT: 12.738.961-6</div>
            <div style="font-size: 0.72rem; color: #c41230; font-weight: 700;">Instalador Autorizado SEC</div>
          </div>
        </div>
      </div>

      <div class="drawer-footer">
        <a href="https://wa.me/56932237072?text=Hola,%20solicito%20un%20t%C3%A9cnico%20a%20domicilio%20por%20favor" target="_blank" class="btn btn-whatsapp" style="width: 100%;">
          <i class="fa-brands fa-whatsapp"></i> Cotizar por WhatsApp
        </a>
        <a href="tel:+56932237072" class="btn btn-phone" style="width: 100%;">
          <i class="fa-solid fa-phone"></i> Llamar al 9 3223 7072
        </a>
      </div>
    </div>
  </div>
