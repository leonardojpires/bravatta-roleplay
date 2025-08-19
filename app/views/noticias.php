<?php

    $pdo = new PDO('mysql:host=localhost;dbname=bravatta', 'root', 'root');
    $sql = "SELECT * FROM news ORDER BY published_at DESC";
    $stmt = $pdo->query($sql);
    $newsList = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
?>

<!doctype html>
<html class="h-full">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/output.css" rel="stylesheet">
    <title>Bravatta</title>
    <link href="./css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/rellax@1.12.1/rellax.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    </head>
    <body class="flex flex-col min-h-screen">

        <?php 
            require_once __DIR__ . '/admin/admin_navbar.php';
        ?>

        <header class="navbar-section z-1000">
            <?php require_once __DIR__ . '/components/navbar.php'; ?>
        </header>

        <div class="flex-grow">
            <main class="main-section">
            <!-- HERO SECTION -->
                <section class="hero-section pt-24">
                    <div class="hero-wrapper">
                        <h1 class="title font-heading">Notícias do Bravatta</h1>
                        <p class="description font-body">Fica a par das novidades do nosso RP! Aqui tens acesso às notícias mais recentes do Bravatta, incluíndo atualizações, eventos, novos personagens e muito mais!</p>
                    </div>
                </section>
                
                <section class="max-w-[720px] mx-auto mt-15 px-3">
                <!-- NEWS -->
                    <?php foreach($newsList as $news): ?>
                        <?php $excerpt = mb_strimwidth($news['description'], 0, 50, '...'); ?>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                            <div class="flex justify-center items-center">
                                <img src="<?= htmlspecialchars($news['image_path']) ?>" alt="<?= htmlspecialchars($news['title']) ?>">
                            </div>
                            <div class="flex flex-col items-center md:items-start">
                                <a href="/noticia/<?= $news['id'] ?>">
                                    <h2 class="h2 font-heading break-all"><?= htmlspecialchars($news['title']) ?></h2>
                                    <p class="text-justify mb-5"><?= htmlspecialchars($excerpt) ?></p>
                                    <div class="flex gap-2 mb-5">
                                        <i data-feather="clock" class="w-6 h-6 text-[var(--color-primary)]"></i>
                                        <span class="text-[var(--color-accent)] font-body"><?= htmlspecialchars($news['published_at']) ?></span>
                                    </div>
                                </a>

                                <!-- DELETE NEWS BUTTON -->
                                <?php if (isset($_SESSION['admin']) && $_SESSION['admin']['role'] === 'admin' || $_SESSION['admin']['role'] === 'publisher'): ?>
                                    <button class="open-delete-modal px-4 py-2 bg-[var(--color-secondary)] hover:bg-[var(--color-heading)] text-[var(--color-text-light)] transition rounded-lg cursor-pointer" data-id="<?= $news['id']; ?>">&#x1F5D1; Apagar notícia</button>
                                <?php endif; ?>

                            </div>
                        </div>

                    <?php endforeach; ?>
                </section>
            </main>
        </div>

        <!-- MODAL -->
        <?php require_once __DIR__ . '/admin/modals/delete_news.php' ?>

        <!-- ALERTS -->
        <?php if (isset($_SESSION['admin']) && ($_SESSION['admin']['role'] === 'admin' || $_SESSION['admin']['role'] === 'publisher') && isset($_SESSION['success'])): ?>
            <?php require_once __DIR__ . '/components/success_alert.php' ?>
        <?php endif; ?>

        <!-- FOOTER SECTION -->
        <?php require_once __DIR__ . "/components/footer.php"; ?>

    </body>
    <script src="./js/toggle_menu.js"></script>
    <script src="./js/alerts.js"></script>
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