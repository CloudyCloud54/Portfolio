(function () {
    'use strict';

    // Thème clair / sombre
    var root = document.documentElement;
    var toggle = document.getElementById('theme-toggle');
    if (toggle) {
        toggle.addEventListener('click', function () {
            var current = root.dataset.theme ||
                (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            var next = current === 'dark' ? 'light' : 'dark';
            root.dataset.theme = next;
            try { localStorage.setItem('theme', next); } catch (e) {}
        });
    }

    // Menu mobile
    var burger = document.getElementById('burger');
    var menu = document.getElementById('menu');
    if (burger && menu) {
        burger.addEventListener('click', function () {
            var open = menu.classList.toggle('is-open');
            burger.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
        menu.addEventListener('click', function (e) {
            if (e.target.tagName === 'A') {
                menu.classList.remove('is-open');
                burger.setAttribute('aria-expanded', 'false');
            }
        });
    }

    // Apparition au scroll
    var targets = document.querySelectorAll('.section__title, .card, .timeline li, .stats li, .about__text');
    targets.forEach(function (el) { el.classList.add('reveal'); });
    if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        targets.forEach(function (el) { io.observe(el); });
    } else {
        targets.forEach(function (el) { el.classList.add('is-visible'); });
    }

    // Lien actif dans le menu
    var links = document.querySelectorAll('.nav__links a');
    var sections = [];
    links.forEach(function (a) {
        var s = document.querySelector(a.getAttribute('href'));
        if (s) { sections.push({ link: a, el: s }); }
    });
    window.addEventListener('scroll', function () {
        var y = window.scrollY + 120;
        var active = null;
        sections.forEach(function (s) { if (s.el.offsetTop <= y) { active = s; } });
        links.forEach(function (a) { a.classList.remove('is-active'); });
        if (active) { active.link.classList.add('is-active'); }
    }, { passive: true });
})();
