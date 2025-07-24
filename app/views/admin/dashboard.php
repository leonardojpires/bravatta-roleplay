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
<body class="!bg-gradient-to-br from-[#0D1B24] to-[#1F3A4B]">

    <header class="navbar-section Z-1000">
        <nav class="navbar font-heading">

        <?php 
            if (isset($_SESSION['admin']) && $_SESSION['admin']['role'] === 'admin') {
                require_once __DIR__ . '/admin_navbar.php';
            }
        ?>

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

    <main class="main-section pt-48 max-w-[720px] px-5 py-20 mx-auto flex flex-col items-center">

        <h1 class="text-5xl text-[var(--color-primary)] font-heading mb-5">Dashboard</h1>

        <section>
            <div class="flex flex-col backdrop-blur-md bg-white/10 border border-white/30 rounded-2xl p-8 w-full max-w-md shadow-[0_8px_32px_0_rgba(31,38,135,0.37)]">
                <h2 class="text-2xl text-[var(--color-text-light)] font-body text-center mb-3">Criar um novo publisher</h2>
                <form action="/admin/create-publisher" method="POST">
                    <input type="submit" name="submit" value="Gerar um novo publisher" class="w-full bg-[var(--color-primary)] hover:bg-[var(--color-heading)] text-[var(--color-text-light)] font-body py-2 rounded-lg transition-colors shadow-md cursor-pointer">
                </form>
            </div>
        </section>

    </main>

</body>
<script src="./js/toggle_menu.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const rellax = new Rellax('[data-rellax-speed]');
    });
</script>
</html>