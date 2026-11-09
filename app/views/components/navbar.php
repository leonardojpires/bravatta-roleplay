<?php $currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/home', PHP_URL_PATH); ?>
<a class="skip-link" href="#main-content">Saltar para o conteúdo principal</a>
<nav class="site-nav font-body" aria-label="Navegação principal">
    <div class="nav-side">
        <a href="/sobre" class="underline-hover" <?= $currentPath === '/sobre' ? 'aria-current="page"' : '' ?>>Sobre Nós</a>
        <a href="/regras" class="underline-hover" <?= $currentPath === '/regras' ? 'aria-current="page"' : '' ?>>Regras</a>
    </div>
    <a class="nav-logo" href="/home" aria-label="Bravatta — página inicial"><img src="/images/logo/logo.png" alt="Bravatta" width="70" height="70"></a>
    <div class="nav-side">
        <a href="/noticias" class="underline-hover" <?= $currentPath === '/noticias' ? 'aria-current="page"' : '' ?>>Notícias</a>
        <a href="/contacto" class="underline-hover" <?= $currentPath === '/contacto' ? 'aria-current="page"' : '' ?>>Contacto</a>
    </div>
    <button type="button" class="menu-button" id="menu-toggle" aria-label="Abrir menu" aria-controls="mobile-menu" aria-expanded="false"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg></button>
    <div class="mobile-links hidden" id="mobile-menu"><a href="/sobre" <?= $currentPath === '/sobre' ? 'aria-current="page"' : '' ?>>Sobre Nós</a><a href="/regras" <?= $currentPath === '/regras' ? 'aria-current="page"' : '' ?>>Regras</a><a href="/noticias" <?= $currentPath === '/noticias' ? 'aria-current="page"' : '' ?>>Notícias</a><a href="/contacto" <?= $currentPath === '/contacto' ? 'aria-current="page"' : '' ?>>Contacto</a></div>
</nav>
