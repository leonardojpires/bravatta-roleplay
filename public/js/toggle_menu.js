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
            
            feather.replace();
        });
    }
})