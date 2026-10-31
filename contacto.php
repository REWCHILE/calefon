<?php
// contacto.php
$pageTitle = "Contacto Central Calefón | Gasfíter Autorizado SEC Chile a Domicilio";
$pageDescription = "Solicita técnico a domicilio para reparación, mantención o instalación de calefón en Chile. Atención directa por WhatsApp al +56 9 3223 7072 sin esperas ni registros.";
$currentPage = 'contacto';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Header de Página Contacto -->
<section style="background: radial-gradient(circle at 80% 20%, #1e293b 0%, #0f172a 60%, #020617 100%); color: #fff; padding: 4rem 0 3rem 0; border-bottom: 3px solid var(--color-flame);">
  <div class="container text-center">
    <span class="section-tag" style="color: #ff8c42;">Contacto Directo 24/7</span>
    <h1 style="font-family: var(--font-heading); font-size: 2.75rem; font-weight: 800; line-height: 1.2; margin-bottom: 1rem;">
      Solicita Tu Técnico Gasfíter a Domicilio
    </h1>
    <p style="font-size: 1.15rem; color: #cbd5e1; max-width: 680px; margin: 0 auto;">
      Coordinación rápida y sin intermediarios. Escríbenos directamente a nuestro WhatsApp oficial o llámanos para atención de urgencia.
    </p>
  </div>
</section>

<!-- Sección Principal de Contacto con Formulario Directo a WhatsApp -->
<section style="padding: 5rem 0; background: #ffffff;">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 3.5rem;">
      <!-- Tarjetas de Información de Contacto -->
      <div>
        <span class="section-tag">Canales Oficiales</span>
        <h2 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 800; color: var(--color-primary); margin-bottom: 1.5rem;">
          Estamos para Ayudarte
        </h2>
        <p style="color: #64748b; font-size: 1rem; line-height: 1.6; margin-bottom: 2rem;">
          Nuestros móviles se desplazan por la Región Metropolitana, Región de Coquimbo, Valparaíso y principales ciudades de Chile con repuestos en mano.
        </p>

        <!-- Tarjeta Teléfono -->
        <div style="display: flex; align-items: flex-start; gap: 1.25rem; background: var(--color-bg-light); border: 1px solid var(--color-border); padding: 1.5rem; border-radius: var(--radius-md); margin-bottom: 1.25rem;">
          <div style="width: 50px; height: 50px; border-radius: 50%; background: #fee2e2; color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; flex-shrink: 0;">
            <i class="fa-solid fa-phone-volume"></i>
          </div>
          <div>
            <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); margin-bottom: 0.25rem;">Llamada de Emergencia</h3>
            <p style="font-size: 0.85rem; color: #64748b; margin-bottom: 0.5rem;">Atención telefónica directa con técnico disponible:</p>
            <a href="tel:+56932237072" style="font-size: 1.3rem; font-weight: 800; color: #dc2626;">+56 9 3223 7072</a>
          </div>
        </div>

        <!-- Tarjeta WhatsApp -->
        <div style="display: flex; align-items: flex-start; gap: 1.25rem; background: var(--color-bg-light); border: 1px solid var(--color-border); padding: 1.5rem; border-radius: var(--radius-md); margin-bottom: 1.25rem;">
          <div style="width: 50px; height: 50px; border-radius: 50%; background: #dcfce7; color: #16a34a; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0;">
            <i class="fa-brands fa-whatsapp"></i>
          </div>
          <div>
            <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); margin-bottom: 0.25rem;">WhatsApp Oficial</h3>
            <p style="font-size: 0.85rem; color: #64748b; margin-bottom: 0.5rem;">Envía fotos, video de la falla o tu ubicación:</p>
            <a href="https://wa.me/56932237072?text=Hola%20Central%20Calef%C3%B3n,%20necesito%20asistencia%20t%C3%A9cnica" target="_blank" style="font-size: 1.2rem; font-weight: 800; color: #16a34a;">Abrir Chat de WhatsApp</a>
          </div>
        </div>

        <!-- Tarjeta Certificación SEC -->
        <div style="display: flex; align-items: flex-start; gap: 1.25rem; background: var(--color-bg-light); border: 1px solid var(--color-border); padding: 1.5rem; border-radius: var(--radius-md);">
          <div style="width: 50px; height: 50px; border-radius: 50%; background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; flex-shrink: 0;">
            <i class="fa-solid fa-id-badge"></i>
          </div>
          <div>
            <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); margin-bottom: 0.25rem;">Técnico Responsable SEC</h3>
            <p style="font-size: 0.85rem; color: #64748b;">
              <strong>Domingo Isaín Plaza Caamaño</strong><br>
              RUT: 12.738.961-6<br>
              Instalador de Gas Autorizado SEC Clase 3
            </p>
          </div>
        </div>
      </div>

      <!-- Formulario Directo a WhatsApp -->
      <div>
        <div class="form-box" style="border: 2px solid var(--color-border); box-shadow: var(--shadow-xl);">
          <h3>Formulario de Coordinación Rápida</h3>
          <p>Los datos ingresados se envían directamente a WhatsApp para agendar tu visita.</p>

          <form class="direct-whatsapp-form" id="contactPageForm">
            <div class="form-group">
              <label class="form-label" for="contactNombre">Nombre y Apellido *</label>
              <input type="text" id="contactNombre" name="nombre" class="form-control" placeholder="Ej: Juan Pérez" required>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="contactTelefono">Teléfono de Contacto</label>
                <input type="tel" id="contactTelefono" name="telefono" class="form-control" placeholder="+56 9 8765 4321">
              </div>
              <div class="form-group">
                <label class="form-label" for="contactComuna">Comuna / Ciudad *</label>
                <input type="text" id="contactComuna" name="comuna" class="form-control" placeholder="Ej: La Florida, La Serena..." required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="contactMarca">Marca de Calefón</label>
                <select id="contactMarca" name="marca" class="form-control">
                  <option value="Junkers">Junkers (Bosch)</option>
                  <option value="Splendid">Splendid</option>
                  <option value="Mademsa">Mademsa</option>
                  <option value="Neckar">Neckar</option>
                  <option value="Rheem">Rheem</option>
                  <option value="Ursus Trotter">Ursus Trotter</option>
                  <option value="Bosch">Bosch</option>
                  <option value="Rinnai">Rinnai</option>
                  <option value="Anwo">Anwo</option>
                  <option value="Beretta">Beretta</option>
                  <option value="Vaillant">Vaillant</option>
                  <option value="Fensa">Fensa</option>
                  <option value="Sindelen">Sindelen</option>
                  <option value="Albin Trotter">Albin Trotter</option>
                  <option value="Teka">Teka</option>
                  <option value="Midea">Midea</option>
                  <option value="Haier">Haier</option>
                  <option value="Otra">Otra Marca</option>
                </select>
              </div>

              <div class="form-group">
                <label class="form-label" for="contactServicio">Tipo de Requerimiento</label>
                <select id="contactServicio" name="servicio" class="form-control">
                  <option value="Reparación Urgente">Reparación Urgente (No funciona)</option>
                  <option value="Mantención Preventiva">Mantención y Limpieza de Sarro</option>
                  <option value="Instalación SEC">Instalación Nueva Certificada</option>
                  <option value="Fuga de Gas">Olor a Gas / Fuga Urgente</option>
                  <option value="Caldera / Termo">Caldera Mural / Termo Eléctrico</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="contactUrgencia">Urgencia</label>
              <select id="contactUrgencia" name="urgencia" class="form-control">
                <option value="Urgente - Lo antes posible">🚨 Urgente - Lo antes posible</option>
                <option value="Para hoy en la tarde">Para hoy en la tarde</option>
                <option value="Para coordinar día específico">Para coordinar día específico</option>
              </select>
            </div>

            <div class="form-group">
              <label class="form-label" for="contactDetalle">Detalle o síntoma de la falla</label>
              <textarea id="contactDetalle" name="mensaje" rows="3" class="form-control" placeholder="Describe brevemente qué le ocurre a tu calefón..."></textarea>
            </div>

            <button type="submit" class="btn btn-whatsapp btn-lg" style="width: 100%;">
              <i class="fa-brands fa-whatsapp fa-xl"></i>
              <span>Enviar a WhatsApp Directo</span>
            </button>

            <div class="form-notice-direct">
              <i class="fa-solid fa-lock"></i>
              <span>Transmisión directa a WhatsApp. 100% privado y sin registros en servidor.</span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
