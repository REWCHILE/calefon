/**
 * Central Calefón - JavaScript Principal
 * Menú móvil deslizante de izquierda a derecha, Formulario WhatsApp sin guardado en BD,
 * Sliders responsivos táctiles para Marcas, Diagnóstico y Servicios, y FAQ Accordion.
 */

document.addEventListener('DOMContentLoaded', () => {
  // Constante número WhatsApp oficial
  const WHATSAPP_PHONE = '56932237072';

  // =========================================================================
  // 1. MENÚ MÓVIL DESLIZANTE DE IZQUIERDA A DERECHA
  // "que se deslice de izquierda a derecha, cuando se cierre de derecha a izquierda se colapsa"
  // =========================================================================
  const hamburgerBtn = document.getElementById('hamburgerBtn');
  const mobileBackdrop = document.getElementById('mobileNavBackdrop');
  const drawerCloseBtn = document.getElementById('drawerCloseBtn');
  const drawerLinks = document.querySelectorAll('.drawer-link');

  function openMobileNav() {
    if (!mobileBackdrop) return;
    mobileBackdrop.classList.add('open');
    document.body.style.overflow = 'hidden';
    if (hamburgerBtn) hamburgerBtn.setAttribute('aria-expanded', 'true');
  }

  function closeMobileNav() {
    if (!mobileBackdrop) return;
    mobileBackdrop.classList.remove('open');
    document.body.style.overflow = '';
    if (hamburgerBtn) hamburgerBtn.setAttribute('aria-expanded', 'false');
  }

  if (hamburgerBtn) {
    hamburgerBtn.addEventListener('click', openMobileNav);
  }

  if (drawerCloseBtn) {
    drawerCloseBtn.addEventListener('click', closeMobileNav);
  }

  if (mobileBackdrop) {
    mobileBackdrop.addEventListener('click', (e) => {
      if (e.target === mobileBackdrop) {
        closeMobileNav();
      }
    });
  }

  drawerLinks.forEach(link => {
    link.addEventListener('click', () => {
      closeMobileNav();
    });
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileBackdrop && mobileBackdrop.classList.contains('open')) {
      closeMobileNav();
    }
  });

  // =========================================================================
  // 2. HEADER SCROLL EFFECT
  // =========================================================================
  const siteHeader = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (!siteHeader) return;
    if (window.scrollY > 30) {
      siteHeader.classList.add('scrolled');
    } else {
      siteHeader.classList.remove('scrolled');
    }
  });

  // =========================================================================
  // 3. MOTOR UNIVERSAL DE SLIDERS RESPONSIVOS
  // "Todo en slider, porfa. Nada en grid. Optimizado para móvil y tablet"
  // =========================================================================
  // =========================================================================
  // 3. MOTOR UNIVERSAL DE SLIDERS RESPONSIVOS CON AUTOPLAY, RESALTE ACTIVO Y PAUSA AL LEER
  // "Necesito que sea autoplay todos. Autoplay y que se entienda cuando un elemento está activo,
  // que se resalte, se agrande, se active... Y lo otro cuando se posa el mouse encima o se esté
  // leyendo encima y se note que esté leyendo se quede pausado."
  // =========================================================================
  function setupResponsiveSlider({
    trackId,
    prevBtnId,
    nextBtnId,
    dotsId = null,
    statusId = null,
    autoScroll = true,
    autoScrollDelay = 3500
  }) {
    const track = document.getElementById(trackId);
    if (!track) return null;

    const prevBtn = prevBtnId ? document.getElementById(prevBtnId) : null;
    const nextBtn = nextBtnId ? document.getElementById(nextBtnId) : null;
    const dotsContainer = dotsId ? document.getElementById(dotsId) : null;
    const statusPill = statusId ? document.getElementById(statusId) : null;
    const sliderContainer = track.closest('.custom-slider-container') || track.parentElement;

    const items = Array.from(track.children);
    const totalItems = items.length;
    if (totalItems === 0) return null;

    let currentIndex = 0;
    let autoScrollTimer = null;
    let resumeTimeout = null;

    // Actualizar indicador visual de estado (Autoplay vs Pausado para lectura)
    function updateStatusIndicator(paused) {
      if (!statusPill) return;
      const label = statusPill.querySelector('.status-label');
      if (paused) {
        statusPill.classList.remove('playing');
        statusPill.classList.add('paused');
        if (label) label.textContent = 'Pausado para lectura';
      } else {
        statusPill.classList.remove('paused');
        statusPill.classList.add('playing');
        if (label) label.textContent = 'Autoplay activo';
      }
    }

    // Centrar y activar elemento por índice (se agranda, resalta y activa)
    function setActiveItem(index, doScroll = true) {
      if (index < 0) index = 0;
      if (index >= totalItems) index = totalItems - 1;
      currentIndex = index;

      items.forEach((item, i) => {
        if (i === currentIndex) {
          item.classList.add('is-active');
        } else {
          item.classList.remove('is-active');
        }
      });

      // Actualizar dots si existen
      if (dotsContainer) {
        const dots = dotsContainer.querySelectorAll('.slider-dot');
        dots.forEach((dot, i) => {
          if (i === currentIndex) {
            dot.classList.add('active');
          } else {
            dot.classList.remove('active');
          }
        });
      }

      // Desplazamiento suave para centrar la tarjeta activa en el visor
      if (doScroll) {
        const activeCard = items[currentIndex];
        if (activeCard) {
          const cardLeft = activeCard.offsetLeft - track.offsetLeft;
          const targetScroll = cardLeft - (track.clientWidth - activeCard.clientWidth) / 2;
          track.scrollTo({ left: Math.max(0, targetScroll), behavior: 'smooth' });
        }
      }
    }

    // Inicializar primer elemento como activo
    setActiveItem(0, false);

    // Navegación con flechas
    function scrollNext() {
      const nextIdx = (currentIndex + 1) % totalItems;
      setActiveItem(nextIdx, true);
    }

    function scrollPrev() {
      const prevIdx = (currentIndex - 1 + totalItems) % totalItems;
      setActiveItem(prevIdx, true);
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        scrollNext();
        pauseAutoplayTemporary(4500);
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        scrollPrev();
        pauseAutoplayTemporary(4500);
      });
    }

    // Paginación por puntos (dots)
    if (dotsContainer) {
      dotsContainer.innerHTML = '';
      for (let i = 0; i < totalItems; i++) {
        const dot = document.createElement('button');
        dot.className = `slider-dot ${i === 0 ? 'active' : ''}`;
        dot.setAttribute('aria-label', `Ir al elemento ${i + 1}`);
        dot.addEventListener('click', () => {
          setActiveItem(i, true);
          pauseAutoplayTemporary(4500);
        });
        dotsContainer.appendChild(dot);
      }
    }

    // Soporte para arrastre con Mouse (Drag to scroll)
    let isDown = false;
    let startX = 0;
    let scrollLeftPos = 0;

    track.addEventListener('mousedown', (e) => {
      isDown = true;
      track.classList.add('dragging');
      startX = e.pageX - track.offsetLeft;
      scrollLeftPos = track.scrollLeft;
      stopAuto(true);
    });

    window.addEventListener('mouseup', () => {
      if (isDown) {
        isDown = false;
        track.classList.remove('dragging');
        startAutoDelayed(2000);
      }
    });

    track.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - track.offsetLeft;
      const walk = (x - startX) * 1.5;
      track.scrollLeft = scrollLeftPos - walk;
    });

    // Detectar tarjeta más cercana al centro durante scroll manual o swipe táctil
    let scrollDebounce;
    track.addEventListener('scroll', () => {
      clearTimeout(scrollDebounce);
      scrollDebounce = setTimeout(() => {
        const trackCenter = track.scrollLeft + (track.clientWidth / 2);
        let closestIndex = currentIndex;
        let minDiff = Infinity;

        items.forEach((item, i) => {
          const itemCenter = (item.offsetLeft - track.offsetLeft) + (item.clientWidth / 2);
          const diff = Math.abs(trackCenter - itemCenter);
          if (diff < minDiff) {
            minDiff = diff;
            closestIndex = i;
          }
        });

        if (closestIndex !== currentIndex) {
          setActiveItem(closestIndex, false);
        }
      }, 70);
    }, { passive: true });

    // Métodos de Autoplay
    function startAuto() {
      if (!autoScroll) return;
      if (autoScrollTimer) clearInterval(autoScrollTimer);
      updateStatusIndicator(false);
      autoScrollTimer = setInterval(() => {
        scrollNext();
      }, autoScrollDelay);
    }

    function stopAuto(userInitiated = false) {
      if (autoScrollTimer) clearInterval(autoScrollTimer);
      autoScrollTimer = null;
      if (resumeTimeout) clearTimeout(resumeTimeout);
      if (userInitiated) {
        updateStatusIndicator(true);
      }
    }

    function startAutoDelayed(delay = 1400) {
      if (!autoScroll) return;
      if (resumeTimeout) clearTimeout(resumeTimeout);
      resumeTimeout = setTimeout(() => {
        startAuto();
      }, delay);
    }

    function pauseAutoplayTemporary(delay = 4500) {
      stopAuto(true);
      startAutoDelayed(delay);
    }

    // Iniciar autoplay si está configurado
    if (autoScroll) {
      startAuto();

      // Pausa suave sólo al mantener el mouse encima, reanuda rápido al salir
      if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', () => {
          stopAuto(false);
        });

        sliderContainer.addEventListener('mouseleave', () => {
          startAutoDelayed(900);
        });
      }

      track.addEventListener('touchstart', () => {
        stopAuto(false);
      }, { passive: true });

      track.addEventListener('touchend', () => {
        startAutoDelayed(1500);
      }, { passive: true });
    }

    return {
      track,
      scrollNext,
      scrollPrev,
      setActiveItem,
      startAuto,
      stopAuto
    };
  }

  // 1. Slider de Diagnóstico Rápido de Averías (Interactivo con Autoplay)
  const diagSlider = setupResponsiveSlider({
    trackId: 'diagSliderTrack',
    prevBtnId: 'diagPrevBtn',
    nextBtnId: 'diagNextBtn',
    dotsId: 'diagSliderDots',
    statusId: 'diagStatus',
    autoScroll: true,
    autoScrollDelay: 4200
  });

  // 2. Buscador interactivo sobre el Marquee Continuo de Marcas
  const brandSearchInput = document.getElementById('brandSearchInput');
  const brandCards = document.querySelectorAll('.brand-slide-card');
  const marqueeTrack = document.getElementById('brandsMarqueeTrack');

  if (brandSearchInput && marqueeTrack) {
    brandSearchInput.addEventListener('input', (e) => {
      const query = e.target.value.toLowerCase().trim();
      let firstMatch = null;

      if (query.length > 0) {
        // Pausar animación durante la búsqueda
        marqueeTrack.style.animationPlayState = 'paused';

        brandCards.forEach(card => {
          const brandName = card.getAttribute('data-brand')?.toLowerCase() || '';
          if (brandName.includes(query)) {
            card.classList.add('highlighted');
            card.style.opacity = '1';
            card.style.transform = 'scale(1.05)';
            if (!firstMatch) firstMatch = card;
          } else {
            card.classList.remove('highlighted');
            card.style.opacity = '0.3';
            card.style.transform = 'scale(0.95)';
          }
        });

        if (firstMatch) {
          firstMatch.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
        }
      } else {
        // Reanudar loop continuo
        marqueeTrack.style.animationPlayState = 'running';
        brandCards.forEach(card => {
          card.classList.remove('highlighted');
          card.style.opacity = '';
          card.style.transform = '';
        });
      }
    });
  }

  // =========================================================================
  // 4. FORMULARIO DIRECTO A WHATSAPP (SIN GUARDADO EN BD)
  // "formulario directo al WhatsApp, no se guarda ningún dato dentro del sistema, solo todo al WhatsApp"
  // =========================================================================
  const whatsappForms = document.querySelectorAll('.direct-whatsapp-form');

  whatsappForms.forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();

      const nombre = form.querySelector('[name="nombre"]')?.value.trim() || 'No especificado';
      const telefono = form.querySelector('[name="telefono"]')?.value.trim() || 'No especificado';
      const comuna = form.querySelector('[name="comuna"]')?.value.trim() || 'No especificada';
      const marca = form.querySelector('[name="marca"]')?.value.trim() || 'No especificada';
      const servicio = form.querySelector('[name="servicio"]')?.value.trim() || 'Cotización General';
      const urgencia = form.querySelector('[name="urgencia"]')?.value.trim() || 'Normal';
      const mensajeExtra = form.querySelector('[name="mensaje"]')?.value.trim() || '';

      if (nombre === 'No especificado' || nombre.length < 2) {
        alert('Por favor ingrese su nombre para coordinar la visita técnica.');
        form.querySelector('[name="nombre"]')?.focus();
        return;
      }

      if (comuna === 'No especificada' || comuna.length < 2) {
        alert('Por favor ingrese su comuna o ciudad para confirmar cobertura.');
        form.querySelector('[name="comuna"]')?.focus();
        return;
      }

      let texto = `*SOLICITUD DE SERVICIO TÉCNICO - CENTRAL CALEFÓN*\n`;
      texto += `------------------------------------\n`;
      texto += `👤 *Cliente:* ${nombre}\n`;
      texto += `📞 *Teléfono:* ${telefono}\n`;
      texto += `📍 *Comuna/Ciudad:* ${comuna}\n`;
      texto += `🔥 *Marca Calefón:* ${marca}\n`;
      texto += `🛠️ *Tipo de Servicio:* ${servicio}\n`;
      texto += `⚡ *Nivel de Urgencia:* ${urgencia}\n`;
      if (mensajeExtra) {
        texto += `📝 *Detalle Falla:* ${mensajeExtra}\n`;
      }
      texto += `------------------------------------\n`;
      texto += `_Solicitud enviada directamente desde centralcalefon.cl_`;

      const whatsappUrl = `https://wa.me/${WHATSAPP_PHONE}?text=${encodeURIComponent(texto)}`;
      window.open(whatsappUrl, '_blank');
    });
  });

  // =========================================================================
  // 5. TROUBLESHOOTER INTERACTIVO: ENVIAR FALLA EXACTA POR WHATSAPP
  // =========================================================================
  const diagnosticBtns = document.querySelectorAll('.btn-diagnostic-trigger');

  diagnosticBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      const issueTitle = btn.getAttribute('data-issue') || 'Falla en Calefón';
      const brand = btn.getAttribute('data-brand') || '';
      
      let msg = `*CONSULTA TÉCNICA URGENTE - CENTRAL CALEFÓN*\n`;
      msg += `Hola, necesito asistencia técnica en mi domicilio.\n`;
      msg += `🚨 *Problema detectado:* ${issueTitle}\n`;
      if (brand) {
        msg += `🔥 *Marca:* ${brand}\n`;
      }
      msg += `¿Tienen disponibilidad de gasfíter autorizado SEC hoy?`;

      const targetUrl = `https://wa.me/${WHATSAPP_PHONE}?text=${encodeURIComponent(msg)}`;
      window.open(targetUrl, '_blank');
    });
  });

  // =========================================================================
  // 6. ACCORDION PREGUNTAS FRECUENTES (FAQ)
  // =========================================================================
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const questionBtn = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');

    if (!questionBtn || !answer) return;

    questionBtn.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      faqItems.forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.classList.remove('active');
          const otherAnswer = otherItem.querySelector('.faq-answer');
          if (otherAnswer) otherAnswer.style.maxHeight = null;
        }
      });

      if (isActive) {
        item.classList.remove('active');
        answer.style.maxHeight = null;
      } else {
        item.classList.add('active');
        answer.style.maxHeight = answer.scrollHeight + 30 + 'px';
      }
    });
  });

  if (faqItems.length > 0) {
    const firstItem = faqItems[0];
    const firstAnswer = firstItem.querySelector('.faq-answer');
    firstItem.classList.add('active');
    if (firstAnswer) {
      firstAnswer.style.maxHeight = firstAnswer.scrollHeight + 30 + 'px';
    }
  }
});
