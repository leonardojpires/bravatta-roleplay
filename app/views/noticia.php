<?php
    session_start();
?>

<!doctype html>
<html lang="pt-PT">
<head>
<?php $pageTitle = ($news['title'] ?? 'Notícia') . ' | Bravatta Roleplay'; $pageDescription = mb_strimwidth(strip_tags($news['description'] ?? ''), 0, 160, '…'); require __DIR__ . '/components/head.php'; ?>

</head>
<body>

    <?php
        require_once __DIR__ . '/admin/admin_navbar.php';
    ?>

    <header class="navbar-section z-1000">
        <?php require_once __DIR__ . '/components/navbar.php'; ?>
    </header>

    <main id="main-content" class="main-section">

    <!-- HERO SECTION -->
        <section class="hero-section pt-48" style="background-image: url('<?= htmlspecialchars($news['image_path']); ?>')">
            <div class="hero-wrapper">
                <h1 class="title break-all font-heading"><?= htmlspecialchars($news['title']); ?></h1>
            </div>
        </section>

        <section class="max-w-[720px] mx-auto mt-15 mb-15 px-3">
            <div class="card">
                <div class="flex flex-col items-center md:items-start">
                    <div class="mb-10">
                        <p class="text-justify"><?= htmlspecialchars($news['description']); ?></p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER SECTION -->
    <?php require_once __DIR__ . "/components/footer.php"; ?>

</body>


</html>
