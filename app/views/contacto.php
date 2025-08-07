<?php 
    session_start();
/*     var_dump($_SESSION);
    exit; */
?>

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

    <header class="navbar-section z-1000">
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
                <h1 class="text-3xl md:text-4xl text-center leading-[50px] font-heading font-semibold text-[var(--color-primary)] mb-5 md:max-w-[75%]">Contacta os Nossos Desenvolvedores</h1>
                <p class="text-base text-[var(--color-contrast)] font-body text-center mb-5 md:max-w-[75%]">Se houver algo que queiras dizer, envia a tua mensagem para que a nossa equipa de moderação possa te ajudar!</p>
            </div>
        </section>

        <section class="mt-15 mb-15">
            <div class="max-w-[720px] mx-auto">
                <div class="card flex flex-col !py-10">
                    <h3 class="h3 font-body">Envia a tua mensagem</h3>
                    <form action="" class="flex flex-col gap-5">
                        <div class="flex flex-col gap-2">
                            <label for="nome" class="input-label !text-[var(--color-background)]">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="John Doe" class="input" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
                            <label for="nickname" class="input-label !text-[var(--color-background)]">Nickname</label>
                            <input type="text" name="nickname" id="nickname" placeholder="thejohndoe" class="input" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
                            <label for="email" class="input-label !text-[var(--color-background)]">E-Mail</label>
                            <input type="email" name="email" id="email" placeholder="johndoe1234@dominio.com" class="input" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
                            <label for="mensagem" class="input-label !text-[var(--color-background)]">A tua mensagem</label>
                            <textarea name="mensagem" id="mensagem" placeholder="O Bravatta é o melhor RP!" class="input" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;"></textarea>
                        </div>

                        <input type="submit" value="Enviar" class="input-submit !w-50 px-6">
                    </form>
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