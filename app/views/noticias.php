<?php

    $pdo = new PDO('mysql:host=localhost;dbname=bravatta', 'root', 'root');
    $sql = "SELECT * FROM news ORDER BY published_at DESC";
    $stmt = $pdo->query($sql);
    $newsList = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="pt-PT">
    <head>
<?php $pageTitle = 'Notícias | Bravatta Roleplay'; $pageDescription = 'Acompanha as novidades, os eventos e as atualizações do Bravatta Roleplay.'; require __DIR__ . '/components/head.php'; ?>

</head>
    <body class="flex flex-col min-h-screen">

        <?php
            require_once __DIR__ . '/admin/admin_navbar.php';
        ?>

        <header class="navbar-section z-1000">
            <?php require_once __DIR__ . '/components/navbar.php'; ?>
        </header>

        <div class="flex-grow">
            <main id="main-content" class="main-section">
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
                                <?php if (isset($_SESSION['admin']) && ($_SESSION['admin']['role'] === 'admin' || $_SESSION['admin']['role'] === 'publisher')): ?>
                                    <button type="button" aria-haspopup="dialog" class="open-delete-modal admin-action px-4 py-2 bg-[var(--color-secondary)] hover:bg-[var(--color-heading)] text-[var(--color-text-light)] transition rounded-lg cursor-pointer" data-tooltip="Eliminar esta notícia" data-id="<?= $news['id']; ?>">&#x1F5D1; Apagar notícia</button>
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

    <script src="./js/alerts.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {


            const deleteButtons = document.querySelectorAll('.open-delete-modal');
            const deleteModal = document.getElementById('deleteNewsModal');
            const closeModalButton = document.getElementById('closeNewsModal');
            const hiddenInput = document.getElementById('delete-news-id');
            let modalTrigger = null;

            deleteButtons.forEach(button => {
                button.addEventListener('click', () => {
                    modalTrigger = button;
                    const newsId = button.getAttribute('data-id');
                    hiddenInput.value = newsId;
                    deleteModal.classList.remove('hidden');
                    closeModalButton.focus();
                });
            });

            const closeDeleteModal = () => {
                deleteModal.classList.add('hidden');
                modalTrigger?.focus();
            };

            closeModalButton.addEventListener('click', closeDeleteModal);

            deleteModal.addEventListener('click', (event) => {
                if (event.target === deleteModal) closeDeleteModal();
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape' && !deleteModal.classList.contains('hidden')) {
                    closeDeleteModal();
                }
            });

        });

    </script>
</html>
