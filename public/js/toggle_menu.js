document.addEventListener('DOMContentLoaded', () => {
    feather.replace();

    const btn = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    let isOpen = false;

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');

            const icon = btn.querySelector('svg');

            icon.setAttribute('data-feather', isOpen ? 'menu' : 'x');
            isOpen = !isOpen;
            btn.setAttribute('aria-expanded', String(isOpen));
            btn.setAttribute('aria-label', isOpen ? 'Fechar menu' : 'Abrir menu');
            
            feather.replace();
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && isOpen) {
                btn.click();
                btn.focus();
            }
        });
    }
})
