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
<link href="/css/output.css" rel="stylesheet">
<title>Bravatta</title>
<link href="/css/style.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/rellax@1.12.1/rellax.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
</head>
<body>

    <?php 
        require_once __DIR__ . '/admin/admin_navbar.php';
    ?>

    <header class="navbar-section z-1000">
        <?php require_once __DIR__ . '/components/navbar.php'; ?>
    </header>

    <main class="main-section">

    <!-- HERO SECTION -->
        <section class="hero-section pt-48" style="background-image: url('<?= htmlspecialchars($news['image_path']); ?>')">
            <div class="hero-wrapper">
                <h1 class="title font-heading"><?= htmlspecialchars($news['title']); ?></h1>
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
<script src="./js/toggle_menu.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const rellax = new Rellax('[data-rellax-speed]');
    });
</script>
</html>