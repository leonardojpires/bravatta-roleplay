<a class="skip-link" href="#main-content">Saltar para o conteúdo principal</a>
<nav class="navbar font-heading" aria-label="Navegação principal">

    <!-- --- MOBILE MENU --- -->
    <div class="md:hidden">
        <a href="/home" aria-label="Bravatta — página inicial"><img src="/images/logo/logo.png" alt="" width="75" class="cursor-pointer"></a>
    </div>

    <div class="flex flex-col items-end  md:flex-row md:items-center">
        <!-- MOBILE MENU BUTTON -->
        <button type="button" class="md:hidden min-w-11 min-h-11 flex items-center justify-center" id="menu-toggle" aria-label="Abrir menu" aria-controls="mobile-menu" aria-expanded="false">
            <i data-feather="menu" aria-hidden="true" class="w-6 h-6 text-[var(--color-primary)]"></i>
        </button>
            <!-- MOBILE MENU -->
        <div class="hidden flex-col space-y-4 mt-4 md:hidden md:mt-0 text-right" id="mobile-menu">
            <a href="/sobre" class="underline-hover">Sobre Nós</a>
            <a href="/regras" class="underline-hover">Regras</a>
            <a href="/noticias" class="underline-hover">Notícias</a>
            <a href="/contacto" class="underline-hover">Contacto</a>
        </div>
    </div>

    <!-- --- DESKTOP MENU --- -->
    <div class="hidden md:flex md:justify-center md:items-center gap-x-10">
        <div class="flex space-x-8">
            <a href="/sobre" class="underline-hover">Sobre Nós</a>
            <a href="/regras" class="underline-hover">Regras</a>
        </div>
        <div>
        <a href="/home" aria-label="Bravatta — página inicial"><img src="/images/logo/logo.png" alt="" width="75" class="logo-animation"></a>
        </div>
        <div class="flex space-x-8">
            <a href="/noticias" class="underline-hover">Notícias</a>
            <a href="/contacto" class="underline-hover">Contacto</a>
        </div>
    </div>

</nav>
