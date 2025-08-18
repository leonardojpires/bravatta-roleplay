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
                    <h1 class="title font-heading">Contacta os Nossos Desenvolvedores</h1>
                    <p class="description font-body">Se houver algo que queiras dizer, envia a tua mensagem para que a nossa equipa de moderação possa te ajudar!</p>
                </div>
            </section>

            <section class="mt-15 mb-15">
                <div class="max-w-[720px] mx-auto">
                    <div class="card flex flex-col !py-10">
                        <img
                            src="./images/icons/phone.png" 
                            alt="Bravatta Phone" 
                            class="floating-icons left-[-50px] top-[-50px] rotate-[-10deg]"
                            data-rellax-speed="1"
                        >
                        <img
                            src="./images/icons/contact.png" 
                            alt="Bravatta Contact" 
                            class="floating-icons right-[-70px] bottom-[-50px] rotate-[10deg]"
                            data-rellax-speed="1"
                        >
                        <h3 class="h3 font-body text-center md:text-start">Envia a tua mensagem</h3>
                        <form action="/contacto/enviar" method="POST" class="flex flex-col gap-5 justify-center items-center md:justify-start md:items-start">
                            <div class="flex flex-col gap-2 w-full">
                                <label for="nome" class="input-label !text-[var(--color-background)]">Nome</label>
                                <input type="text" name="nome" id="nome" placeholder="John Doe" class="input" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
                                
                                <label for="nickname" class="input-label !text-[var(--color-background)]">Nickname</label>
                                <input type="text" name="nickname" id="nickname" placeholder="thejohndoe" class="input" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">

                                <label for="email" class="input-label !text-[var(--color-background)]">E-Mail</label>
                                <input type="email" name="email" id="email" placeholder="johndoe1234@dominio.com" class="input" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">

                                <label for="mensagem" class="input-label !text-[var(--color-background)]">A tua mensagem</label>
                                <textarea name="mensagem" id="mensagem" placeholder="O Bravatta é o melhor RP!" class="input h-40 resize-y" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;"></textarea>
                            </div>

                            <input type="submit" value="Enviar" class="input-submit !w-50 px-6">
                        </form>
                    </div>
                </div>
            </section>

        </main>

        

    <!-- FOOTER SECTION -->
        <?php require_once __DIR__ . "/components/footer.php"; ?>

    <!-- ALERTS -->
    <?php
        $alerts = ['success', 'error'];

        foreach($alerts as $type) {
            if (isset($_SESSION[$type])) {
                require_once __DIR__ . "/components/{$type}_alert.php";
            }
        }
    ?>

    </body>
    <script src="./js/toggle_menu.js"></script>
    <script src="./js/alerts.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const rellax = new Rellax('[data-rellax-speed]');
        });
    </script>
</html>