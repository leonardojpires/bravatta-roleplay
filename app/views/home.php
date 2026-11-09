<!doctype html>
<html lang="pt-PT">
<head>
<?php $pageTitle = 'Início | Bravatta Roleplay'; $pageDescription = 'Descobre o Bravatta Roleplay, conhece a comunidade e explora as possibilidades do nosso RP.'; require __DIR__ . '/components/head.php'; ?>

</head>
<body>

    <?php
        require_once __DIR__ . '/admin/admin_navbar.php';
    ?>

    <header class="navbar-section z-1000">
        <?php require_once __DIR__ . '/components/navbar.php'; ?>
    </header>

    <main id="main-content" class="main-section home-page">

    <!-- HERO SECTION -->
        <section class="hero-section pt-24">
            <div class="hero-wrapper">
                <span class="eyebrow">A tua história começa aqui</span>
                <h1 class="title font-heading">Bem-vindo ao<br><em>Bravatta Roleplay</em></h1>
                <p class="description font-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magni numquam enim! Velit optio doloribus veritatis pariatur atque hic distinctio ipsa neque tempore cum? Alias incidunt reprehenderit ut nulla saepe?</p>
                <div class="hero-actions"><a class="button-primary" href="https://discord.gg/Prmfggjx7Y">Entra na comunidade <span aria-hidden="true">&rarr;</span></a><a class="button-secondary" href="#sobre-bravatta">Explora o Bravatta <span aria-hidden="true">&darr;</span></a></div>
                <div class="player-count"><span class="status-dot" aria-hidden="true"></span>Uma comunidade com +100 jogadores</div>
            </div>
        </section>


    <!-- INFORMATIONS SECTION -->
        <!-- FIRST CARD -->
        <section id="sobre-bravatta" class="mt-15" aria-label="Sobre o Bravatta">
            <div class="card max-w-[720px] mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex flex-col items-center md:items-start">
                        <span class="section-label">01 / A nossa comunidade</span>
                        <h2 class="text-3xl text-[var(--color-secondary)] text-center font-heading mb-3 md:text-left">Um pouco sobre nós</h2>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos possimus ipsam quidem temporibus laboriosam, sit sint consequatur non quod aut hic inventore, facere, laudantium nam? Fugiat maiores amet repudiandae aut?</p>
                        <span class="mt-5"><a href="/sobre" class="text-white bg-[var(--color-heading)] hover:bg-[var(--color-accent)] focus:ring-4 font-body rounded-lg px-5 py-2.5 transition">Descobre mais sobre nós &rarr;</a></span>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="image-placeholder" role="img" aria-label="Espaço reservado para imagem"><svg viewBox="0 0 32 32" fill="none" stroke="currentColor" aria-hidden="true"><rect x="3" y="3" width="26" height="26" rx="3"/><circle cx="11" cy="11" r="3"/><path d="m4 25 8-8 5 5 5-8 7 11"/></svg><span>Imagem em breve</span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECOND CARD -->
        <section class="mt-15">
            <div class="card max-w-[720px] mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="order-2 md:order-1 flex justify-center items-center">
                        <div class="image-placeholder" role="img" aria-label="Espaço reservado para imagem"><svg viewBox="0 0 32 32" fill="none" stroke="currentColor" aria-hidden="true"><rect x="3" y="3" width="26" height="26" rx="3"/><circle cx="11" cy="11" r="3"/><path d="m4 25 8-8 5 5 5-8 7 11"/></svg><span>Imagem em breve</span></div>
                    </div>
                    <div class="order-1 md:order-2 flex flex-col items-center md:items-start">
                        <span class="section-label">02 / A tua próxima aventura</span>
                        <h2 class="text-3xl text-[var(--color-secondary)] text-center font-heading mb-3">Porquê jogar aqui?</h2>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos possimus ipsam quidem temporibus laboriosam, sit sint consequatur non quod aut hic inventore, facere, laudantium nam? Fugiat maiores amet repudiandae aut?</p>
                        <span class="mt-5"><a href="/regras" class="text-white bg-[var(--color-heading)] hover:bg-[var(--color-accent)] focus:ring-4 font-body rounded-lg px-5 py-2.5 transition">Vê as regras &rarr;</a></span>
                    </div>
                </div>
            </div>
        </section>

    <!-- FEATURES SECTION -->
        <section class="features-section !mt-15">
            <div class="max-w-[1200px] mx-auto">
                <div class="features-heading"><span class="section-label">Um mundo de possibilidades</span><h2 class="text-3xl text-[var(--color-secondary)] text-center font-heading mb-5">O que podes fazer?</h2></div>
                <div class="card-divs flex flex-col md:flex-row gap-10">

                    <div class="card flex flex-col !py-10">
                        <div class="image-placeholder" role="img" aria-label="Espaço reservado para imagem"><svg viewBox="0 0 32 32" fill="none" stroke="currentColor" aria-hidden="true"><rect x="3" y="3" width="26" height="26" rx="3"/><circle cx="11" cy="11" r="3"/><path d="m4 25 8-8 5 5 5-8 7 11"/></svg><span>Imagem em breve</span></div>
                        <span class="feature-number" aria-hidden="true">01 /</span><h3 class="h3 font-body">Tópico 1</h3>
                        <p class="font-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae velit expedita veniam esse dolorem error, explicabo distinctio blanditiis nostrum quae facere sequi eum omnis! Saepe dolor laudantium soluta quo.</p>
                    </div>

                    <div class="card flex flex-col !py-10 z-50">
                        <div class="image-placeholder" role="img" aria-label="Espaço reservado para imagem"><svg viewBox="0 0 32 32" fill="none" stroke="currentColor" aria-hidden="true"><rect x="3" y="3" width="26" height="26" rx="3"/><circle cx="11" cy="11" r="3"/><path d="m4 25 8-8 5 5 5-8 7 11"/></svg><span>Imagem em breve</span></div>
                        <span class="feature-number" aria-hidden="true">02 /</span><h3 class="h3 font-body">Tópico 2</h3>
                        <p class="font-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae velit expedita veniam esse dolorem error, explicabo distinctio blanditiis nostrum quae facere sequi eum omnis! Saepe dolor laudantium soluta quo.</p>
                    </div>

                    <div class="card flex flex-col !py-10">
                        <div class="image-placeholder" role="img" aria-label="Espaço reservado para imagem"><svg viewBox="0 0 32 32" fill="none" stroke="currentColor" aria-hidden="true"><rect x="3" y="3" width="26" height="26" rx="3"/><circle cx="11" cy="11" r="3"/><path d="m4 25 8-8 5 5 5-8 7 11"/></svg><span>Imagem em breve</span></div>
                        <span class="feature-number" aria-hidden="true">03 /</span><h3 class="h3 font-body">Tópico 3</h3>
                        <p class="font-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae velit expedita veniam esse dolorem error, explicabo distinctio blanditiis nostrum quae facere sequi eum omnis! Saepe dolor laudantium soluta quo.</p>
                    </div>

                </div>
            </div>
        </section>

    <!-- ACTION SECTION -->
        <section class="action-section mt-15 py-20 px-5">
            <div class="w-full max-w-[720px] mx-auto flex flex-col justify-center items-center">
                <span class="section-label">O próximo capítulo é teu</span><h2 class="text-4xl font-heading mb-5">Junta-te a nós</h2>
                <p class="text-base text-[var(--color-contrast)] font-body text-center mb-5 md:max-w-[75%]">Vem fazer parte da nossa comunidade e aventura-te no nosso RP!</p>
                <a href="https://discord.gg/Prmfggjx7Y" class="text-white bg-[var(--color-heading)] hover:bg-[var(--color-accent)] focus:ring-4 font-body transition rounded-lg px-7 py-4.5">Entra na comunidade &rarr;</a>
            </div>
        </section>

    </main>

<!-- FOOTER SECTION -->
    <?php require_once __DIR__ . "/components/footer.php"; ?>

</body>


</html>
