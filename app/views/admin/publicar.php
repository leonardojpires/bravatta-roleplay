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
            <?php require_once __DIR__ . '/../components/navbar.php'; ?>
        </header>

        <main class="main-section admin-wrapper">

            <h1 class="admin-title font-heading">Publicar uma nova notícia</h1>

            <section class="w-full">
                <div class="admin-card">
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

        <?php
            $alerts = ['success', 'error'];

            foreach($alerts as $type) {
                if (isset($_SESSION[$type])) {
                    require_once __DIR__ . "/../components/{$type}_alert.php";
                }
            }
        ?>

    </body>
    <script src="./js/toggle_menu.js"></script>
    <script src="./js/alerts.js"></script>
    <script>

        document.addEventListener("DOMContentLoaded", () => {
            const fileInput = document.getElementById('image');
            const fileNameDisplay = document.getElementById('file-name');

            fileInput.addEventListener('change', function() {
                if (fileInput.files.length > 0) {
                    fileNameDisplay.textContent = fileInput.files[0].name;
                } else {
                    fileNameDisplay.textContent = '';
                }
            });
        });

    </script>
</html>