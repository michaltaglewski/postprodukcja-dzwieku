(function () {
  const toggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.site-nav');

  if (toggle && nav) {
    const close = () => {
      nav.classList.remove('open');
      document.body.classList.remove('menu-open');
      toggle.setAttribute('aria-expanded', 'false');
    };

    toggle.addEventListener('click', () => {
      const isOpen = nav.classList.toggle('open');
      document.body.classList.toggle('menu-open', isOpen);
      toggle.setAttribute('aria-expanded', String(isOpen));
    });

    nav.querySelectorAll('a').forEach((link) => link.addEventListener('click', close));
  }

  // Modal logic
  const modalTriggers = document.querySelectorAll('[data-toggle="modal"]');
  modalTriggers.forEach(trigger => {
    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      const targetSelector = trigger.getAttribute('data-target');
      const modal = document.querySelector(targetSelector);
      if (modal) {
        modal.classList.add('open');
        document.body.classList.add('modal-open');
      }
    });
  });

  const modalCloseButtons = document.querySelectorAll('[data-close]');
  modalCloseButtons.forEach(button => {
    button.addEventListener('click', () => {
      const modal = button.closest('.modal');
      if (modal) {
        modal.classList.remove('open');
        document.body.classList.remove('modal-open');
      }
    });
  });

  function initStatementCarousel() {
    const tracks = document.querySelectorAll('.statement-track');

    tracks.forEach(track => {
      const originalSpans = Array.from(track.querySelectorAll('span'));
      if (originalSpans.length === 0) return;

      // Clone elements for seamless loop
      // We need enough clones to cover the view and allow jumping back
      originalSpans.forEach(span => {
        const clone = span.cloneNode(true);
        track.appendChild(clone);
      });
      originalSpans.forEach(span => {
        const clone = span.cloneNode(true);
        track.appendChild(clone);
      });

      let currentIndex = originalSpans.length; // Start at the first element of the second set
      const interval = 8000; // 8 seconds
      
      track.style.transition = 'transform 0.6s ease-in-out';

      function updateCarousel(immediate = false) {
        if (immediate) {
          track.style.transition = 'none';
        } else {
          track.style.transition = 'transform 0.6s ease-in-out';
        }

        const spans = track.querySelectorAll('span');
        const targetSpan = spans[currentIndex];
        
        // Calculate position to center the targetSpan
        const trackParent = track.parentElement;
        const parentWidth = trackParent.offsetWidth;
        const spanOffsetLeft = targetSpan.offsetLeft;
        const spanWidth = targetSpan.offsetWidth;
        
        const targetTranslate = (parentWidth / 2) - (spanOffsetLeft + spanWidth / 2);
        
        track.style.transform = `translateX(${targetTranslate}px)`;

        // Update .middle class
        spans.forEach((span, index) => {
          if (index === currentIndex) {
            span.classList.add('middle');
          } else {
            span.classList.remove('middle');
          }
        });

        if (immediate) {
          // Force reflow
          track.offsetHeight;
        }
      }

      function next() {
        currentIndex++;
        updateCarousel();

        // If we reached the end of the second set, jump back to the first set equivalent
        if (currentIndex >= originalSpans.length * 2) {
          setTimeout(() => {
            currentIndex = originalSpans.length;
            updateCarousel(true);
          }, 600); // Wait for transition to finish
        }
      }

      // Initial position
      if (document.readyState === 'complete') {
        updateCarousel(true);
        setInterval(next, interval);
      } else {
        window.addEventListener('load', () => {
          updateCarousel(true);
          setInterval(next, interval);
        });
      }

      // Handle resize to recalculate positions
      window.addEventListener('resize', () => {
        updateCarousel(true);
      });
    });
  }

  initStatementCarousel();

  jQuery('.split-carousel').each(function () {
    jQuery(this).owlCarousel({
      items: 1,
      loop: false,
      margin: 0,
      nav: true,
      dots: false,
      autoHeight: true,
      smartSpeed: 500,
      navText: [
        `<img src="${ppdTheme.previousArrowUrl}" alt="" aria-hidden="true"><span class="screen-reader-text">Poprzedni slajd</span>`,
        `<img src="${ppdTheme.nextArrowUrl}" alt="" aria-hidden="true"><span class="screen-reader-text">Następny slajd</span>`,
      ],
    });
  });
})();
