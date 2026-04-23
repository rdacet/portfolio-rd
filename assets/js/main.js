(function () {
    'use strict';

    /* --- Menu mobile --------------------------------------- */
    const toggle = document.querySelector('.nav-toggle');
    const nav    = document.querySelector('.main-nav');
    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            const open = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', open);
        });
        nav.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', false);
            });
        });
    }
})();
