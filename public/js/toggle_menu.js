document.addEventListener('DOMContentLoaded', () => {
    if (window.feather) window.feather.replace();
    const button = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    if (!button || !menu) return;
    const setOpen = (open) => {
        menu.classList.toggle('hidden', !open);
        button.setAttribute('aria-expanded', String(open));
        button.setAttribute('aria-label', open ? 'Fechar menu' : 'Abrir menu');
    };
    button.addEventListener('click', () => setOpen(button.getAttribute('aria-expanded') !== 'true'));
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && button.getAttribute('aria-expanded') === 'true') { setOpen(false); button.focus(); }
    });
    document.addEventListener('click', (event) => { if (!event.target.closest('.site-nav')) setOpen(false); });
    window.matchMedia('(min-width: 768px)').addEventListener('change', () => setOpen(false));
});
