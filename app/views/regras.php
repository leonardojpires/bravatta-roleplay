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
            <?php require_once __DIR__ . '/components/navbar.php'; ?>
        </header>

        <main class="main-section">

            <!-- HERO SECTION -->
                <section class="hero-section pt-24">
                    <div class="hero-wrapper">
                        <h1 class="title font-heading">Todas as Regras do Bravatta</h1>
                        <p class="description font-body">Descobre o que podes e o que não podes fazer!</p>
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