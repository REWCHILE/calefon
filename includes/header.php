<?php
// includes/header.php
if (!isset($pageTitle)) {
    $pageTitle = "Central Calefón | Servicio Técnico Calefones SEC Chile";
}
if (!isset($pageDescription)) {
    $pageDescription = "Servicio técnico de calefones a domicilio en Chile. Gasfíter autorizados SEC. Reparación, mantención multimarca y repuestos. WhatsApp: +56 9 3223 7072.";
}
if (!isset($currentPage)) {
    $currentPage = 'home';
}
if (!isset($canonicalUrl)) {
    $canonicalUrl = "https://centralcalefon.cl/" . (($currentPage === 'home') ? '' : $currentPage);
}
$ogImage = "https://centralcalefon.cl/assets/images/og-central-calefon-sec.jpg";
?>
<!DOCTYPE html>
<html lang="es-CL">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="/">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
  
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
  <meta property="og:image:alt" content="Central Calefón Chile - Servicio Técnico Gasfíter Certificado SEC - Teléfono: +56 9 3223 7072">
  
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
  <link rel="stylesheet" href="/assets/css/styles.css?v=<?php echo file_exists(__DIR__ . '/../assets/css/styles.css') ? filemtime(__DIR__ . '/../assets/css/styles.css') : '1.2'; ?>">
  <link rel="icon" type="image/webp" href="/logotipo-central-calefon.webp">
  <link rel="apple-touch-icon" href="/logotipo-central-calefon.webp">
  <link rel="apple-touch-icon" sizes="180x180" href="/logotipo-central-calefon.webp">

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
        "opens": "10:00",
        "closes": "21:00"
      }
    ]
  }
  </script>

  <?php if (isset($currentPage) && $currentPage === 'landing' && isset($matchedComuna)): ?>
  <!-- SCHEMA JSON-LD: Preguntas Frecuentes Específicas de la Comuna (FAQPage) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "¿Cuánto tarda en llegar el técnico a <?php echo htmlspecialchars($matchedComuna['nombre']); ?>?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Coordinamos visitas en el mismo día. Dependiendo del tráfico y sector, nuestros móviles suelen arribar en un rango de <?php echo htmlspecialchars($matchedComuna['tiempo']); ?> desde la confirmación por WhatsApp."
        }
      },
      {
        "@type": "Question",
        "name": "¿El servicio en <?php echo htmlspecialchars($matchedComuna['nombre']); ?> incluye boleta y garantía formal?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Sí. Entregamos boleta o factura legal y documento de garantía escrita por el trabajo ejecutado y los repuestos sustituidos, garantizando total respaldo y seguridad."
        }
      },
      {
        "@type": "Question",
        "name": "¿Los técnicos están acreditados ante la SEC?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Absolutamente. El servicio es supervisado por Domingo Isaín Plaza Caamaño, Instalador de Gas Clase 3 SEC (RUT 12.738.961-6), habilitado conforme a la legislación vigente en Chile."
        }
      }
    ]
  }
  </script>
  <?php else: ?>
  <!-- SCHEMA JSON-LD: Preguntas Frecuentes Principales (FAQPage) -->
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
          "text": "Atendemos solicitudes con coordinación rápida en el mismo día. La mayoría de las mantenciones y reparaciones de piezas comunes (diafragma, sensores, termocupla, limpieza de quemadores) se resuelven en 45 a 90 minutos en terreno, ya que nuestros móviles cuentan con repuestos originales multimarca."
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
  <?php endif; ?>
</head>
<body>

  <!-- Top Bar de Confianza y Respuesta Rápida -->
  <aside class="top-bar" aria-label="Atención Rápida">
    <div class="container top-bar-content">
      <div class="top-bar-left">
        <span class="top-bar-badge">
          <span class="pulse-dot"></span> Respuesta Rápida
        </span>
        <span class="top-bar-text">Atención a domicilio en todo Chile | Técnicos Certificados SEC</span>
      </div>
      <div class="top-bar-links">
        <a href="tel:+56932237072" class="top-bar-link">
          <i class="fa-solid fa-phone-volume"></i> 9 3223 7072
        </a>
      </div>
    </div>
  </aside>

  <!-- Cabecera Principal -->
  <header class="site-header">
    <div class="container header-container">
      <!-- Logotipo e Identidad -->
      <a href="/" class="brand-logo-wrap" title="Central Calefón Chile - Inicio">
        <img src="/logotipo-central-calefon.webp" alt="Logotipo Central Calefón Gasfíter Certificado SEC" class="brand-logo-img" width="52" height="52">
        <div class="brand-title-box">
          <div class="brand-title">CENTRAL <span>CALEFÓN</span></div>
          <div class="brand-subtitle">Gasfíter Autorizado SEC Chile</div>
        </div>
      </a>

      <!-- Menú Desktop -->
      <nav class="nav-menu-desktop" aria-label="Navegación Principal">
        <a href="/" class="nav-link <?php echo ($currentPage === 'home') ? 'active' : ''; ?>">Inicio</a>
        <a href="/#marcas" class="nav-link">Marcas</a>
        <a href="/#servicios" class="nav-link">Servicios</a>
        <a href="/#diagnostico" class="nav-link">Diagnóstico Falla</a>
        <a href="/#tipos" class="nav-link">Tiro Forzado / Tipos</a>
        <a href="/nosotros" class="nav-link <?php echo ($currentPage === 'nosotros') ? 'active' : ''; ?>">Nosotros</a>
        <a href="/contacto" class="nav-link <?php echo ($currentPage === 'contacto') ? 'active' : ''; ?>">Contacto</a>
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
          <img src="/logotipo-central-calefon.webp" alt="Central Calefón" width="40" height="40" style="width: 40px; height: 40px; border-radius: 50%;">
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
        <a href="/" class="drawer-link <?php echo ($currentPage === 'home') ? 'active' : ''; ?>">
          <i class="fa-solid fa-house"></i> Inicio
        </a>
        <a href="/#marcas" class="drawer-link">
          <i class="fa-solid fa-tags"></i> Marcas de Calefón
        </a>
        <a href="/#servicios" class="drawer-link">
          <i class="fa-solid fa-screwdriver-wrench"></i> Reparación &amp; Mantención
        </a>
        <a href="/#diagnostico" class="drawer-link">
          <i class="fa-solid fa-stethoscope"></i> Diagnóstico de Averías
        </a>
        <a href="/#tipos" class="drawer-link">
          <i class="fa-solid fa-fire-flame-curved"></i> Tiro Forzado / Ionizado
        </a>
        <a href="/#faq" class="drawer-link">
          <i class="fa-solid fa-circle-question"></i> Preguntas Frecuentes
        </a>
        <a href="/nosotros" class="drawer-link <?php echo ($currentPage === 'nosotros') ? 'active' : ''; ?>">
          <i class="fa-solid fa-user-shield"></i> Nosotros (Certificación SEC)
        </a>
        <a href="/contacto" class="drawer-link <?php echo ($currentPage === 'contacto') ? 'active' : ''; ?>">
          <i class="fa-solid fa-envelope"></i> Contacto Directo
        </a>

        <!-- Credencial SEC en Menú Móvil -->
        <div class="drawer-sec-badge">
          <img src="/imagen-certificado-encargado-domingo-isain-caamaño.jpg" alt="Domingo Isaín Plaza Caamaño" width="46" height="46">
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
