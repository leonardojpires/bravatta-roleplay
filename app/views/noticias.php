<?php

$pdo = new PDO('mysql:host=localhost;dbname=bravatta', 'root', 'root');
$stmt = $pdo->query("SELECT * FROM news ORDER BY published_at DESC");
$newsList = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

        <section class="max-w-[720px] mx-auto mt-15 px-3">

        <!-- NEWS -->
            <?php foreach($newsList as $news): ?>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div class="flex justify-center items-center">
                        <img src="<?= htmlspecialchars($news['image_path']) ?>" alt="<?= htmlspecialchars($news['title']) ?>">
                    </div>
                    <div class="flex flex-col items-center md:items-start">
                        <h2 class="text-3xl text-[var(--color-secondary)] text-center font-heading mb-3 md:text-left"><?= htmlspecialchars($news['title']) ?></h2>
                        <p class="text-justify mb-5"><?= htmlspecialchars($news['description']) ?></p>
                        <div class="flex gap-2 mb-5">
                            <i data-feather="users" class="w-6 h-6 text-[var(--color-primary)]"></i>
                            <span class="text-[var(--color-accent)] font-body"><?= htmlspecialchars($news['published_at']) ?></span>
                        </div>

                        <!-- DELETE NEWS BUTTON -->
                        <?php if (isset($_SESSION['admin']) && $_SESSION['admin']['role'] === 'admin' || $_SESSION['admin']['role'] === 'publisher'): ?>

                            <button class="open-delete-modal px-4 py-2 bg-[var(--color-secondary)] hover:bg-[var(--color-heading)] text-[var(--color-text-light)] transition rounded-lg cursor-pointer" data-id="<?= $news['id']; ?>">Apagar notícia</button>

                        <?php endif; ?>

                    </div>
                </div>

            <?php endforeach; ?>

        </section>

    </main>

    <?php require_once __DIR__ . '/admin/modals/delete_news.php' ?>

    <!-- FOOTER SECTION -->
    <?php require_once __DIR__ . "/components/footer.php"; ?>

</body>
<script src="./js/toggle_menu.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const rellax = new Rellax('[data-rellax-speed]');

        const deleteButtons = document.querySelectorAll('.open-delete-modal');
        const deleteModal = document.getElementById('deleteNewsModal');
        const closeModalButton = document.getElementById('closeNewsModal');
        const hiddenInput = document.getElementById('delete-news-id');
        
        deleteButtons.forEach(button => {
            button.addEventListener('click', () => {
                const newsId = button.getAttribute('data-id');
                hiddenInput.value = newsId;
                deleteModal.classList.remove('hidden');
            });
        });

        closeModalButton.addEventListener('click', () => {
            deleteModal.classList.add('hidden');
        });

    });
    
</script>
</html>