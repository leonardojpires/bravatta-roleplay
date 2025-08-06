<?php 
    session_start();
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

        <?php 
            require_once __DIR__ . '/admin_navbar.php';
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

        <main class="main-section pt-36 max-w-[720px] px-5 py-20 mx-auto flex flex-col items-center">

            <h1 class="text-5xl text-center text-[var(--color-primary)] font-heading mb-10">Publicar uma nova notícia</h1>

            <section class="w-full">
                <div class="flex flex-col backdrop-blur-md bg-white/10 border border-white/30 rounded-2xl p-8 w-full shadow-[0_8px_32px_0_rgba(31,38,135,0.37)]">
                    <form action="/admin/publish-news" method="POST" enctype="multipart/form-data" class="flex flex-col gap-2">
                        <label for="title" class="input-label font-body">Título da Notícia</label>
                        <input type="text" name="title" id="title" class="input font-body">

                        <label for="description" class="input-label font-body">Descrição</label>
                        <textarea name="description" id="description" class="input font-body mb-5"></textarea>

                        <div class="flex items-center gap-4">
                            <label for="image" class="cursor-pointer bg-white/10 hover:bg-white/20 border border-white/30 px-4 py-2 rounded-lg shadow-md transition-all inline-flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12v8m0-8l3 3m-3-3l-3 3M4 8V6a2 2 0 012-2h12a2 2 0 012 2v2" />
                                    </svg>
                                    <span class="text-[var(--color-text-light)] font-body">Escolher Imagem</span>
                                    <span id="file-name" class="text-[var(--color-text-light)] font-body"></span>
                            </label> 
                        </div>
                        <input type="file" name="image_path" id="image" accept="image/*" class="hidden">

                        <input type="submit" value="Publicar" class="input-submit font-body mt-5">
                    </form>
                </div>
            </section>

        </main>

    <?php if (isset($_SESSION['success'])): ?>

        <div id="successAlert" class="fixed left-5 bottom-5 bg-green-500/20 border-2 border-green-700/50 rounded-lg">
            <div class="flex flex-row items-center gap-10 p-5">
                <div class="flex flex-row items-center gap-2">
                    <span class="text-3xl text-transparent" style="text-shadow: 0 0 0 rgb(26, 232, 77)">&#10004;</span>
                    <p class="text-green-200 font-body"><?= $_SESSION['success'] ?? 'Succes Test'; ?></p>
                </div>
                <button id="successClose" class="text-transparent cursor-pointer" style="text-shadow: 0 0 0 rgb(26, 232, 77, 0.5)">&#10006;</button>
            </div>
        </div>

        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>
        
    </body>
    <script src="./js/toggle_menu.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const fileInput = document.getElementById('image');
            const fileNameDisplay = document.getElementById('file-name');

            const successAlert = document.getElementById('successAlert');
            const successClose = document.getElementById('successClose');

            fileInput.addEventListener('change', function() {
                if (fileInput.files.length > 0) {
                    fileNameDisplay.textContent = fileInput.files[0].name;
                } else {
                    fileNameDisplay.textContent = '';
                }
            });

            if (successAlert && successClose) {
                    successClose.addEventListener('click', () => {
                    successAlert.classList.add('hidden');
                });
            }
        });
    </script>
</html>