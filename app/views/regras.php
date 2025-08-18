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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
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
                        <h1 class="text-3xl md:text-4xl text-center leading-[50px] font-heading font-semibold text-[var(--color-primary)] mb-5 md:max-w-[75%]">Todas as Regras do Bravatta</h1>
                        <p class="text-base text-[var(--color-contrast)] font-body text-center mb-5 md:max-w-[75%]">Descobre o que podes e o que não podes fazer!</p>
                    </div>
                </section>

            <div class="max-w-[720px] mx-auto">
                <section class="mt-15 mb-15">
                    <div class="card">
                        <img 
                            src="./images/icons/file.png" 
                            alt="" 
                            class="floating-icons right-[50px] top-[-50px] rotate-[10deg]"
                            data-rellax-speed="1"
                        >
                        <img 
                            src="./images/icons/megaphone.png" 
                            alt="" 
                            class="floating-icons left-[-100px] bottom-[-50px] rotate-[-10deg]"
                            data-rellax-speed="1"
                        >
                        <div class="flex flex-col items-center md:items-start">
                            <div class="mb-10">
                                <h2 class="h2 font-heading text-center">Tópico 1</h2>
                                <p class="ml-5 indent-10 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, consectetur cupiditate velit fugit laudantium cum doloremque praesentium eaque quia eligendi quasi, deleniti magni nostrum exercitationem minus impedit. Nihil, deserunt sit?</p>
                            </div>
                            <div class="mb-10">
                                <h2 class="h2 font-heading text-center">Tópico 2</h2>
                                <p class="rules-p text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, consectetur cupiditate velit fugit laudantium cum doloremque praesentium eaque quia eligendi quasi, deleniti magni nostrum exercitationem minus impedit. Nihil, deserunt sit?</p>
                            </div>
                            <div class="mb-10">
                                <h2 class="h2 font-heading text-center">Tópico 3</h2>
                                <p class="rules-p text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, consectetur cupiditate velit fugit laudantium cum doloremque praesentium eaque quia eligendi quasi, deleniti magni nostrum exercitationem minus impedit. Nihil, deserunt sit?</p>
                            </div>
                            <div class="mb-10">
                                <h2 class="h2 font-heading text-center">Tópico 4</h2>
                                <p class="rules-p text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, consectetur cupiditate velit fugit laudantium cum doloremque praesentium eaque quia eligendi quasi, deleniti magni nostrum exercitationem minus impedit. Nihil, deserunt sit?</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

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