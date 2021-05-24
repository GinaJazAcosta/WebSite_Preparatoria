(function() {
    "use strict";

 /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

window.addEventListener('load', () => {
    let serviciosContainer = select('.servicios-container');
    console.log(serviciosContainer);
    if (serviciosContainer) {
      let serviciosIsotope = new Isotope(serviciosContainer, {
        itemSelector: '.servicios-item',
        layoutMode: 'fitRows'
      });

      let serviciosFilters = select('#servicios-flters li', true);

      on('click', '#servicios-flters li', function(e) {
        e.preventDefault();

        serviciosFilters.forEach(function(el) {
            el.classList.remove('filter-active');
          });
        this.classList.add('filter-active');

        serviciosIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });

      }, true);
    }

  });


  const galleryLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });
})();