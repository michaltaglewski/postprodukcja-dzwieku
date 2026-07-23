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
