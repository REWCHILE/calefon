<?php
// nosotros.php
$pageTitle = "Sobre Nosotros | Central Calefón - Gasfíter Autorizado SEC Chile";
$pageDescription = "Conoce a nuestro equipo técnico liderado por Domingo Isaín Plaza Caamaño, instalador de gas y gasfíter certificado por la SEC (RUT: 12.738.961-6). Seguridad, experiencia multimarca y garantía en todo Chile.";
$currentPage = 'nosotros';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Cabecera de Página Nosotros -->
<section style="background: radial-gradient(circle at 80% 20%, #1e293b 0%, #0f172a 60%, #020617 100%); color: #fff; padding: 4rem 0 3rem 0; border-bottom: 3px solid var(--color-flame);">
  <div class="container text-center">
    <span class="section-tag" style="color: #ff8c42;">Transparencia y Seguridad Oficial</span>
    <h1 style="font-family: var(--font-heading); font-size: 2.75rem; font-weight: 800; line-height: 1.2; margin-bottom: 1rem;">
      Técnicos Certificados por la <span style="color: #38bdf8;">SEC</span> en Chile
    </h1>
    <p style="font-size: 1.15rem; color: #cbd5e1; max-width: 720px; margin: 0 auto;">
      La manipulación de gas y artefactos térmicos exige máxima responsabilidad legal y técnica. En Central Calefón garantizamos trabajos avalados por la Superintendencia de Electricidad y Combustibles.
    </p>
  </div>
</section>

<!-- Sección Perfil Técnico Titular -->
<section style="padding: 5rem 0; background: #ffffff;">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 3.5rem; align-items: center;">
      <!-- Imagen y Credencial Oficial -->
      <div>
        <div style="background: #f8fafc; border: 2px solid var(--color-border); border-radius: var(--radius-lg); padding: 1.5rem; box-shadow: var(--shadow-lg); text-align: center;">
          <img src="imagen-certificado-encargado-domingo-isain-caamaño.jpg" alt="Credencial Oficial Domingo Isaín Plaza Caamaño SEC Gasfíter" style="border-radius: var(--radius-md); box-shadow: var(--shadow-sm); width: 100%; margin-bottom: 1.25rem;">
          
          <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; background: #ffffff; padding: 1rem; border-radius: var(--radius-md); border: 1px dashed var(--color-border);">
            <img src="enlace-sec-qr.png" alt="QR Verificación SEC" style="width: 70px; height: 70px;">
            <div style="text-align: left;">
              <div style="font-weight: 800; color: var(--color-primary); font-size: 0.95rem;">Código QR Oficial SEC</div>
              <div style="font-size: 0.8rem; color: #64748b;">Escanea para comprobar estado activo en el registro nacional de instaladores de gas.</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Texto descriptivo -->
      <div>
        <span class="section-tag">Responsable Técnico Titular</span>
        <h2 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 800; color: var(--color-primary); line-height: 1.2; margin-bottom: 1.25rem;">
          Domingo Isaín Plaza Caamaño
        </h2>
        <div style="display: inline-block; background: #e0f2fe; color: #0369a1; font-weight: 800; font-size: 0.85rem; padding: 0.35rem 0.85rem; border-radius: var(--radius-full); margin-bottom: 1.5rem;">
          RUT: 12.738.961-6 | Instalador Autorizado SEC
        </div>

        <p style="font-size: 1.05rem; color: #475569; line-height: 1.7; margin-bottom: 1.25rem;">
          Con más de 15 años de trayectoria en el rubro de la climatización y gasfitería especializada en Chile, <strong>Domingo Isaín Plaza Caamaño</strong> encabeza el equipo de Central Calefón, brindando a familias y empresas la tranquilidad de un servicio 100% apegado a la normativa vigente.
        </p>

        <p style="font-size: 1rem; color: #64748b; line-height: 1.6; margin-bottom: 2rem;">
          Las fallas en calefones no son solo un inconveniente de confort: una mala combustión o una fuga inaparente de gas licuado o natural representan un riesgo crítico de intoxicación por monóxido de carbono o explosión. Por ello, cada una de nuestras intervenciones incluye chequeo digital de fugas, verificación de tiro y garantía escrita.
        </p>

        <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
          <a href="https://wa.me/56932237072?text=Hola%20Domingo,%20deseo%20coordinar%20una%20visita%20t%C3%A9cnica%20con%20Central%20Calef%C3%B3n" target="_blank" class="btn btn-whatsapp btn-lg">
            <i class="fa-brands fa-whatsapp"></i> Hablar con el Encargado Técnico
          </a>
          <a href="tel:+56932237072" class="btn btn-phone btn-lg">
            <i class="fa-solid fa-phone"></i> Llamar 9 3223 7072
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pilares de Confianza -->
<section style="padding: 5rem 0; background: var(--color-bg-light); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Nuestros Compromisos</span>
      <h2 class="section-title">¿Por Qué Confiar en Central Calefón?</h2>
      <p class="section-subtitle">
        Diseñados para brindarte una experiencia sin riesgos, con respaldo profesional antes, durante y después del servicio:
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.75rem; margin-top: 3rem;">
      <div style="background: #fff; border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm);">
        <div style="width: 48px; height: 48px; border-radius: var(--radius-md); background: #fee2e2; color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 1.25rem;">
          <i class="fa-solid fa-certificate"></i>
        </div>
        <h3 style="font-family: var(--font-heading); font-size: 1.2rem; color: var(--color-primary); margin-bottom: 0.5rem;">Carnet SEC Verificable</h3>
        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6;">
          Técnicos formalmente registrados ante la SEC. No trabajamos con maestros sin certificación ni improvisaciones.
        </p>
      </div>

      <div style="background: #fff; border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm);">
        <div style="width: 48px; height: 48px; border-radius: var(--radius-md); background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 1.25rem;">
          <i class="fa-solid fa-gears"></i>
        </div>
        <h3 style="font-family: var(--font-heading); font-size: 1.2rem; color: var(--color-primary); margin-bottom: 0.5rem;">Repuestos Legítimos</h3>
        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6;">
          Utilizamos diafragmas de silicona reforzada, electroválvulas y serpentines originales para asegurar compatibilidad total.
        </p>
      </div>

      <div style="background: #fff; border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm);">
        <div style="width: 48px; height: 48px; border-radius: var(--radius-md); background: #fef3c7; color: #d97706; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 1.25rem;">
          <i class="fa-solid fa-file-shield"></i>
        </div>
        <h3 style="font-family: var(--font-heading); font-size: 1.2rem; color: var(--color-primary); margin-bottom: 0.5rem;">Garantía por Escrito</h3>
        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6;">
          Entregamos boleta o factura y comprobante de garantía formal que respalda tanto la mano de obra como las piezas reemplazadas.
        </p>
      </div>

      <div style="background: #fff; border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm);">
        <div style="width: 48px; height: 48px; border-radius: var(--radius-md); background: #dcfce7; color: #16a34a; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 1.25rem;">
          <i class="fa-solid fa-clock-rotate-left"></i>
        </div>
        <h3 style="font-family: var(--font-heading); font-size: 1.2rem; color: var(--color-primary); margin-bottom: 0.5rem;">Respuesta en el Día</h3>
        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6;">
          Entendemos que estar sin agua caliente o con problemas en tu calefón es prioritario: atendemos con rápida coordinación en terreno.
        </p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
