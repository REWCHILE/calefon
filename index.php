<?php
// index.php
$pageTitle = "Central Calefón | Servicio Técnico Calefones SEC Chile";
$pageDescription = "Servicio técnico de calefones a domicilio en Chile. Gasfíter autorizados SEC. Reparación, mantención multimarca y repuestos. WhatsApp: +56 9 3223 7072.";
$currentPage = 'home';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     HERO SECTION
     ========================================================================== -->
<section class="hero-section">
  <!-- Video de Fondo Hero Optimizado (Web / Mobile) -->
  <div class="hero-video-bg-wrap" aria-hidden="true">
    <video class="hero-video-bg" autoplay muted loop playsinline poster="/assets/videos/hero-poster.webp" preload="metadata">
      <source src="/assets/videos/hero-bg.mp4" type="video/mp4">
    </video>
    <div class="hero-video-overlay"></div>
  </div>

  <div class="container hero-grid">
    <!-- Columna Texto y CTA Principal -->
    <div class="hero-content">
      <div class="hero-badge-tag">
        <i class="fa-solid fa-shield-halved"></i> Técnicos Gasfíter Autorizados SEC Chile
      </div>

      <h1 class="hero-title">
        Servicio Técnico Especialista en <span class="highlight-flame">Calefones SEC</span> a Domicilio en Chile
      </h1>

      <p class="hero-description">
        ¿Tu calefón no enciende, se apaga solo, bota agua o huele a gas? Brindamos diagnóstico inmediato, reparación multimarca y mantención profesional con <strong style="color: #fff;">certificación SEC oficial</strong> y repuestos legítimos en todo Chile.
      </p>

      <div class="hero-cta-group">
        <a href="https://wa.me/56932237072?text=Hola%20Central%20Calef%C3%B3n,%20necesito%20asistencia%20t%C3%A9cnica%20urgente%20a%20domicilio" target="_blank" class="btn btn-whatsapp btn-lg">
          <i class="fa-brands fa-whatsapp fa-xl"></i>
          <span>Pedir Técnico por WhatsApp</span>
        </a>

        <a href="tel:+56932237072" class="btn btn-outline-white btn-lg">
          <i class="fa-solid fa-phone-volume"></i>
          <span>Llamar al 9 3223 7072</span>
        </a>
      </div>

      <!-- Trust Bullets -->
      <div class="hero-trust-bullets">
        <div class="trust-bullet-item">
          <div class="bullet-icon"><i class="fa-solid fa-certificate"></i></div>
          <span>Gasfíter Autorizado SEC</span>
        </div>
        <div class="trust-bullet-item">
          <div class="bullet-icon"><i class="fa-solid fa-map-location-dot"></i></div>
          <span>Atención en todo el territorio nacional</span>
        </div>
        <div class="trust-bullet-item">
          <div class="bullet-icon"><i class="fa-solid fa-gears"></i></div>
          <span>Repuestos Originales</span>
        </div>
        <div class="trust-bullet-item">
          <div class="bullet-icon"><i class="fa-solid fa-file-invoice"></i></div>
          <span>Garantía Escrita y Boleta</span>
        </div>
      </div>
    </div>

    <!-- Columna Credencial SEC y GIF de Funcionamiento -->
    <div class="hero-card-column">
      <!-- Tarjeta Credencial Oficial SEC -->
      <div class="sec-credential-card">
        <div class="credential-header">
          <div style="display: flex; align-items: center; gap: 0.5rem;">
            <i class="fa-solid fa-id-card" style="color: #ff8c42;"></i>
            <span style="font-weight: 800; font-size: 0.85rem; color: #fff; text-transform: uppercase;">Acreditación Oficial</span>
          </div>
          <span class="sec-verified-tag">
            <i class="fa-solid fa-circle-check"></i> SEC Verificado
          </span>
        </div>

        <div class="credential-technician">
          <div class="technician-photo-wrap">
            <img src="/imagen-certificado-encargado-domingo-isain-caamaño.jpg" alt="Domingo Isaín Plaza Caamaño Técnico Gasfíter Certificado SEC" class="technician-photo" width="72" height="72">
            <span class="technician-badge-sec">SEC</span>
          </div>
          <div class="technician-info">
            <div class="technician-name" style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.25rem;">Domingo Isaín Plaza Caamaño</div>
            <div class="technician-rut">RUT: 12.738.961-6</div>
            <span class="technician-cargo">Técnico Gasfíter &amp; Instalador Autorizado</span>
          </div>
        </div>

        <a href="https://wlhttp.sec.cl/rnii/public/licencia/qr?o=285eb263edf5cb049f3f4cc7fa0d2182" target="_blank" rel="noopener noreferrer" class="credential-qr-block" title="Toca para verificar credencial oficial SEC en wlhttp.sec.cl">
          <img src="/enlace-sec-qr.png" alt="Código QR Verificación SEC Domingo Isaín Plaza" class="qr-code-img" width="76" height="76">
          <div class="qr-text">
            <strong>Toca o escanea para verificar en SEC.cl <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.75rem; color: #38bdf8;"></i></strong>
            Cumplimiento riguroso del Decreto Supremo 66 sobre instalaciones de gas domiciliarias y comerciales.
            <span class="qr-link-hint">Validar licencia oficial de Domingo Plaza &nearr;</span>
          </div>
        </a>
      </div>

      <!-- Callout con GIF animado de agua caliente -->
      <div class="hero-quick-callout">
        <div style="display: flex; align-items: center; gap: 0.85rem;">
          <img src="/Calentador-de-agua-calefon-caldera-terma-03.gif" alt="Animación Calentador de Agua y Calefón" width="44" height="44" style="width: 44px; height: 44px; border-radius: 8px; background: #fff; padding: 2px;">
          <div>
            <div style="font-weight: 800; color: #fff; font-size: 0.95rem;">¿Sin agua caliente ahora mismo?</div>
            <div style="font-size: 0.8rem; color: #fdba74;">Móviles técnicos equipados con repuestos en tu zona.</div>
          </div>
        </div>
        <a href="https://wa.me/56932237072?text=Hola%20Central%20Calefon,%20me%20qued%C3%A9%20sin%20agua%20caliente,%20solicito%20asistencia%20t%C3%A9cnica%20urgente" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-sm" style="flex-shrink: 0; font-weight: 700;">
          <i class="fa-brands fa-whatsapp"></i> Cotizar
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     MARCAS DE CALEFÓN ATENDIDAS
     "necesito saber todas las marcas que existen de calefon, que saquen los logotipos"
     ========================================================================== -->
<section class="brands-section" id="marcas">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Servicio Multimarca Especializado</span>
      <h2 class="section-title">Todas las Marcas de Calefón en Chile</h2>
      <p class="section-subtitle">
        Disponemos de repuestos legítimos, herramientas de calibración y repuestos originales para todas las marcas del mercado nacional:
      </p>

      <!-- Buscador rápido de marca -->
      <div style="max-width: 420px; margin: 1.5rem auto 0 auto; position: relative;">
        <input type="text" id="brandSearchInput" placeholder="🔍 Escribe tu marca (ej. Junkers, Splendid, Rheem...)" class="form-control" style="text-align: center; border-radius: var(--radius-full); font-weight: 600;">
      </div>
    </div>

    <!-- Marquee Continuo de Logos de Marcas (Infinito 60fps con pausa al posar el mouse) -->
    <div class="brands-marquee-container" id="brandsMarqueeContainer">
      <div class="brands-marquee-track" id="brandsMarqueeTrack">
        <!-- Set 1 (18 Marcas) -->
        <div class="brand-slide-card" data-brand="junkers">
          <img src="/assets/images/brands/junkers.svg" alt="Servicio Técnico Calefón Junkers Chile" width="120" height="40" loading="lazy">
          <span>JUNKERS</span>
        </div>
        <div class="brand-slide-card" data-brand="splendid">
          <img src="/assets/images/brands/splendid.svg" alt="Servicio Técnico Calefón Splendid Chile" width="120" height="40" loading="lazy">
          <span>SPLENDID</span>
        </div>
        <div class="brand-slide-card" data-brand="mademsa">
          <img src="/assets/images/brands/mademsa.svg" alt="Reparación Calefón Mademsa Chile" width="120" height="40" loading="lazy">
          <span>MADEMSA</span>
        </div>
        <div class="brand-slide-card" data-brand="neckar">
          <img src="/assets/images/brands/neckar.svg" alt="Técnico Calefón Neckar Chile" width="120" height="40" loading="lazy">
          <span>NECKAR</span>
        </div>
        <div class="brand-slide-card" data-brand="rheem">
          <img src="/assets/images/brands/rheem.svg" alt="Mantención Calefón Rheem Chile" width="120" height="40" loading="lazy">
          <span>RHEEM</span>
        </div>
        <div class="brand-slide-card" data-brand="ursus trotter">
          <img src="/assets/images/brands/trotter.svg" alt="Servicio Técnico Ursus Trotter Chile" width="120" height="40" loading="lazy">
          <span>URSUS TROTTER</span>
        </div>
        <div class="brand-slide-card" data-brand="bosch">
          <img src="/assets/images/brands/bosch.svg" alt="Servicio Calefón Bosch Chile" width="120" height="40" loading="lazy">
          <span>BOSCH</span>
        </div>
        <div class="brand-slide-card" data-brand="rinnai">
          <img src="/assets/images/brands/rinnai.svg" alt="Calefón Rinnai Chile" width="120" height="40" loading="lazy">
          <span>RINNAI</span>
        </div>
        <div class="brand-slide-card" data-brand="anwo">
          <img src="/assets/images/brands/anwo.svg" alt="Calderas y Calefón Anwo Chile" width="120" height="40" loading="lazy">
          <span>ANWO</span>
        </div>
        <div class="brand-slide-card" data-brand="beretta">
          <img src="/assets/images/brands/beretta.svg" alt="Calderas y Calefones Beretta" width="120" height="40" loading="lazy">
          <span>BERETTA</span>
        </div>
        <div class="brand-slide-card" data-brand="vaillant">
          <img src="/assets/images/brands/vaillant.svg" alt="Calefones Vaillant Chile" width="120" height="40" loading="lazy">
          <span>VAILLANT</span>
        </div>
        <div class="brand-slide-card" data-brand="fensa">
          <img src="/assets/images/brands/fensa.svg" alt="Reparación Calefón Fensa" width="120" height="40" loading="lazy">
          <span>FENSA</span>
        </div>
        <div class="brand-slide-card" data-brand="sindelen">
          <img src="/assets/images/brands/sindelen.svg" alt="Calefón Sindelen Chile" width="120" height="40" loading="lazy">
          <span>SINDELEN</span>
        </div>
        <div class="brand-slide-card" data-brand="albin trotter">
          <img src="/assets/images/brands/albin-trotter.svg" alt="Calefones Albin Trotter" width="120" height="40" loading="lazy">
          <span>ALBIN TROTTER</span>
        </div>
        <div class="brand-slide-card" data-brand="teka">
          <img src="/assets/images/brands/teka.svg" alt="Calefones Teka Chile" width="120" height="40" loading="lazy">
          <span>TEKA</span>
        </div>
        <div class="brand-slide-card" data-brand="midea">
          <img src="/assets/images/brands/midea.svg" alt="Calefón Midea Chile" width="120" height="40" loading="lazy">
          <span>MIDEA</span>
        </div>
        <div class="brand-slide-card" data-brand="haier">
          <img src="/assets/images/brands/haier.svg" alt="Calefones Haier" width="120" height="40" loading="lazy">
          <span>HAIER</span>
        </div>
        <div class="brand-slide-card" data-brand="walter trotter">
          <img src="/assets/images/brands/walter-trotter.svg" alt="Walter Trotter Chile" width="120" height="40" loading="lazy">
          <span>WALTER TROTTER</span>
        </div>

        <!-- Set 2 (Duplicado para loop continuo infinito sin salto) -->
        <div class="brand-slide-card" data-brand="junkers" aria-hidden="true">
          <img src="/assets/images/brands/junkers.svg" alt="Servicio Técnico Calefón Junkers Chile" width="120" height="40" loading="lazy">
          <span>JUNKERS</span>
        </div>
        <div class="brand-slide-card" data-brand="splendid" aria-hidden="true">
          <img src="/assets/images/brands/splendid.svg" alt="Servicio Técnico Calefón Splendid Chile" width="120" height="40" loading="lazy">
          <span>SPLENDID</span>
        </div>
        <div class="brand-slide-card" data-brand="mademsa" aria-hidden="true">
          <img src="/assets/images/brands/mademsa.svg" alt="Reparación Calefón Mademsa Chile" width="120" height="40" loading="lazy">
          <span>MADEMSA</span>
        </div>
        <div class="brand-slide-card" data-brand="neckar" aria-hidden="true">
          <img src="/assets/images/brands/neckar.svg" alt="Técnico Calefón Neckar Chile" width="120" height="40" loading="lazy">
          <span>NECKAR</span>
        </div>
        <div class="brand-slide-card" data-brand="rheem" aria-hidden="true">
          <img src="/assets/images/brands/rheem.svg" alt="Mantención Calefón Rheem Chile" width="120" height="40" loading="lazy">
          <span>RHEEM</span>
        </div>
        <div class="brand-slide-card" data-brand="ursus trotter" aria-hidden="true">
          <img src="/assets/images/brands/trotter.svg" alt="Servicio Técnico Ursus Trotter Chile" width="120" height="40" loading="lazy">
          <span>URSUS TROTTER</span>
        </div>
        <div class="brand-slide-card" data-brand="bosch" aria-hidden="true">
          <img src="/assets/images/brands/bosch.svg" alt="Servicio Calefón Bosch Chile" width="120" height="40" loading="lazy">
          <span>BOSCH</span>
        </div>
        <div class="brand-slide-card" data-brand="rinnai" aria-hidden="true">
          <img src="/assets/images/brands/rinnai.svg" alt="Calefón Rinnai Chile" width="120" height="40" loading="lazy">
          <span>RINNAI</span>
        </div>
        <div class="brand-slide-card" data-brand="anwo" aria-hidden="true">
          <img src="/assets/images/brands/anwo.svg" alt="Calderas y Calefón Anwo Chile" width="120" height="40" loading="lazy">
          <span>ANWO</span>
        </div>
        <div class="brand-slide-card" data-brand="beretta" aria-hidden="true">
          <img src="/assets/images/brands/beretta.svg" alt="Calderas y Calefones Beretta" width="120" height="40" loading="lazy">
          <span>BERETTA</span>
        </div>
        <div class="brand-slide-card" data-brand="vaillant" aria-hidden="true">
          <img src="/assets/images/brands/vaillant.svg" alt="Calefones Vaillant Chile" width="120" height="40" loading="lazy">
          <span>VAILLANT</span>
        </div>
        <div class="brand-slide-card" data-brand="fensa" aria-hidden="true">
          <img src="/assets/images/brands/fensa.svg" alt="Reparación Calefón Fensa" width="120" height="40" loading="lazy">
          <span>FENSA</span>
        </div>
        <div class="brand-slide-card" data-brand="sindelen" aria-hidden="true">
          <img src="/assets/images/brands/sindelen.svg" alt="Calefón Sindelen Chile" width="120" height="40" loading="lazy">
          <span>SINDELEN</span>
        </div>
        <div class="brand-slide-card" data-brand="albin trotter" aria-hidden="true">
          <img src="/assets/images/brands/albin-trotter.svg" alt="Calefones Albin Trotter" width="120" height="40" loading="lazy">
          <span>ALBIN TROTTER</span>
        </div>
        <div class="brand-slide-card" data-brand="teka" aria-hidden="true">
          <img src="/assets/images/brands/teka.svg" alt="Calefones Teka Chile" width="120" height="40" loading="lazy">
          <span>TEKA</span>
        </div>
        <div class="brand-slide-card" data-brand="midea" aria-hidden="true">
          <img src="/assets/images/brands/midea.svg" alt="Calefón Midea Chile" width="120" height="40" loading="lazy">
          <span>MIDEA</span>
        </div>
        <div class="brand-slide-card" data-brand="haier" aria-hidden="true">
          <img src="/assets/images/brands/haier.svg" alt="Calefones Haier" width="120" height="40" loading="lazy">
          <span>HAIER</span>
        </div>
        <div class="brand-slide-card" data-brand="walter trotter" aria-hidden="true">
          <img src="/assets/images/brands/walter-trotter.svg" alt="Walter Trotter Chile" width="120" height="40" loading="lazy">
          <span>WALTER TROTTER</span>
        </div>
      </div>
    </div>

    <div class="brands-footnote">
      <i class="fa-solid fa-circle-check" style="color: #16a34a;"></i>
      <span>Trabajamos tanto modelos antiguos tradicionales como equipos modernos digitales ionizados y de tiro forzado.</span>
    </div>
  </div>
</section>

<!-- ==========================================================================
     TROUBLESHOOTER INTERACTIVO EN SLIDER ("¿QUÉ LE PASA A TU CALEFÓN?")
     "Esto mismo, qué problemas presenta tu calefon, lo mismo, en un slider"
     ========================================================================== -->
<section class="troubleshooter-section" id="diagnostico">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Diagnóstico Rápido de Averías</span>
      <h2 class="section-title">¿Qué Problema Presenta Tu Calefón?</h2>
      <p class="section-subtitle">
        Desliza para seleccionar el síntoma, conocer la causa técnica y solicitar el técnico con repuestos originales:
      </p>
    </div>

    <div class="custom-slider-container">
      <div class="slider-controls-bar">
        <div class="slider-status-wrap">
          <span class="slider-status-pill playing" id="diagStatus">
            <span class="pulse-dot"></span> <span class="status-label">Autoplay activo</span>
          </span>
          <span class="slider-swipe-hint">
            <i class="fa-solid fa-hand-pointer"></i> Pasa el mouse o lee para pausar
          </span>
        </div>
        <div class="slider-arrows">
          <button class="slider-arrow-btn" id="diagPrevBtn" aria-label="Avería Anterior">
            <i class="fa-solid fa-chevron-left"></i>
          </button>
          <button class="slider-arrow-btn" id="diagNextBtn" aria-label="Siguiente Avería">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <div class="slider-scroll-track" id="diagSliderTrack">
        <!-- Falla 1: No enciende / no da chispa -->
        <div class="diagnostic-slide-item">
          <div>
            <div class="diagnostic-icon-box">
              <i class="fa-solid fa-plug-circle-xmark"></i>
            </div>
            <div class="diagnostic-slide-title">No da chispa ni prende</div>
            <p class="diagnostic-symptoms">
              Abres la llave del agua caliente pero el calefón no reacciona, no suena el "tic-tic-tic" del chispero o la llama piloto no enciende.
            </p>
            <div class="diagnostic-solution-box">
              <strong>Diagnóstico técnico SEC:</strong>
              Pilas alcalinas descargadas, microswitch sulfatado, diafragma de goma roto o módulo de encendido dañado.
            </div>
          </div>
          <button class="btn btn-whatsapp btn-diagnostic-trigger" data-issue="Mi calefón no da chispa ni prende">
            <i class="fa-brands fa-whatsapp"></i> Pedir Técnico para esta Falla
          </button>
        </div>

        <!-- Falla 2: Prende y se apaga -->
        <div class="diagnostic-slide-item">
          <div>
            <div class="diagnostic-icon-box">
              <i class="fa-solid fa-fire-burner"></i>
            </div>
            <div class="diagnostic-slide-title">Prende y se apaga a los segundos</div>
            <p class="diagnostic-symptoms">
              El calefón enciende, el quemador calienta brevemente pero se apaga antes de 1 minuto, dejando el agua helada durante la ducha.
            </p>
            <div class="diagnostic-solution-box">
              <strong>Origen común de la avería:</strong>
              Sonda de ionización carbonizada, termocupla vencida, sensor de gases bloqueado o tiro forzado sin evacuación libre.
            </div>
          </div>
          <button class="btn btn-whatsapp btn-diagnostic-trigger" data-issue="Mi calefón prende y se apaga a los pocos segundos">
            <i class="fa-brands fa-whatsapp"></i> Pedir Técnico para esta Falla
          </button>
        </div>

        <!-- Falla 3: Agua tibia o sin presión -->
        <div class="diagnostic-slide-item">
          <div>
            <div class="diagnostic-icon-box">
              <i class="fa-solid fa-temperature-arrow-down"></i>
            </div>
            <div class="diagnostic-slide-title">Agua sale tibia o no calienta</div>
            <p class="diagnostic-symptoms">
              La llama está encendida pero el agua nunca alcanza temperatura confortable, o sale con muy poco caudal y presión.
            </p>
            <div class="diagnostic-solution-box">
              <strong>Causa técnica detectada:</strong>
              Incrustación severa de sarro en el serpentín de cobre, membrana deformada o presión de gas insuficiente.
            </div>
          </div>
          <button class="btn btn-whatsapp btn-diagnostic-trigger" data-issue="Mi calefón tira agua tibia o con poco caudal">
            <i class="fa-brands fa-whatsapp"></i> Pedir Técnico para esta Falla
          </button>
        </div>

        <!-- Falla 4: Olor a gas o fuga de agua (Peligro) -->
        <div class="diagnostic-slide-item danger">
          <div>
            <div class="diagnostic-icon-box">
              <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
            <div class="diagnostic-slide-title" style="color: #dc2626;">Olor a gas o goteo de agua</div>
            <p class="diagnostic-symptoms">
              Sientes olor a gas licuado o natural cerca del equipo, o notas filtración continua de agua debajo del cuerpo de agua.
            </p>
            <div class="diagnostic-solution-box" style="border-left-color: #dc2626;">
              <strong>Protocolo de seguridad SEC:</strong>
              Cierra la llave de paso de gas de inmediato. Fuga en uniones, empaquetaduras quemadas o rotura de prensa estopa.
            </div>
          </div>
          <button class="btn btn-flame btn-diagnostic-trigger" data-issue="ATENCIÓN: Siento olor a gas o fuga de agua en mi calefón">
            <i class="fa-solid fa-phone-volume"></i> Asistencia Prioritaria SEC
          </button>
        </div>

        <!-- Falla 5: Explosión al encender -->
        <div class="diagnostic-slide-item">
          <div>
            <div class="diagnostic-icon-box">
              <i class="fa-solid fa-burst"></i>
            </div>
            <div class="diagnostic-slide-title">Explosión o estruendo al encender</div>
            <p class="diagnostic-symptoms">
              El calefón acumula gas y genera un golpe o explosión seca al momento de encender los quemadores, sacudiendo la lata exterior.
            </p>
            <div class="diagnostic-solution-box">
              <strong>Motivo técnico frecuente:</strong>
              Retardo en la chispa, electrodo mal posicionado, inyectores obstruidos con hollín o suciedad en quemadores.
            </div>
          </div>
          <button class="btn btn-whatsapp btn-diagnostic-trigger" data-issue="Mi calefón produce explosiones o golpes al encender">
            <i class="fa-brands fa-whatsapp"></i> Pedir Técnico para esta Falla
          </button>
        </div>

        <!-- Falla 6: Error digital en pantalla -->
        <div class="diagnostic-slide-item">
          <div>
            <div class="diagnostic-icon-box">
              <i class="fa-solid fa-display"></i>
            </div>
            <div class="diagnostic-slide-title">Código de error en pantalla</div>
            <p class="diagnostic-symptoms">
              La pantalla digital parpadea mostrando códigos como E1, E2, E4, EA, F1 o F7 y el calefón entra en bloqueo de seguridad.
            </p>
            <div class="diagnostic-solution-box">
              <strong>Revisión recomendada SEC:</strong>
              Falla en presostato de aire (tiro forzado), sobrecalentamiento térmico, sensor NTC defectuoso o corte de gas.
            </div>
          </div>
          <button class="btn btn-whatsapp btn-diagnostic-trigger" data-issue="Mi calefón tiene un código de error en la pantalla">
            <i class="fa-brands fa-whatsapp"></i> Pedir Técnico para esta Falla
          </button>
        </div>
      </div>

      <!-- Indicadores de puntos -->
      <div class="slider-dots" id="diagSliderDots"></div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SERVICIOS PRINCIPALES EN GRILLA
     Alta conversión, visión clara e inmediata de todas las soluciones
     ========================================================================== -->
<section class="services-section" id="servicios">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Soluciones Integrales</span>
      <h2 class="section-title">Servicios Técnicos Profesionales a Domicilio</h2>
      <p class="section-subtitle">
        Conoce nuestros servicios ejecutados bajo estricta normativa de la SEC en todo Chile:
      </p>
    </div>

    <div class="services-grid">
      <!-- Servicio 1: Reparación -->
      <div class="service-card">
        <span class="service-badge badge-reparacion">Atención en el Día</span>
        <h3>Reparación de Calefones</h3>
        <p>
          Diagnóstico certero y reparación inmediata en terreno. Cambiamos piezas defectuosas con repuestos legítimos de cada fabricante.
        </p>
        <ul class="service-feature-list">
          <li><i class="fa-solid fa-check"></i> Reemplazo de membranas y diafragmas de silicona</li>
          <li><i class="fa-solid fa-check"></i> Cambio de microswitch, electrodos y termocuplas</li>
          <li><i class="fa-solid fa-check"></i> Reparación de módulos electrónicos y solenoides</li>
          <li><i class="fa-solid fa-check"></i> Pruebas de encendido seguro y sellado de gases</li>
        </ul>
        <a href="https://wa.me/56932237072?text=Hola%20Central%20Calefon,%20solicito%20cotizaci%C3%B3n%20para%20Reparaci%C3%B3n%20de%20mi%20Calef%C3%B3n" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> Solicitar Reparación</a>
      </div>

      <!-- Servicio 2: Mantención -->
      <div class="service-card">
        <span class="service-badge badge-mantencion">Prevención &amp; Ahorro</span>
        <h3>Mantención Preventiva y Correctiva</h3>
        <p>
          Alarga la vida útil de tu calefón, disminuye hasta un 25% el consumo de gas y previene intoxicaciones por monóxido de carbono.
        </p>
        <ul class="service-feature-list">
          <li><i class="fa-solid fa-check"></i> Desincrustación química de sarro en serpentín</li>
          <li><i class="fa-solid fa-check"></i> Desarme y limpieza profunda de quemadores e inyectores</li>
          <li><i class="fa-solid fa-check"></i> Calibración del caudal de agua y presión de gas</li>
          <li><i class="fa-solid fa-check"></i> Test de evacuación de monóxido y combustión limpia</li>
        </ul>
        <a href="https://wa.me/56932237072?text=Hola%20Central%20Calefon,%20deseo%20agendar%20la%20Mantenci%C3%B3n%20Preventiva%20de%20mi%20Calef%C3%B3n" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> Agendar Mantención</a>
      </div>

      <!-- Servicio 3: Instalación SEC -->
      <div class="service-card">
        <span class="service-badge badge-instalacion">Norma DS 66 SEC</span>
        <h3>Instalación Certificada SEC</h3>
        <p>
          Montaje y conexión de calefones nuevos de tiro natural, tiro forzado y eléctricos cumpliendo toda la normativa legal chilena.
        </p>
        <ul class="service-feature-list">
          <li><i class="fa-solid fa-check"></i> Conexión en cañería de cobre con llave de paso reglamentaria</li>
          <li><i class="fa-solid fa-check"></i> Instalación de ducto de evacuación y sombrerete</li>
          <li><i class="fa-solid fa-check"></i> Prueba de hermeticidad certificada libre de fugas</li>
          <li><i class="fa-solid fa-check"></i> Emisión de informe técnico para garantías de fábrica</li>
        </ul>
        <a href="https://wa.me/56932237072?text=Hola%20Central%20Calefon,%20solicito%20cotizaci%C3%B3n%20para%20Instalaci%C3%B3n%20Certificada%20SEC%20de%20Calef%C3%B3n" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> Cotizar Instalación</a>
      </div>

      <!-- Servicio 4: Fugas y Cañerías -->
      <div class="service-card">
        <span class="service-badge badge-fugas">Seguridad Crítica</span>
        <h3>Detección y Reparación de Fugas</h3>
        <p>
          Localización de fugas invisibles en redes de gas licuado (GLP) y gas natural (GN) mediante detectores electrónicos de alta sensibilidad.
        </p>
        <ul class="service-feature-list">
          <li><i class="fa-solid fa-check"></i> Escaneo digital de cañerías, flexibles y llaves de paso</li>
          <li><i class="fa-solid fa-check"></i> Soldadura de cañerías de cobre con aleación de plata</li>
          <li><i class="fa-solid fa-check"></i> Adecuación de ventilaciones y cañerías bajo norma SEC</li>
          <li><i class="fa-solid fa-check"></i> Atención prioritaria en el día para problemas de gas</li>
        </ul>
        <a href="tel:+56932237072" class="btn btn-phone"><i class="fa-solid fa-phone-volume"></i> Llamar al 9 3223 7072</a>
      </div>

      <!-- Servicio 5: Calderas y Calefacción -->
      <div class="service-card">
        <span class="service-badge badge-mantencion">Climatización Central</span>
        <h3>Servicio Técnico de Calderas</h3>
        <p>
          Mantenimiento correctivo y puesta a punto de calderas murales mixtas (agua caliente sanitaria y calefacción central por radiadores).
        </p>
        <ul class="service-feature-list">
          <li><i class="fa-solid fa-check"></i> Purga de circuitos y calibración de vaso de expansión</li>
          <li><i class="fa-solid fa-check"></i> Chequeo de bombas circuladoras y presostatos</li>
          <li><i class="fa-solid fa-check"></i> Ajuste de termostatos programables de ambiente</li>
          <li><i class="fa-solid fa-check"></i> Soporte marcas Anwo, Beretta, Junkers, Baxi, Vaillant</li>
        </ul>
        <a href="https://wa.me/56932237072?text=Hola%20Central%20Calefon,%20solicito%20asistencia%20t%C3%A9cnica%20para%20Caldera" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> Soporte Calderas</a>
      </div>

      <!-- Servicio 6: Termos Eléctricos -->
      <div class="service-card">
        <span class="service-badge badge-instalacion">Agua Caliente Eléctrica</span>
        <h3>Termos Eléctricos y Acumuladores</h3>
        <p>
          Reparación y cambio de resistencia, ánodos de sacrificio de magnesio y termostatos de seguridad en termos eléctricos.
        </p>
        <ul class="service-feature-list">
          <li><i class="fa-solid fa-check"></i> Cambio de ánodo de magnesio para evitar corrosión</li>
          <li><i class="fa-solid fa-check"></i> Reemplazo de resistencia blindada y empaquetaduras</li>
          <li><i class="fa-solid fa-check"></i> Instalación de válvulas de alivio y sobrepresión</li>
          <li><i class="fa-solid fa-check"></i> Revisión del circuito eléctrico y puesta a tierra</li>
        </ul>
        <a href="https://wa.me/56932237072?text=Hola%20Central%20Calefon,%20solicito%20cotizaci%C3%B3n%20para%20Termo%20El%C3%A9ctrico" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> Cotizar Termo</a>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECCIÓN TRABAJO REAL EN TERRENO (CIERRE DE VENTA TRAS SERVICIOS)
     "en Home, en una parte específica donde esta información sea decisiva en un cierre de venta"
     ========================================================================== -->
<section class="field-service-section" id="trabajo-terreno">
  <div class="container">
    <div class="field-service-grid">
      <!-- Columna Izquierda: Nuestros Servicios / Explicación Técnica -->
      <div class="field-service-content">
        <span class="section-tag" style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255, 107, 0, 0.15); color: #ff8c42; border-color: rgba(255, 107, 0, 0.3);">
          <i class="fa-solid fa-screwdriver-wrench"></i> Procedimiento Técnico en Terreno
        </span>
        <h2 class="section-title" style="text-align: left; margin-bottom: 1.25rem; color: #ffffff;">
          Técnicos SEC en Acción: <span class="highlight-flame">Diagnóstico y Reparación</span> Directa
        </h2>
        <p class="field-service-desc">
          Así opera nuestro equipo profesional en cada visita domiciliaria: inspección exhaustiva de circuitos de gas, flexibles de agua, llaves de paso, quemadores y sistemas de tiro bajo estricta normativa <strong>Decreto Supremo 66</strong>.
        </p>

        <!-- Lista de estándares de servicio -->
        <div class="field-service-list">
          <div class="field-service-item">
            <div class="field-item-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
            <div>
              <strong class="field-item-title" style="display: block; font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 0.35rem;">Diagnóstico y Detección de Fugas</strong>
              <p>Revisión con instrumental calibrado de estanqueidad, presión de gas dinámica y estado de las redes.</p>
            </div>
          </div>

          <div class="field-service-item">
            <div class="field-item-icon"><i class="fa-solid fa-gears"></i></div>
            <div>
              <strong class="field-item-title" style="display: block; font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 0.35rem;">Repuestos Legítimos In-Situ</strong>
              <p>Cambio inmediato de diafragmas de silicona, serpentines, termocuplas y electroválvulas en el lugar.</p>
            </div>
          </div>

          <div class="field-service-item">
            <div class="field-item-icon"><i class="fa-solid fa-shield-halved"></i></div>
            <div>
              <strong class="field-item-title" style="display: block; font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 0.35rem;">Certificación SEC y Seguridad</strong>
              <p>Atención directa por gasfíter autorizado con registro visible y comprobable en el portal oficial SEC.cl.</p>
            </div>
          </div>

          <div class="field-service-item">
            <div class="field-item-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
            <div>
              <strong class="field-item-title" style="display: block; font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 0.35rem;">Garantía Escrita y Boleta/Factura</strong>
              <p>Respaldo formal de todos los trabajos realizados para tu total tranquilidad y la de tu familia.</p>
            </div>
          </div>
        </div>

        <!-- Botones de Acción Directa -->
        <div class="field-cta-group">
          <a href="https://wa.me/56932237072?text=Hola%20Central%20Calef%C3%B3n,%20vi%20el%20video%20de%20su%20servicio%20y%20necesito%20un%20t%C3%A9cnico%20a%20domicilio" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
            <i class="fa-brands fa-whatsapp fa-xl"></i>
            <span>Pedir Técnico a Domicilio</span>
          </a>
          <a href="tel:+56932237072" class="btn btn-phone btn-lg">
            <i class="fa-solid fa-phone"></i>
            <span>Llamar 9 3223 7072</span>
          </a>
        </div>
      </div>

      <!-- Columna Derecha: Video Interactivo con Autoplay, Loop y Control de Sonido -->
      <div class="field-video-wrapper">
        <div class="field-video-card" title="Toca para pausar o reanudar el video">
          <!-- Tag flotante superior -->
          <div class="field-video-badge">
            <span class="live-indicator"></span> Registro Real en Terreno
          </div>

          <!-- Video HTML5 Optimizado -->
          <video class="field-video-player" autoplay loop muted playsinline poster="/assets/videos/hero-poster.webp" preload="metadata">
            <source src="/assets/videos/trabajo-terreno.mp4" type="video/mp4">
            Tu navegador no soporta video HTML5.
          </video>

          <!-- Control Flotante de Audio / Mute -->
          <div class="field-video-controls">
            <button type="button" class="video-audio-toggle-btn" aria-label="Activar o silenciar audio del video">
              <i class="fa-solid fa-volume-xmark"></i>
              <span class="audio-btn-label">Toca para escuchar</span>
            </button>
            <span class="video-sub-hint"><i class="fa-solid fa-rotate"></i> Loop continuo</span>
          </div>
        </div>

        <!-- Callout inferior de confianza -->
        <div class="field-video-footer-hint">
          <i class="fa-solid fa-circle-check" style="color: #10b981;"></i>
          <span>Móviles equipados con herramientas e insumos para solucionar tu avería en una sola visita.</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     TIPOS DE CALEFÓN & NORMATIVA SEC
     Keywords: tiro forzado, tiro natural, ionizado, electrico
     ========================================================================== -->
<section class="tech-types-section" id="tipos">
  <div class="container">
    <div class="text-center">
      <span class="section-tag" style="color: #38bdf8;">Guía Técnica de Equipos</span>
      <h2 class="section-title" style="color: #fff;">Tipos de Calefón en Chile: ¿Cuál Tienes Tú?</h2>
      <p class="section-subtitle" style="color: #cbd5e1;">
        Conoce las diferencias técnicas para saber qué mantención o reparación requiere tu equipo según la normativa SEC:
      </p>
    </div>

    <div class="tech-grid">
      <!-- Tipo 1: Tiro Forzado -->
      <div class="tech-card">
        <div class="tech-card-title"><i class="fa-solid fa-fan" style="color: #38bdf8;"></i> Calefón de Tiro Forzado</div>
        <p>
          Incorpora un ventilador o extractor eléctrico en la parte superior que expulsa mecánicamente los gases residuales de la combustión hacia el exterior. Es obligatorio por norma SEC en departamentos modernos, logias cerradas o espacios con ventilación natural restringida. Requiere enchufe eléctrico a 220V.
        </p>
        <div class="tech-tag-group">
          <span class="tech-tag">Extractor Eléctrico</span>
          <span class="tech-tag">Presostato de Aire</span>
          <span class="tech-tag">Obligatorio Edificios</span>
          <span class="tech-tag">Cámara Abierta/Estanca</span>
        </div>
      </div>

      <!-- Tipo 2: Ionizado (Sin Piloto) -->
      <div class="tech-card">
        <div class="tech-card-title"><i class="fa-solid fa-bolt" style="color: #f59e0b;"></i> Calefón Ionizado Automático</div>
        <p>
          No mantiene una llama piloto encendida permanentemente, ahorrando gas de forma considerable. Al abrir la llave del agua caliente, un microswitch activa una chispa electrónica y una electroválvula libera el gas; un sensor de ionización verifica la llama en milisegundos. Funciona con 1 o 2 pilas tipo D o hidrogenerador.
        </p>
        <div class="tech-tag-group">
          <span class="tech-tag">Encendido Automático</span>
          <span class="tech-tag">Ahorro de Gas</span>
          <span class="tech-tag">Sonda de Llama</span>
          <span class="tech-tag">Pilas Alcalinas / Hidro</span>
        </div>
      </div>

      <!-- Tipo 3: Tiro Natural Tradicional -->
      <div class="tech-card">
        <div class="tech-card-title"><i class="fa-solid fa-wind" style="color: #4ade80;"></i> Calefón de Tiro Natural</div>
        <p>
          La evacuación de gases se produce naturalmente por diferencia de densidad del aire caliente que asciende por el ducto vertical hacia el exterior. Requiere un ducto con altura reglamentaria y ventilaciones permanentes cruzadas en el recinto. Típico de casas tradicionales y patios de servicio techados.
        </p>
        <div class="tech-tag-group">
          <span class="tech-tag">Ducto Vertical</span>
          <span class="tech-tag">Ventilación Cruzada</span>
          <span class="tech-tag">Con o Sin Piloto</span>
          <span class="tech-tag">Sensor de Retroceso</span>
        </div>
      </div>

      <!-- Tipo 4: Eléctricos y Acumulación -->
      <div class="tech-card">
        <div class="tech-card-title"><i class="fa-solid fa-plug" style="color: #a855f7;"></i> Calefón Eléctrico &amp; Termos</div>
        <p>
          Calientan el agua sin quemar gas mediante resistencias eléctricas blindadas de cobre o acero inoxidable. Pueden ser de paso continuo (instantáneos de alta potencia) o por acumulación (termos de 50L, 80L, 100L a 150L con aislamiento de poliuretano de alta densidad). Ideales donde no llega red de gas.
        </p>
        <div class="tech-tag-group">
          <span class="tech-tag">Cero Emisiones CO</span>
          <span class="tech-tag">Ánodo de Magnesio</span>
          <span class="tech-tag">Termostato Digital</span>
          <span class="tech-tag">100% Silencioso</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     TABLA DE CÓDIGOS DE ERROR COMUNES
     ========================================================================== -->
<section class="errors-section">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Guía de Errores Digitales</span>
      <h2 class="section-title">Códigos de Falla Más Comunes en Calefones</h2>
      <p class="section-subtitle">
        Si tu calefón digital muestra letras y números en su pantalla, consulta aquí qué significa y cuál es la solución técnica:
      </p>
    </div>

    <div class="table-responsive">
      <table class="error-table">
        <thead>
          <tr>
            <th>Marca</th>
            <th>Código</th>
            <th>Significado de la Falla</th>
            <th>Causa Raíz</th>
            <th>Solución Recomendada SEC</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Junkers / Bosch</strong></td>
            <td><span class="code-badge">EA</span></td>
            <td>No se detecta llama</td>
            <td>Electrodo sucio, corte de gas o electroválvula trabada</td>
            <td>Limpieza de sensor de ionización o ajuste de presión de gas</td>
          </tr>
          <tr>
            <td><strong>Junkers / Bosch</strong></td>
            <td><span class="code-badge">E9 / E2</span></td>
            <td>Sobrecalentamiento térmico</td>
            <td>Sensor limitador NTC abierto o sarro en serpentín</td>
            <td>Descalcificación del serpentín y cambio de sensor de seguridad</td>
          </tr>
          <tr>
            <td><strong>Splendid</strong></td>
            <td><span class="code-badge">E1</span></td>
            <td>Falla de ignición inicial</td>
            <td>Pilas descargadas, microswitch abierto o falta de gas</td>
            <td>Reemplazo de pilas alcalinas o cambio de microswitch</td>
          </tr>
          <tr>
            <td><strong>Splendid</strong></td>
            <td><span class="code-badge">E4</span></td>
            <td>Sensor de temperatura abierto/cortocircuito</td>
            <td>Sensor de salida NTC desconectado o quemado</td>
            <td>Reemplazo del sensor NTC original</td>
          </tr>
          <tr>
            <td><strong>Rheem</strong></td>
            <td><span class="code-badge">E1 / E2</span></td>
            <td>Falla de encendido / Sensor de llama</td>
            <td>Sonda ionizadora sin masa o sucia</td>
            <td>Ajuste de cables de bujía y limpieza de sonda</td>
          </tr>
          <tr>
            <td><strong>Ursus Trotter</strong></td>
            <td><span class="code-badge">E5 / F1</span></td>
            <td>Falla en ventilador tiro forzado</td>
            <td>Presostato no conmuta o conducto de aire tapado</td>
            <td>Revisión de turbina extractora y destape de chimenea</td>
          </tr>
          <tr>
            <td><strong>Mademsa</strong></td>
            <td><span class="code-badge">E3</span></td>
            <td>Activación sensor de retroceso de gases</td>
            <td>Mala evacuación de gases o chimenea aplastada</td>
            <td>Ajuste reglamentario del ducto de evacuación SEC</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div style="text-align: center; margin-top: 1.5rem;">
      <a href="https://wa.me/56932237072?text=Hola,%20mi%20calef%C3%B3n%20marca%20un%20c%C3%B3digo%20de%20error%20y%20necesito%20asistencia" target="_blank" class="btn btn-whatsapp">
        <i class="fa-brands fa-whatsapp"></i> ¿Tu código no aparece? Consulta gratis por WhatsApp
      </a>
    </div>
  </div>
</section>



<!-- ==========================================================================
     PREGUNTAS FRECUENTES (FAQ ACCORDION)
     "que se disipe las dudas con el FAQ JSON-LD, JSON-LD"
     ========================================================================== -->
<section class="faq-section" id="faq">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Despeja Tus Dudas</span>
      <h2 class="section-title">Preguntas Frecuentes sobre Calefones en Chile</h2>
      <p class="section-subtitle">
        Respuestas directas de nuestros técnicos gasfíters autorizados SEC:
      </p>
    </div>

    <div class="faq-accordion-wrap">
      <!-- FAQ 1 -->
      <div class="faq-item">
        <button class="faq-question">
          <span>¿Por qué mi calefón prende y se apaga a los pocos segundos?</span>
          <span class="faq-icon"><i class="fa-solid fa-chevron-down"></i></span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">
            Este síntoma es uno de los más frecuentes en calefones ionizados y tiro forzado. Generalmente obedece a:
            <ol style="margin-top: 0.5rem; padding-left: 1.25rem;">
              <li><strong>Sonda de ionización sucia o carbonizada:</strong> no detecta la llama y la centralita corta el gas por seguridad tras 7 segundos.</li>
              <li><strong>Acumulación de sarro en el serpentín:</strong> eleva la temperatura súbitamente activando el termostato de sobrecalentamiento.</li>
              <li><strong>Sensor de revoco de gases bloqueado:</strong> si los gases no evacúan libremente por el ducto, el sensor corta el encendido para evitar asfixia o intoxicación por monóxido.</li>
              <li><strong>Pilas alcalinas con bajo voltaje:</strong> abren la electroválvula pero no logran sostenerla abierta.</li>
            </ol>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item">
        <button class="faq-question">
          <span>¿Qué diferencia hay entre un calefón ionizado y uno de tiro forzado?</span>
          <span class="faq-icon"><i class="fa-solid fa-chevron-down"></i></span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">
            El <strong>calefón ionizado</strong> es aquel que enciende automáticamente con chispa eléctrica al detectar el flujo de agua, eliminando el antiguo piloto encendido todo el día. Puede ser tanto de tiro natural (chimenea hacia arriba por gravedad) como de tiro forzado.
            <br><br>
            El <strong>calefón de tiro forzado</strong>, en cambio, tiene un ventilador extractor accionado por electricidad (220V). La normativa SEC chilena exige tiro forzado obligatorio en departamentos y logias cerradas donde no hay suficiente tiro natural vertical, garantizando que el 100% de los gases nocivos sean expulsados al exterior mediante una turbina mecánica.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item">
        <button class="faq-question">
          <span>¿Qué exige la normativa SEC para instalar un calefón en una vivienda?</span>
          <span class="faq-icon"><i class="fa-solid fa-chevron-down"></i></span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">
            En Chile, el Decreto Supremo 66 de la Superintendencia de Electricidad y Combustibles (SEC) prohíbe taxativamente instalar calefones en baños, dormitorios o recintos cerrados sin ventilación adecuada. La normativa exige:
            <ul style="margin-top: 0.5rem; padding-left: 1.25rem;">
              <li>Instalación ejecutada únicamente por un <strong>gasfíter con carnet SEC vigente</strong>.</li>
              <li>Ducto de evacuación de material metálico rígido e incombustible con pendiente positiva y sombrerete reglamentario.</li>
              <li>Llave de paso de gas individual a la vista y accesible a menos de 1 metro del artefacto.</li>
              <li>Ventilación inferior para aire fresco y superior para escape de calor.</li>
              <li>Prueba de estanqueidad o hermeticidad con manómetro para certificar cero fugas.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item">
        <button class="faq-question">
          <span>¿Cuánto demora la visita y la reparación a domicilio?</span>
          <span class="faq-icon"><i class="fa-solid fa-chevron-down"></i></span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">
            En servicios de urgencia, coordinamos la visita en el día según disponibilidad horaria. La mayoría de las reparaciones (cambio de diafragma, limpieza de quemadores, sustitución de microswitch, electrodos o termocupla) toman entre <strong>45 y 90 minutos</strong> en el domicilio, ya que nuestros técnicos llevan en sus móviles repuestos para las marcas líderes de Chile.
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item">
        <button class="faq-question">
          <span>¿Cómo sé si mi calefón está lleno de sarro y requiere descalcificación?</span>
          <span class="faq-icon"><i class="fa-solid fa-chevron-down"></i></span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">
            Las aguas duras de la Región Metropolitana y la zona norte acumulan minerales en el serpentín de cobre. Los síntomas claros de sarro son: la presión del agua caliente sale notablemente menor que la del agua fría, el agua sale tibia aun con el gas al máximo, o el calefón emite crujidos o hervores internos al encender. Realizamos desincrustación con bomba recirculadora y químicos desincrustantes especiales que restauran el flujo al 100% sin dañar el cobre.
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item">
        <button class="faq-question">
          <span>¿Cómo puedo verificar la certificación SEC del técnico?</span>
          <span class="faq-icon"><i class="fa-solid fa-chevron-down"></i></span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">
            Todo gasfíter autorizado cuenta con un carnet emitido por la SEC que contiene su nombre, RUT, clase de instalador y un código QR único. En nuestra página web y al momento de la visita puedes escanear el código QR que enlaza directamente a la base de datos pública de la <strong>Superintendencia de Electricidad y Combustibles (SEC)</strong> verificando que Domingo Isaín Plaza Caamaño (RUT 12.738.961-6) está habilitado legalmente para intervenir artefactos e instalaciones de gas.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     COBERTURA NACIONAL
     ========================================================================== -->
<section class="coverage-section">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Presencia en Terreno</span>
      <h2 class="section-title">Cobertura de Servicio Técnico a Domicilio</h2>
      <p class="section-subtitle">
        Atención técnica directa en las principales regiones y comunas de Chile:
      </p>
    </div>

    <div class="coverage-grid">
      <!-- Región Metropolitana -->
      <div class="coverage-box">
        <div class="coverage-box-title"><i class="fa-solid fa-location-dot"></i> Región Metropolitana (Santiago)</div>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 0.75rem;">Atención en todas las comunas del Gran Santiago:</p>
        <ul class="coverage-list">
          <li><a href="/servicio-tecnico-calefon-santiago/">Santiago Centro</a></li>
          <li><a href="/servicio-tecnico-calefon-las-condes/">Las Condes</a></li>
          <li><a href="/servicio-tecnico-calefon-providencia/">Providencia</a></li>
          <li><a href="/servicio-tecnico-calefon-nunoa/">Ñuñoa</a></li>
          <li><a href="/servicio-tecnico-calefon-vitacura/">Vitacura</a></li>
          <li><a href="/servicio-tecnico-calefon-la-reina/">La Reina</a></li>
          <li><a href="/servicio-tecnico-calefon-maipu/">Maipú</a></li>
          <li><a href="/servicio-tecnico-calefon-la-florida/">La Florida</a></li>
          <li><a href="/servicio-tecnico-calefon-puente-alto/">Puente Alto</a></li>
          <li><a href="/servicio-tecnico-calefon-san-miguel/">San Miguel</a></li>
          <li><a href="/servicio-tecnico-calefon-macul/">Macul</a></li>
          <li><a href="/servicio-tecnico-calefon-penalolen/">Peñalolén</a></li>
          <li><a href="/servicio-tecnico-calefon-independencia/">Independencia</a></li>
          <li><a href="/servicio-tecnico-calefon-recoleta/">Recoleta</a></li>
          <li><a href="/servicio-tecnico-calefon-estacion-central/">Estación Central</a></li>
          <li><a href="/servicio-tecnico-calefon-quilicura/">Quilicura</a></li>
          <li><a href="/servicio-tecnico-calefon-pudahuel/">Pudahuel</a></li>
          <li><a href="/servicio-tecnico-calefon-colina/">Colina / Chicureo</a></li>
          <li><a href="/servicio-tecnico-calefon-san-bernardo/">San Bernardo</a></li>
          <li><a href="/servicio-tecnico-calefon-san-joaquin/">San Joaquín</a></li>
          <li><a href="/servicio-tecnico-calefon-renca/">Renca</a></li>
          <li><a href="/servicio-tecnico-calefon-lo-barnechea/">Lo Barnechea</a></li>
          <li><a href="/servicio-tecnico-pedro-aguirre-cerda/">Pedro Aguirre Cerda</a></li>
          <li><a href="/servicio-tecnico-calefon-padre-hurtado/">Padre Hurtado</a></li>
          <li><a href="/servicio-tecnico-calefon-buin/">Buin</a></li>
          <li><a href="/servicio-tecnico-calefon-paine/">Paine</a></li>
          <li><a href="/servicio-tecnico-calefon-pirque/">Pirque</a></li>
          <li><a href="/servicio-tecnico-calefon-lampa/">Lampa</a></li>
          <li><a href="/servicio-tecnico-calefon-huechuraba/">Huechuraba</a></li>
          <li><a href="/servicio-tecnico-calefon-quinta-normal/">Quinta Normal</a></li>
          <li><a href="/servicio-tecnico-calefon-cerrillos/">Cerrillos</a></li>
          <li><a href="/servicio-tecnico-calefon-el-bosque/">El Bosque</a></li>
          <li><a href="/servicio-tecnico-calefon-la-cisterna/">La Cisterna</a></li>
          <li><a href="/servicio-tecnico-calefon-la-pintana/">La Pintana</a></li>
          <li><a href="/servicio-tecnico-calefon-lo-espejo/">Lo Espejo</a></li>
          <li><a href="/servicio-tecnico-calefon-lo-prado/">Lo Prado</a></li>
          <li><a href="/servicio-tecnico-calefon-san-ramon/">San Ramón</a></li>
          <li><a href="/servicio-tecnico-calefon-talagante/">Talagante</a></li>
          <li><a href="/servicio-tecnico-calefon-penaflor/">Peñaflor</a></li>
          <li><a href="/servicio-tecnico-calefon-melipilla/">Melipilla</a></li>
        </ul>
      </div>

      <!-- Región de Coquimbo -->
      <div class="coverage-box">
        <div class="coverage-box-title"><i class="fa-solid fa-location-dot"></i> Región de Coquimbo</div>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 0.75rem;">Móviles locales en la conurbación:</p>
        <ul class="coverage-list">
          <li><a href="/servicio-tecnico-calefon-la-serena/">La Serena</a></li>
          <li><a href="/servicio-tecnico-calefon-coquimbo/">Coquimbo</a></li>
          <li><a href="/servicio-tecnico-calefon-san-joaquin-la-serena/">San Joaquín</a></li>
          <li><a href="/servicio-tecnico-calefon-penuelas/">Peñuelas</a></li>
          <li><a href="/servicio-tecnico-calefon-las-companias/">Las Compañías</a></li>
          <li><a href="/servicio-tecnico-calefon-tierras-blancas/">Tierras Blancas</a></li>
          <li><a href="/servicio-tecnico-calefon-ovalle/">Ovalle</a></li>
          <li><a href="/servicio-tecnico-calefon-vicuna/">Vicuña</a></li>
        </ul>
      </div>

      <!-- Región de Valparaíso -->
      <div class="coverage-box">
        <div class="coverage-box-title"><i class="fa-solid fa-location-dot"></i> Región de Valparaíso</div>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 0.75rem;">Zona costera y ciudades del interior:</p>
        <ul class="coverage-list">
          <li><a href="/servicio-tecnico-calefon-vina-del-mar/">Viña del Mar</a></li>
          <li><a href="/servicio-tecnico-calefon-valparaiso/">Valparaíso</a></li>
          <li><a href="/servicio-tecnico-calefon-concon/">Concón</a></li>
          <li><a href="/servicio-tecnico-calefon-renaca/">Reñaca</a></li>
          <li><a href="/servicio-tecnico-calefon-quilpue/">Quilpué</a></li>
          <li><a href="/servicio-tecnico-calefon-villa-alemana/">Villa Alemana</a></li>
          <li><a href="/servicio-tecnico-calefon-quillota/">Quillota</a></li>
          <li><a href="/servicio-tecnico-calefon-la-calera/">La Calera</a></li>
          <li><a href="/servicio-tecnico-calefon-san-antonio/">San Antonio</a></li>
          <li><a href="/servicio-tecnico-calefon-los-andes/">Los Andes</a></li>
          <li><a href="/servicio-tecnico-calefon-san-felipe/">San Felipe</a></li>
        </ul>
      </div>

      <!-- Otras Regiones de Chile -->
      <div class="coverage-box">
        <div class="coverage-box-title"><i class="fa-solid fa-location-dot"></i> Cobertura Nacional</div>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 0.75rem;">Red de asistencia técnica autorizada:</p>
        <ul class="coverage-list">
          <li><a href="/servicio-tecnico-calefon-antofagasta/">Antofagasta</a></li>
          <li><a href="/servicio-tecnico-calefon-iquique/">Iquique</a></li>
          <li><a href="/servicio-tecnico-calefon-arica/">Arica</a></li>
          <li><a href="/servicio-tecnico-calefon-copiapo/">Copiapó</a></li>
          <li><a href="/servicio-tecnico-calefon-rancagua/">Rancagua</a></li>
          <li><a href="/servicio-tecnico-calefon-talca/">Talca</a></li>
          <li><a href="/servicio-tecnico-calefon-curico/">Curicó</a></li>
          <li><a href="/servicio-tecnico-calefon-chillan/">Chillán</a></li>
          <li><a href="/servicio-tecnico-calefon-concepcion/">Concepción</a></li>
          <li><a href="/servicio-tecnico-calefon-los-angeles/">Los Ángeles</a></li>
          <li><a href="/servicio-tecnico-calefon-temuco/">Temuco</a></li>
          <li><a href="/servicio-tecnico-calefon-valdivia/">Valdivia</a></li>
          <li><a href="/servicio-tecnico-calefon-osorno/">Osorno</a></li>
          <li><a href="/servicio-tecnico-calefon-puerto-montt/">Puerto Montt</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SOCIAL SHARING SECTION (SEO & Social Reach)
     ========================================================================== -->
<section class="social-share-section" style="padding: 2.25rem 0; background: linear-gradient(180deg, rgba(15,23,42,0.6) 0%, rgba(10,17,32,0.95) 100%); border-top: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06);">
  <div class="container" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 1.25rem;">
    <div style="display: flex; align-items: center; gap: 0.85rem;">
      <div style="width: 44px; height: 44px; border-radius: 50%; background: rgba(255, 107, 0, 0.15); display: flex; align-items: center; justify-content: center; color: var(--color-flame); font-size: 1.2rem;">
        <i class="fa-solid fa-share-nodes"></i>
      </div>
      <div>
        <div style="font-family: var(--font-heading); font-weight: 800; color: #fff; font-size: 1.05rem;">¿Te fue útil esta información sobre calefones?</div>
        <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Comparte este servicio técnico autorizado SEC con tus familiares y amigos:</p>
      </div>
    </div>

    <div class="social-share-buttons" style="display: flex; gap: 0.6rem; flex-wrap: wrap; align-items: center;">
      <a href="https://api.whatsapp.com/send?text=Servicio%20T%C3%A9cnico%20de%20Calefones%20SEC%20a%20domicilio%20en%20Chile%20-%20Central%20Calef%C3%B3n:%20https%3A%2F%2Fcentralcalefon.cl%2F" target="_blank" rel="noopener noreferrer" class="btn-share" title="Compartir en WhatsApp" aria-label="Compartir en WhatsApp" style="background: #25D366; color: #fff; padding: 0.55rem 1rem; border-radius: 8px; font-size: 0.85rem; font-weight: 700; display: inline-flex; align-items: center; gap: 7px; text-decoration: none; box-shadow: 0 4px 12px rgba(37,211,102,0.25);">
        <i class="fa-brands fa-whatsapp fa-lg"></i> WhatsApp
      </a>
      <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fcentralcalefon.cl%2F" target="_blank" rel="noopener noreferrer" class="btn-share" title="Compartir en Facebook" aria-label="Compartir en Facebook" style="background: #1877F2; color: #fff; padding: 0.55rem 1rem; border-radius: 8px; font-size: 0.85rem; font-weight: 700; display: inline-flex; align-items: center; gap: 7px; text-decoration: none; box-shadow: 0 4px 12px rgba(24,119,242,0.25);">
        <i class="fa-brands fa-facebook fa-lg"></i> Facebook
      </a>
      <a href="https://twitter.com/intent/tweet?text=Servicio%20T%C3%A9cnico%20de%20Calefones%20SEC%20a%20domicilio%20en%20Chile%20-%20Central%20Calef%C3%B3n&url=https%3A%2F%2Fcentralcalefon.cl%2F" target="_blank" rel="noopener noreferrer" class="btn-share" title="Compartir en X" aria-label="Compartir en X" style="background: #000000; color: #fff; padding: 0.55rem 1rem; border-radius: 8px; font-size: 0.85rem; font-weight: 700; display: inline-flex; align-items: center; gap: 7px; text-decoration: none; border: 1px solid rgba(255,255,255,0.2);">
        <i class="fa-brands fa-x-twitter fa-lg"></i> X (Twitter)
      </a>
      <a href="https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Fcentralcalefon.cl%2F" target="_blank" rel="noopener noreferrer" class="btn-share" title="Compartir en LinkedIn" aria-label="Compartir en LinkedIn" style="background: #0A66C2; color: #fff; padding: 0.55rem 1rem; border-radius: 8px; font-size: 0.85rem; font-weight: 700; display: inline-flex; align-items: center; gap: 7px; text-decoration: none; box-shadow: 0 4px 12px rgba(10,102,194,0.25);">
        <i class="fa-brands fa-linkedin fa-lg"></i> LinkedIn
      </a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
