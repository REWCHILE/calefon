<?php
// includes/footer.php
?>
  <!-- Footer Principal -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Columna 1: Identidad y Certificación -->
        <div class="footer-col">
          <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
            <img src="logotipo-central-calefon.webp" alt="Central Calefón" style="width: 50px; height: 50px; border-radius: 50%; background: #fff; padding: 2px;">
            <div>
              <h3 style="font-family: var(--font-heading); font-size: 1.2rem; color: #fff; font-weight: 800; line-height: 1;">CENTRAL CALEFÓN</h3>
              <span style="font-size: 0.75rem; color: #ff8c42; font-weight: 700; text-transform: uppercase;">Servicio Técnico Autorizado SEC</span>
            </div>
          </div>
          <p style="font-size: 0.9rem; line-height: 1.6; margin-bottom: 1rem;">
            Especialistas en diagnóstico, reparación, mantención e instalación de calefones multimarca y calderas a domicilio con cobertura nacional en Chile.
          </p>

          <div class="footer-sec-stamp">
            <img src="enlace-sec-qr.png" alt="QR Verificación SEC">
            <div>
              <div style="color: #fff; font-weight: 700; font-size: 0.82rem;">Domingo Isaín Plaza Caamaño</div>
              <div style="font-size: 0.75rem; color: #94a3b8;">RUT: 12.738.961-6</div>
              <div style="font-size: 0.72rem; color: #38bdf8; font-weight: 700;">Instalador Clase 3 SEC Gas</div>
            </div>
          </div>
        </div>

        <!-- Columna 2: Servicios Principales -->
        <div class="footer-col">
          <h4>Servicios Técnicos</h4>
          <ul class="footer-links">
            <li><a href="index.php#servicios"><i class="fa-solid fa-angle-right" style="color: var(--color-flame); margin-right: 5px;"></i> Reparación de Calefones Urgente</a></li>
            <li><a href="index.php#servicios"><i class="fa-solid fa-angle-right" style="color: var(--color-flame); margin-right: 5px;"></i> Mantención Preventiva y Descalcificación</a></li>
            <li><a href="index.php#servicios"><i class="fa-solid fa-angle-right" style="color: var(--color-flame); margin-right: 5px;"></i> Instalación Certificada SEC Norma DS 66</a></li>
            <li><a href="index.php#servicios"><i class="fa-solid fa-angle-right" style="color: var(--color-flame); margin-right: 5px;"></i> Detección y Fugas de Gas GLP/GN</a></li>
            <li><a href="index.php#tipos"><i class="fa-solid fa-angle-right" style="color: var(--color-flame); margin-right: 5px;"></i> Calefones Tiro Forzado &amp; Ionizados</a></li>
            <li><a href="index.php#diagnostico"><i class="fa-solid fa-angle-right" style="color: var(--color-flame); margin-right: 5px;"></i> Diagnóstico Rápido de Averías</a></li>
          </ul>
        </div>

        <!-- Columna 3: Marcas Atendidas -->
        <div class="footer-col">
          <h4>Marcas en Chile</h4>
          <ul class="footer-links">
            <li><a href="index.php#marcas">Junkers (Bosch) &amp; Bosch</a></li>
            <li><a href="index.php#marcas">Splendid &amp; Mademsa</a></li>
            <li><a href="index.php#marcas">Neckar &amp; Rheem</a></li>
            <li><a href="index.php#marcas">Ursus Trotter &amp; Albin Trotter</a></li>
            <li><a href="index.php#marcas">Rinnai, Anwo &amp; Beretta</a></li>
            <li><a href="index.php#marcas">Vaillant, Fensa &amp; Sindelen</a></li>
          </ul>
        </div>

        <!-- Columna 4: Contacto y Cobertura -->
        <div class="footer-col">
          <h4>Atención a Domicilio</h4>
          <p style="font-size: 0.9rem; margin-bottom: 0.75rem;">
            <i class="fa-solid fa-phone" style="color: var(--color-flame); margin-right: 8px;"></i>
            <a href="tel:+56932237072" style="color: #fff; font-weight: 700;">+56 9 3223 7072</a>
          </p>
          <p style="font-size: 0.9rem; margin-bottom: 0.75rem;">
            <i class="fa-brands fa-whatsapp" style="color: var(--color-whatsapp); margin-right: 8px;"></i>
            <a href="https://wa.me/56932237072?text=Hola,%20solicito%20asistencia%20t%C3%A9cnica%20a%20domicilio" target="_blank" style="color: #fff; font-weight: 700;">WhatsApp Directo 24/7</a>
          </p>
          <p style="font-size: 0.85rem; color: #94a3b8; margin-bottom: 0.75rem;">
            <i class="fa-solid fa-map-location-dot" style="color: #38bdf8; margin-right: 8px;"></i>
            Región Metropolitana (Santiago), La Serena, Coquimbo, Valparaíso, Viña del Mar y cobertura nacional.
          </p>
          <div style="margin-top: 1rem;">
            <a href="contacto.php" class="btn btn-flame btn-sm" style="width: 100%;">
              <i class="fa-solid fa-calendar-check"></i> Agendar Visita Técnica
            </a>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          &copy; <?php echo date('Y'); ?> <strong>Central Calefón</strong>. Todos los derechos reservados. Gasfíter autorizado y certificado SEC en Chile.
        </div>
        <div style="display: flex; gap: 1.25rem;">
          <a href="llm.txt" target="_blank" style="color: #64748b; font-size: 0.8rem;">llm.txt</a>
          <a href="full-llm.txt" target="_blank" style="color: #64748b; font-size: 0.8rem;">full-llm.txt</a>
          <a href="nosotros.php" style="color: #94a3b8;">Certificado SEC</a>
          <a href="contacto.php" style="color: #94a3b8;">Contacto</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Botón Flotante WhatsApp -->
  <a href="https://wa.me/56932237072?text=Hola%20Central%20Calefon,%20necesito%20atenci%C3%B3n%20urgente%20para%20mi%20calef%C3%B3n" target="_blank" class="floating-whatsapp-btn" title="Contactar a Técnico SEC por WhatsApp" aria-label="WhatsApp Directo Central Calefón">
    <i class="fa-brands fa-whatsapp"></i>
    <span class="floating-whatsapp-badge">1</span>
  </a>

  <!-- Barra Fija Inferior en Móviles para Conversión Inmediata -->
  <div class="mobile-fixed-bottom-bar" aria-label="Acciones de Contacto Rápido">
    <div class="mobile-bar-grid">
      <a href="tel:+56932237072" class="btn btn-phone btn-sm">
        <i class="fa-solid fa-phone"></i> Llamar 9 3223 7072
      </a>
      <a href="https://wa.me/56932237072?text=Hola,%20solicito%20t%C3%A9cnico%20a%20domicilio%20urgente" target="_blank" class="btn btn-whatsapp btn-sm">
        <i class="fa-brands fa-whatsapp"></i> WhatsApp SEC
      </a>
    </div>
  </div>

  <!-- Scripts -->
  <script src="assets/js/main.js?v=<?php echo file_exists(__DIR__ . '/../assets/js/main.js') ? filemtime(__DIR__ . '/../assets/js/main.js') : '1.2'; ?>"></script>
</body>
</html>
