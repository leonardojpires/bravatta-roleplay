
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/output.css" rel="stylesheet">
<title>Bravatta</title>
<link href="./css/style.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/rellax@1.12.1/rellax.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
</head>
<body>

    <?php 
        require_once __DIR__ . '/admin/admin_navbar.php';
    ?>

    <header class="navbar-section">
        <nav class="navbar font-heading">

            <div class="md:hidden">
                <a href="/home"><img src="./images/logo/logo.png" alt="Bravatta Logo" width="75" class="cursor-pointer"></a>
            </div>

            <div class="flex flex-col items-end  md:flex-row md:items-center">
                <!-- MOBILE MENU BUTTON -->
                <button class="md:hidden" id="menu-toggle">
                    <i data-feather="menu" class="w-6 h-6 text-[var(--color-primary)]"></i>
                </button>
                    <!-- MOBILE MENU -->
                <div class="hidden flex-col space-y-4 mt-4 md:hidden md:mt-0" id="mobile-menu">
                    <a href="/sobre" class="underline-hover">Sobre Nós</a>
                    <a href="/regras" class="underline-hover">Regras</a>
                    <a href="/noticias" class="underline-hover">Notícias</a>
                    <a href="/contacto" class="underline-hover">Contacto</a>
                </div>
            </div>

            <!-- DESKTOP MENU -->
            <div class="hidden md:flex md:justify-center md:items-center gap-x-10">
                <div class="flex space-x-8">
                    <a href="/sobre" class="underline-hover">Sobre Nós</a>
                    <a href="/regras" class="underline-hover">Regras</a>
                </div>
                <div>
                <a href="/home"><img src="./images/logo/logo.png" alt="Bravatta Logo" width="75" class="logo-animation"></a>
                </div>
                <div class="flex space-x-8">
                    <a href="/noticias" class="underline-hover">Notícias</a>
                    <a href="/contacto" class="underline-hover">Contacto</a>
                </div>
            </div>

        </nav>
    </header>

    <main class="main-section">

    <!-- HERO SECTION -->
        <section class="hero-section pt-24">
            <div class="flex flex-col justify-center max-w-[720px] px-5 py-20 mx-auto items-center">
                <h1 class="text-3xl md:text-4xl text-center leading-[50px] font-heading font-semibold text-[var(--color-primary)] mb-5 md:max-w-[75%]">Notícias do Bravatta</h1>
                <p class="text-base text-[var(--color-contrast)] font-body text-center mb-5 md:max-w-[75%]">Fica a par das novidades do nosso RP! Aqui tens acesso às notícias mais recentes do Bravatta, incluíndo atualizações, eventos, novos personagens e muito mais!</p>
            </div>
        </section>

        <section class="max-w-[720px] mx-auto mt-15">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div class="flex justify-center items-center">
                        <img src="https://dummyimage.com/300x300/000/fff" alt="">
                    </div>
                    <div class="flex flex-col items-center md:items-start">
                        <h2 class="text-3xl text-[var(--color-secondary)] text-center font-heading mb-3 md:text-left">Notícia 1</h2>
                        <p class="text-justify mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos possimus ipsam quidem temporibus laboriosam, sit sint consequatur non quod aut hic inventore, facere, laudantium nam? Fugiat maiores amet repudiandae aut?</p>
                        <div class="flex gap-2">
                            <i data-feather="users" class="w-6 h-6 text-[var(--color-primary)]"></i>
                            <span class="text-[var(--color-accent)] font-body">+ 100 jogadores</span>
                        </div>
                    </div>
                </div>
        </section>

    </main>

<!-- FOOTER SECTION -->
    <?php require_once __DIR__ . "/components/footer.php"; ?>

</body>
<script src="./js/toggle_menu.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const rellax = new Rellax('[data-rellax-speed]');
    });
</script>
</html>