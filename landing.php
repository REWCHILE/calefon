<?php
/**
 * Central Calefón Chile - Landing Page Dinámica para SEO Local por Comunas y Servicios
 * Genera contenido de alta conversión y Schema SEO LocalBusiness / Plumber específico.
 */

// Obtener slug de la petición
$requestedSlug = '';
if (isset($slug) && !empty($slug)) {
    $requestedSlug = $slug;
} elseif (isset($_GET['slug']) && !empty($_GET['slug'])) {
    $requestedSlug = $_GET['slug'];
} else {
    $uriPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    $uriPath = trim($uriPath, '/');
    // Si viene como carpeta/archivo
    $parts = explode('/', $uriPath);
    $requestedSlug = end($parts);
}

// Limpiar slug
$requestedSlug = strtolower(trim($requestedSlug));
if (str_ends_with($requestedSlug, '.php')) {
    $requestedSlug = substr($requestedSlug, 0, -4);
}

// Base de datos de comunas y zonas de cobertura
$comunasData = [
    'penalolen' => [
        'nombre' => 'Peñalolén',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 60 minutos',
        'sectores' => 'Comunidad Ecológica, Las Pircas, Consistorial, Peñalolén Alto, Los Presidentes, El Ensueño y Villa Arrieta',
        'gas' => 'Gas licuado balones/cilindros (Lipigas, Abastible, Gasco) y red de Gas Natural por cañería',
        'cobertura' => 'Servicio a domicilio en casas, condominios cerrados y parcelas residenciales en Peñalolén.'
    ],
    'macul' => [
        'nombre' => 'Macul',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Quilín, Macul Alto, Escuela Agrícola, Vicuña Mackenna, Rodrigo de Araya y Plaza Macul',
        'gas' => 'Gas Natural Metrogas y Gas Licuado de Petróleo GLP',
        'cobertura' => 'Atención rápida en departamentos, edificios modernos y casas habitacionales en Macul.'
    ],
    'pirque' => [
        'nombre' => 'Pirque',
        'region' => 'Región Metropolitana',
        'tiempo' => '45 a 60 minutos',
        'sectores' => 'El Principal, San Juan, Santa Rita, El Llano, Las Majadas y parcelas de agrado',
        'gas' => 'Gas licuado a granel en estanques, cilindros de 45kg y calefones de gran litraje',
        'cobertura' => 'Técnicos equipados para atención en parcelas, viviendas campestres y casas en Pirque.'
    ],
    'providencia' => [
        'nombre' => 'Providencia',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Pedro de Valdivia, Los Leones, Pocuro, Bellavista, Manuel Montt, Tobalaba y Salvador',
        'gas' => 'Red de Gas Natural cañería Metrogas en departamentos antiguos y modernos',
        'cobertura' => 'Especialistas en calefones de tiro forzado, cámaras estancas y termos eléctricos en edificios.'
    ],
    'renca' => [
        'nombre' => 'Renca',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'Plaza Renca, Vicuña Mackenna, Huamachuco, Cerro Colorado, Condominios El Retiro',
        'gas' => 'Gas licuado cilindros 15kg/45kg y cañería',
        'cobertura' => 'Servicio técnico a domicilio en toda la comuna de Renca con repuestos en mano.'
    ],
    'paine' => [
        'nombre' => 'Paine',
        'region' => 'Región Metropolitana',
        'tiempo' => '45 a 60 minutos',
        'sectores' => 'Centro de Paine, Champa, Huelquén, Hospital, Colonia Kennedy y sectores rurales',
        'gas' => 'Gas licuado en cilindros, estanques granel y calefones de alta capacidad térmica',
        'cobertura' => 'Móviles habilitados para desplazarse por parcelas y residencias de Paine.'
    ],
    'padre-hurtado' => [
        'nombre' => 'Padre Hurtado',
        'region' => 'Región Metropolitana',
        'tiempo' => '40 a 55 minutos',
        'sectores' => 'Camino a Melipilla, San Ignacio, Laguna del Sol, Los Silos y Santa Rosa de Chena',
        'gas' => 'Gas licuado balones, estanques y redes residenciales',
        'cobertura' => 'Atención rápida en condominios nuevos y sectores tradicionales de Padre Hurtado.'
    ],
    'san-joaquin' => [
        'nombre' => 'San Joaquín',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Vicuña Mackenna, Santa Rosa, Carlos Valdovinos, Las Industrias y Legua Emergencia',
        'gas' => 'Gas Natural Metrogas y balones GLP',
        'cobertura' => 'Reparación y mantención garantizada en casas y departamentos de San Joaquín.'
    ],
    'estacion-central' => [
        'nombre' => 'Estación Central',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Alameda, Villa Portales, General Velásquez, Los Nogales, 5 de Abril y Pajaritos',
        'gas' => 'Gas Natural y tiro forzado en torres residenciales',
        'cobertura' => 'Expertos en tiro forzado eléctrico, extracción de gases y calderas murales.'
    ],
    'pedro-aguirre-cerda' => [
        'nombre' => 'Pedro Aguirre Cerda',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Club Hípico, Departamental, Carlos Valdovinos, Población Dávila y Ochagavía',
        'gas' => 'Gas licuado cilindros y Gas Natural',
        'cobertura' => 'Atención a domicilio en el día con técnicos certificados SEC en Pedro Aguirre Cerda.'
    ],
    'las-condes' => [
        'nombre' => 'Las Condes',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'El Golf, San Carlos de Apoquindo, Manquehue, Colón, Los Dominicos, Cantagallo y Escuela Militar',
        'gas' => 'Gas Natural Metrogas y calderas murales mixtas',
        'cobertura' => 'Servicio técnico especializado para casas de alto estándar, departamentos y condominios.'
    ],
    'la-florida' => [
        'nombre' => 'La Florida',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Vicuña Mackenna, Walker Martínez, Tobalaba, Rojas Magallanes, La Florida Alta y Jardín Alto',
        'gas' => 'Gas Natural Metrogas y gas licuado en balones',
        'cobertura' => 'Atención prioritaria en casas residenciales y condominios en La Florida.'
    ],
    'maipu' => [
        'nombre' => 'Maipú',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Pajaritos, Ciudad Satélite, El Abrazo, Rinconada, Los Pajaritos, Las Rosas y Maipú Centro',
        'gas' => 'Gas licuado y Gas Natural cañería',
        'cobertura' => 'Visita a domicilio en todos los barrios y villas de Maipú con repuestos originales.'
    ],
    'santiago' => [
        'nombre' => 'Santiago Centro',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Santa Isabel, Parque Almagro, República, Bellas Artes, Lastarria, Franklin y Matta Sur',
        'gas' => 'Gas Natural por red de cañerías en edificios',
        'cobertura' => 'Especialistas en calefones de tiro forzado, ionizados y termos en departamentos de Santiago.'
    ],
    'nunoa' => [
        'nombre' => 'Ñuñoa',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Plaza Ñuñoa, Irarrázaval, Simón Bolívar, Sucre, Bilbao, Parque Bustamante y Villa Frei',
        'gas' => 'Gas Natural Metrogas en departamentos y casas',
        'cobertura' => 'Servicio técnico multimarca autorizado SEC para residentes de Ñuñoa.'
    ],
    'puente-alto' => [
        'nombre' => 'Puente Alto',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Ciudad del Sol, Las Vizcachas, Concha y Toro, San Carlos, Ejército Libertador y Bajos de Mena',
        'gas' => 'Gas licuado cilindros y cañería',
        'cobertura' => 'Asistencia a domicilio con móviles disponibles en todo Puente Alto.'
    ],
    'san-miguel' => [
        'nombre' => 'San Miguel',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Gran Avenida, El Llano Subercaseaux, Departamental, Salesianos y Ciudad del Niño',
        'gas' => 'Gas Natural y Gas Licuado',
        'cobertura' => 'Reparación de tiro forzado y calefones de paso en edificios y condominios.'
    ],
    'la-reina' => [
        'nombre' => 'La Reina',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'La Reina Alta, Príncipe de Gales, Larraín, Las Perdices y Blest Gana',
        'gas' => 'Gas Natural y Gas Licuado de granel',
        'cobertura' => 'Mantención y reparación de calefones, termos y calderas en La Reina.'
    ],
    'vitacura' => [
        'nombre' => 'Vitacura',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Santa María de Manquehue, Lo Curro, Bicentenario, Alonso de Córdova y Vitacura Centro',
        'gas' => 'Gas Natural cañería y sistemas de calefacción central',
        'cobertura' => 'Atención técnica para calefones de alta gama, calderas y termos en Vitacura.'
    ],
    'lo-barnechea' => [
        'nombre' => 'Lo Barnechea',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'La Dehesa, El Huinganal, Los Trapenses, El Arrayán y Lo Barnechea Pueblo',
        'gas' => 'Gas licuado granel y Gas Natural',
        'cobertura' => 'Servicio técnico experto en equipos tiro forzado y calderas en Lo Barnechea.'
    ],
    'recoleta' => [
        'nombre' => 'Recoleta',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'El Salto, Dorsal, Einstein, Bellavista Norte, Cementerio y Patronato',
        'gas' => 'Gas Natural y cilindros de GLP',
        'cobertura' => 'Reparación y mantención de calefones a domicilio en Recoleta.'
    ],
    'independencia' => [
        'nombre' => 'Independencia',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Plaza Chacabuco, Hipódromo Chile, Vivaceta, Santos Dumont y Gamero',
        'gas' => 'Gas Natural y cilindros de gas',
        'cobertura' => 'Asistencia técnica autorizada SEC en departamentos y casas de Independencia.'
    ],
    'quilicura' => [
        'nombre' => 'Quilicura',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Valle Lo Campino, San Luis, Lo Cruzat, Santa Luisa y Quilicura Centro',
        'gas' => 'Gas Natural cañería y balones de gas licuado',
        'cobertura' => 'Técnicos certificados con repuestos para casas y condominios en Quilicura.'
    ],
    'pudahuel' => [
        'nombre' => 'Pudahuel',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'Pudahuel Sur, Ciudad de los Valles, Noviciado, San Pablo y Enea',
        'gas' => 'Gas licuado y Gas Natural',
        'cobertura' => 'Cobertura completa en Pudahuel Norte, Sur y sectores campestres.'
    ],
    'san-bernardo' => [
        'nombre' => 'San Bernardo',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Plaza San Bernardo, Nos, Chena, Las Acacias, Maestranza y Portada del Sur',
        'gas' => 'Gas licuado cilindros y red de cañería',
        'cobertura' => 'Atención rápida en San Bernardo con técnicos instaladores autorizados SEC.'
    ],
    'buin' => [
        'nombre' => 'Buin',
        'region' => 'Región Metropolitana',
        'tiempo' => '40 a 60 minutos',
        'sectores' => 'Buin Centro, Alto Jahuel, Maipo, Viluco y condominios residenciales',
        'gas' => 'Gas licuado balones, estanques granel y calefones de paso',
        'cobertura' => 'Servicio a domicilio en parcelas y condominios de Buin.'
    ],
    'colina' => [
        'nombre' => 'Colina',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'Chicureo, Chamisero, Piedra Roja, Colina Centro y Las Canteras',
        'gas' => 'Gas licuado a granel en estanques y Gas Natural',
        'cobertura' => 'Especialistas en calefones de alta potencia y calderas en Colina y Chicureo.'
    ]
];

// Identificar si el slug corresponde a una comuna o página pilar
$landingType = 'comuna';
$matchedComuna = null;
$comunaKey = '';

// Normalizar slug para buscar coincidencias
$cleanSlug = str_replace(['servicio-tecnico-calefon-', 'servicio-tecnico-'], '', $requestedSlug);

// Comprobación de páginas pilares
if ($requestedSlug === 'servicio-tecnico-autorizado-calefon' || $cleanSlug === 'autorizado-calefon') {
    $landingType = 'autorizado';
} elseif ($requestedSlug === 'servicio-tecnico-especialista-en-calefon' || $cleanSlug === 'especialista-en-calefon') {
    $landingType = 'especialista';
} else {
    // Buscar comuna
    foreach ($comunasData as $key => $data) {
        if ($cleanSlug === $key || str_contains($requestedSlug, $key)) {
            $matchedComuna = $data;
            $comunaKey = $key;
            break;
        }
    }
}

// Valores por defecto si no coincide exactamente con una comuna
if (!$matchedComuna && $landingType === 'comuna') {
    // Buscar por palabras clave o usar comuna predeterminada bien posicionada
    $matchedComuna = [
        'nombre' => ucwords(str_replace('-', ' ', $cleanSlug ?: 'Chile')),
        'region' => 'Región Metropolitana y Todo Chile',
        'tiempo' => '30 a 60 minutos',
        'sectores' => 'Todos los sectores, condominios, departamentos y villas residenciales',
        'gas' => 'Gas Licuado (GLP) y Gas Natural (GN)',
        'cobertura' => 'Atención a domicilio en todo el territorio nacional con técnicos acreditados SEC.'
    ];
    $comunaKey = 'chile';
}

// Configurar Metadatos SEO específicos
if ($landingType === 'autorizado') {
    $pageTitle = "Servicio Técnico Autorizado de Calefones en Chile | Gasfíter Certificado SEC";
    $pageDescription = "Servicio técnico certificado SEC autorizado en calefones multimarca a domicilio en Chile. Diagnóstico, mantención y reparación con repuestos legítimos en el día.";
    $h1Title = "Servicio Técnico Autorizado de Calefones";
    $h1Sub = "Atención técnica oficial a domicilio con gasfíteres autorizados por la Superintendencia de Electricidad y Combustibles (SEC) en todo Chile.";
    $canonicalSlug = "servicio-tecnico-autorizado-calefon/";
} elseif ($landingType === 'especialista') {
    $pageTitle = "Especialista en Calefones a Domicilio Chile | Diagnóstico y Reparación SEC";
    $pageDescription = "Técnicos especialistas en reparación y mantención de calefones a gas, tiro forzado y eléctricos. Más de 20 años de experiencia técnica respaldada por la SEC.";
    $h1Title = "Servicio Técnico Especialista en Calefones";
    $h1Sub = "Especialistas certificados SEC en detección de fallas, cambio de repuestos originales y descalcificación de sarro en el mismo día.";
    $canonicalSlug = "servicio-tecnico-especialista-en-calefon/";
} else {
    $comunaNombre = $matchedComuna['nombre'];
    $pageTitle = "Servicio Técnico Calefón {$comunaNombre} a Domicilio | Gasfíter SEC";
    $pageDescription = "Servicio técnico de calefones en {$comunaNombre} a domicilio. Reparación, mantención e instalación multimarca por instaladores acreditados SEC. Atención rápida en el día.";
    $h1Title = "Servicio Técnico de Calefón en {$comunaNombre}";
    $h1Sub = "Reparación, mantención preventiva y cambio de repuestos originales a domicilio en {$comunaNombre}. Técnicos con certificación SEC oficial.";
    $canonicalSlug = "servicio-tecnico-calefon-{$comunaKey}/";
    if ($comunaKey === 'pedro-aguirre-cerda' && $requestedSlug === 'servicio-tecnico-pedro-aguirre-cerda') {
        $canonicalSlug = "servicio-tecnico-pedro-aguirre-cerda/";
    }
}

$canonicalUrl = "https://centralcalefon.cl/{$canonicalSlug}";
$currentPage = 'landing';

// Incluir header global
require_once __DIR__ . '/includes/header.php';
?>

<!-- Schema JSON-LD LocalBusiness específico para esta Comuna/Servicio -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["LocalBusiness", "Plumber", "HVACBusiness"],
  "@id": "<?php echo $canonicalUrl; ?>#local",
  "name": "Central Calefón <?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'Chile'); ?>",
  "url": "<?php echo $canonicalUrl; ?>",
  "telephone": "+56932237072",
  "priceRange": "$$",
  "image": "https://centralcalefon.cl/assets/images/og-central-calefon-sec.jpg",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "<?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'Santiago'); ?>",
    "addressRegion": "<?php echo htmlspecialchars($matchedComuna ? $matchedComuna['region'] : 'Región Metropolitana'); ?>",
    "addressCountry": "CL"
  },
  "areaServed": {
    "@type": "AdministrativeArea",
    "name": "<?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'Chile'); ?>"
  },
  "provider": {
    "@type": "Person",
    "name": "Domingo Isaín Plaza Caamaño",
    "jobTitle": "Instalador de Gas Clase 3 Autorizado SEC",
    "identifier": "12.738.961-6"
  }
}
</script>

<!-- Hero Section Localizado -->
<section style="background: radial-gradient(circle at 80% 20%, #1e293b 0%, #0f172a 60%, #020617 100%); color: #fff; padding: 4.5rem 0 3.5rem 0; border-bottom: 3px solid var(--color-flame); position: relative;">
  <div class="container">
    <div style="max-width: 860px; margin: 0 auto; text-align: center;">
      
      <!-- Badge de Certificación y Ubicación -->
      <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255, 94, 20, 0.15); border: 1px solid rgba(255, 94, 20, 0.4); padding: 0.45rem 1.15rem; border-radius: 999px; margin-bottom: 1.5rem;">
        <i class="fa-solid fa-certificate" style="color: #ff8c42;"></i>
        <span style="font-size: 0.88rem; font-weight: 800; color: #ff8c42; text-transform: uppercase; letter-spacing: 0.5px;">
          Técnicos Autorizados SEC • <?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'Cobertura Nacional'); ?>
        </span>
      </div>

      <!-- Título Principal H1 SEO -->
      <h1 style="font-family: var(--font-heading); font-size: clamp(2rem, 4vw, 3.2rem); font-weight: 900; line-height: 1.15; margin-bottom: 1.25rem; letter-spacing: -0.5px;">
        <?php echo htmlspecialchars($h1Title); ?>
      </h1>

      <p style="font-size: 1.15rem; color: #cbd5e1; line-height: 1.6; margin-bottom: 2rem;">
        <?php echo htmlspecialchars($h1Sub); ?>
      </p>

      <!-- Botones de Conversión Rápida -->
      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 2.5rem;">
        <?php
          $waMsg = "Hola Central Calefón, solicito técnico a domicilio" . ($matchedComuna ? " en " . $matchedComuna['nombre'] : "");
          $waUrl = "https://wa.me/56932237072?text=" . urlencode($waMsg);
        ?>
        <a href="<?php echo $waUrl; ?>" target="_blank" class="btn btn-whatsapp btn-lg">
          <i class="fa-brands fa-whatsapp fa-xl"></i>
          <span>Pedir Técnico por WhatsApp</span>
        </a>
        <a href="tel:+56932237072" class="btn btn-phone btn-lg">
          <i class="fa-solid fa-phone-volume"></i>
          <span>Llamar al 9 3223 7072</span>
        </a>
      </div>

      <!-- Trust Badges de Cobertura -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1rem; text-align: left; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.12); padding: 1.25rem; border-radius: var(--radius-md);">
        <div style="display: flex; align-items: center; gap: 0.75rem;">
          <i class="fa-solid fa-clock" style="color: #ff8c42; font-size: 1.25rem;"></i>
          <div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Llegada estimada</div>
            <div style="font-weight: 700; font-size: 0.95rem; color: #fff;"><?php echo htmlspecialchars($matchedComuna ? $matchedComuna['tiempo'] : 'En el día'); ?></div>
          </div>
        </div>
        <div style="display: flex; align-items: center; gap: 0.75rem;">
          <i class="fa-solid fa-user-shield" style="color: #38bdf8; font-size: 1.25rem;"></i>
          <div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Gasfíter Titular SEC</div>
            <div style="font-weight: 700; font-size: 0.95rem; color: #fff;">Instalador Clase 3 Gas</div>
          </div>
        </div>
        <div style="display: flex; align-items: center; gap: 0.75rem;">
          <i class="fa-solid fa-shield-halved" style="color: #4ade80; font-size: 1.25rem;"></i>
          <div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Garantía Formal</div>
            <div style="font-weight: 700; font-size: 0.95rem; color: #fff;">Boleta y Garantía Escrita</div>
          </div>
        </div>
        <div style="display: flex; align-items: center; gap: 0.75rem;">
          <i class="fa-solid fa-truck-fast" style="color: #facc15; font-size: 1.25rem;"></i>
          <div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Repuestos en Terreno</div>
            <div style="font-weight: 700; font-size: 0.95rem; color: #fff;">Multimarca Original</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Información Territorial y Sectores Atendidos en la Comuna -->
<?php if ($matchedComuna): ?>
<section style="padding: 3.5rem 0; background: #f8fafc; border-bottom: 1px solid var(--color-border);">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem; align-items: center;">
      <div>
        <span class="section-tag">Cobertura Territorial Inmediata</span>
        <h2 style="font-family: var(--font-heading); font-size: 1.85rem; font-weight: 800; color: var(--color-primary); margin-bottom: 1rem;">
          Atención a Domicilio en <?php echo htmlspecialchars($matchedComuna['nombre']); ?>
        </h2>
        <p style="color: #64748b; line-height: 1.6; margin-bottom: 1rem;">
          <?php echo htmlspecialchars($matchedComuna['cobertura']); ?>
        </p>
        <div style="background: #ffffff; border: 1px solid var(--color-border); border-left: 4px solid var(--color-flame); padding: 1.2rem; border-radius: var(--radius-sm); margin-bottom: 1rem;">
          <strong style="color: var(--color-primary); display: block; margin-bottom: 0.35rem;">Sectores y Condominios Frecuentes:</strong>
          <span style="color: #475569; font-size: 0.92rem;"><?php echo htmlspecialchars($matchedComuna['sectores']); ?>.</span>
        </div>
        <div style="background: #ffffff; border: 1px solid var(--color-border); border-left: 4px solid #38bdf8; padding: 1.2rem; border-radius: var(--radius-sm);">
          <strong style="color: var(--color-primary); display: block; margin-bottom: 0.35rem;">Suministro de Gas en la Zona:</strong>
          <span style="color: #475569; font-size: 0.92rem;"><?php echo htmlspecialchars($matchedComuna['gas']); ?>.</span>
        </div>
      </div>

      <!-- Credencial SEC del Técnico -->
      <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm); text-align: center;">
        <div style="display: inline-block; position: relative; margin-bottom: 1rem;">
          <img src="imagen-certificado-encargado-domingo-isain-caamaño.jpg" alt="Instalador Autorizado SEC Domingo Plaza" style="width: 110px; height: 110px; border-radius: 50%; object-fit: cover; border: 3px solid var(--color-flame); box-shadow: var(--shadow-md);">
          <span style="position: absolute; bottom: 0; right: 0; background: #16a34a; color: #fff; width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 2px solid #fff;">
            <i class="fa-solid fa-check"></i>
          </span>
        </div>
        <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.25rem;">
          Domingo Isaín Plaza Caamaño
        </h3>
        <p style="color: #c41230; font-weight: 700; font-size: 0.88rem; margin-bottom: 0.5rem;">
          Instalador de Gas Clase 3 SEC • RUT: 12.738.961-6
        </p>
        <p style="color: #64748b; font-size: 0.88rem; line-height: 1.5; margin-bottom: 1.25rem;">
          Profesional debidamente acreditado ante la Superintendencia de Electricidad y Combustibles para ejecutar mantención, calibración y montaje en cumplimiento con el Decreto Supremo 66.
        </p>
        <div style="display: flex; justify-content: center; align-items: center; gap: 0.75rem;">
          <img src="enlace-sec-qr.png" alt="QR Verificación SEC" style="width: 60px; height: 60px; border: 1px solid #e2e8f0; border-radius: 6px;">
          <div style="text-align: left;">
            <div style="font-size: 0.75rem; color: #94a3b8;">Verificación Oficial:</div>
            <div style="font-size: 0.82rem; font-weight: 700; color: #0284c7;">Acreditado SEC Chile</div>
            <div style="font-size: 0.72rem; color: #64748b;">Garantía técnica legal</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Servicios Técnicos a Domicilio -->
<section style="padding: 4.5rem 0; background: #ffffff;">
  <div class="container">
    <div class="text-center" style="margin-bottom: 3rem;">
      <span class="section-tag">Soluciones Profesionales</span>
      <h2 class="section-title">Servicios Técnicos Especializados en Calefones</h2>
      <p class="section-subtitle">
        Contamos con instrumental de diagnóstico electrónico, manómetros diferenciales y repuestos originales para resolver tu problema en una sola visita:
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.75rem;">
      <!-- Tarjeta 1: Reparación -->
      <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.85rem; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: #fff7ed; color: var(--color-flame); display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 1.25rem;">
            <i class="fa-solid fa-screwdriver-wrench"></i>
          </div>
          <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
            Reparación de Calefones en Terreno
          </h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.25rem;">
            Solución definitiva cuando el calefón no da chispa, prende y se apaga al instante, bota agua por abajo o entrega agua tibia.
          </p>
          <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; font-size: 0.88rem; color: #475569; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Cambio de membrana o diafragma de silicona</li>
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Microswitch, sensor de ionización y termocupla</li>
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Reparación de módulos electrónicos y electroválvulas</li>
          </ul>
        </div>
        <a href="<?php echo $waUrl; ?>" target="_blank" class="btn btn-whatsapp" style="width: 100%;">
          <i class="fa-brands fa-whatsapp"></i> Pedir Reparación
        </a>
      </div>

      <!-- Tarjeta 2: Mantención y Sarro -->
      <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.85rem; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: #eff6ff; color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 1.25rem;">
            <i class="fa-solid fa-shower"></i>
          </div>
          <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
            Mantención y Descalcificación de Sarro
          </h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.25rem;">
            Limpieza profunda del serpentín con bomba de recirculación química para eliminar incrustaciones calcáreas y recuperar la presión y temperatura.
          </p>
          <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; font-size: 0.88rem; color: #475569; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Descalcificación del serpentín de cobre</li>
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Limpieza de quemadores e inyectores de gas</li>
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Calibración de combustión limpia y ahorro de gas</li>
          </ul>
        </div>
        <a href="<?php echo $waUrl; ?>" target="_blank" class="btn btn-flame" style="width: 100%;">
          <i class="fa-solid fa-calendar-check"></i> Agendar Mantención
        </a>
      </div>

      <!-- Tarjeta 3: Instalación SEC -->
      <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.85rem; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: #f0fdf4; color: #16a34a; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 1.25rem;">
            <i class="fa-solid fa-award"></i>
          </div>
          <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
            Instalación Certificada SEC Norma DS 66
          </h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.25rem;">
            Montaje de calefones de tiro natural, tiro forzado o eléctricos conforme a las exigencias legales y de ventilación dictadas por la SEC.
          </p>
          <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; font-size: 0.88rem; color: #475569; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Conexión de cañería con llave de paso reglamentaria</li>
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Ducto de evacuación de monóxido y sombrerete</li>
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Prueba de hermeticidad certificada libre de fugas</li>
          </ul>
        </div>
        <a href="<?php echo $waUrl; ?>" target="_blank" class="btn btn-whatsapp" style="width: 100%;">
          <i class="fa-solid fa-file-signature"></i> Cotizar Instalación
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Marcas Multimarca Atendidas -->
<section style="padding: 3.5rem 0; background: #f8fafc; border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
  <div class="container text-center">
    <span class="section-tag">Cobertura de Fabricantes</span>
    <h2 class="section-title">Reparamos Todas las Marcas del Mercado Chileno</h2>
    <p class="section-subtitle" style="margin-bottom: 2rem;">
      Contamos con catálogo y repuestos de alta rotación para modelos analógicos, ionizados automáticos y digitales:
    </p>

    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 0.75rem; max-width: 900px; margin: 0 auto 2rem auto;">
      <?php
      $marcas = [
          'Junkers', 'Bosch', 'Splendid', 'Mademsa', 'Neckar', 'Rheem',
          'Ursus Trotter', 'Albin Trotter', 'Rinnai', 'Anwo', 'Beretta',
          'Vaillant', 'Fensa', 'Sindelen', 'Teka', 'Midea', 'Haier'
      ];
      foreach ($marcas as $m):
      ?>
        <span style="background: #ffffff; border: 1px solid var(--color-border); padding: 0.5rem 1.15rem; border-radius: var(--radius-full); font-weight: 700; font-size: 0.9rem; color: var(--color-primary); box-shadow: var(--shadow-sm);">
          <?php echo $m; ?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Preguntas Frecuentes FAQ con Schema -->
<section style="padding: 4.5rem 0; background: #ffffff;">
  <div class="container" style="max-width: 800px;">
    <div class="text-center" style="margin-bottom: 2.5rem;">
      <span class="section-tag">Dudas Habituales</span>
      <h2 class="section-title">Preguntas Frecuentes</h2>
    </div>

    <div style="display: flex; flex-direction: column; gap: 1.25rem;">
      <div style="background: #f8fafc; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
        <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); font-weight: 700; margin-bottom: 0.5rem;">
          ¿Cuánto tarda en llegar el técnico <?php echo htmlspecialchars($matchedComuna ? "a " . $matchedComuna['nombre'] : ""); ?>?
        </h3>
        <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin: 0;">
          Coordinamos visitas en el mismo día. Dependiendo del tráfico y sector, nuestros móviles suelen arribar en un rango de 30 a 60 minutos desde la confirmación por WhatsApp.
        </p>
      </div>

      <div style="background: #f8fafc; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
        <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); font-weight: 700; margin-bottom: 0.5rem;">
          ¿El servicio incluye boleta y garantía formal?
        </h3>
        <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin: 0;">
          Sí. Entregamos boleta o factura legal y documento de garantía escrita por el trabajo ejecutado y los repuestos sustituidos, garantizando total respaldo y seguridad.
        </p>
      </div>

      <div style="background: #f8fafc; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
        <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); font-weight: 700; margin-bottom: 0.5rem;">
          ¿Los técnicos están acreditados ante la SEC?
        </h3>
        <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin: 0;">
          Absolutamente. El servicio es supervisado por Domingo Isaín Plaza Caamaño, Instalador de Gas Clase 3 SEC (RUT 12.738.961-6), habilitado conforme a la legislación vigente en Chile.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Directorio de Enlazado Interno a Otras Comunas -->
<section style="padding: 3rem 0; background: #0f172a; color: #fff; border-top: 1px solid #1e293b;">
  <div class="container">
    <div style="text-center; margin-bottom: 1.5rem;">
      <h3 style="font-family: var(--font-heading); font-size: 1.15rem; color: #fff; font-weight: 800; margin-bottom: 0.5rem;">
        Otras Comunas de Cobertura en Santiago y Región Metropolitana
      </h3>
      <p style="font-size: 0.85rem; color: #94a3b8;">
        Disponemos de móviles técnicos en las siguientes zonas para atención a domicilio:
      </p>
    </div>

    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; font-size: 0.82rem;">
      <?php foreach ($comunasData as $k => $c): ?>
        <a href="servicio-tecnico-calefon-<?php echo $k; ?>/" style="color: #cbd5e1; background: #1e293b; padding: 4px 10px; border-radius: 4px; text-decoration: none; border: 1px solid #334155; transition: all 0.2s;" onmouseover="this.style.color='#ff8c42'; this.style.borderColor='#ff8c42';" onmouseout="this.style.color='#cbd5e1'; this.style.borderColor='#334155';">
          <?php echo htmlspecialchars($c['nombre']); ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
// Incluir footer global
require_once __DIR__ . '/includes/footer.php';
?>
