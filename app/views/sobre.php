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
                        <h1 class="title font-heading">Acerca do nosso RP</h1>
                        <p class="description font-body">Entende tudo por de trás do Bravatta Roleplay!</p>
                    </div>
                </section>

            <div class="max-w-[720px] mx-auto">

                <!-- TEXT CONTENT SECTION -->
                <section class="mt-15">
                    <div class="card">
                        <img 
                            src="./images/icons/heart.png" 
                            alt="" 
                            class="floating-icons right-[50px] top-[-50px] rotate-[-10deg]"
                            data-rellax-speed="1"
                        >
                        <img 
                            src="./images/icons/light.png" 
                            alt="" 
                            class="floating-icons left-[-100px] bottom-[-50px] rotate-[10deg]"
                            data-rellax-speed="1"
                        >
                        <div class="flex flex-col items-center md:items-start">
                            <div class="mb-10">
                                <h2 class="h2 font-heading text-center">O que é o Bravatta Roleplay?</h2>
                                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos possimus ipsam quidem temporibus laboriosam, sit sint consequatur non quod aut hic inventore, facere, laudantium nam? Fugiat maiores amet repudiandae aut?</p>
                            </div>
                            <div class="mb-10">
                                <h2 class="h2 font-heading text-center">O que podes fazer aqui?</h2>
                                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos possimus ipsam quidem temporibus laboriosam, sit sint consequatur non quod aut hic inventore, facere, laudantium nam? Fugiat maiores amet repudiandae aut?</p>
                            </div>
                            <div>
                                <h2 class="h2 font-heading text-center">Como jogar?</h2>
                                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos possimus ipsam quidem temporibus laboriosam, sit sint consequatur non quod aut hic inventore, facere, laudantium nam? Fugiat maiores amet repudiandae aut?</p>
                            </div>
                        </div>
                    </div>
                </section>

                
                <section class="mt-15">
                    <div class="card">
                        <img 
                            src="./images/icons/person.png" 
                            alt="" 
                            class="floating-icons right-[-50px] top-[100px] rotate-[10deg]"
                            data-rellax-speed="1"
                        >
                        <img 
                            src="./images/icons/statistics.png" 
                            alt="" 
                            class="floating-icons left-[-50px] bottom-[-50px] rotate-[-10deg]"
                            data-rellax-speed="1"
                        >
                        <div class="flex flex-col ">
                            <h2 class="h2 font-heading text-center">Conhece os nossos CEOs</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                                <div class="order-2 md:order-1 flex justify-center items-center">
                                    <img src="https://dummyimage.com/300x300/000/fff" alt="">
                                </div>
                                <div class="order-1 md:order-2 flex flex-col items-center md:items-start">
                                    <h3 class="text-3xl text-[var(--color-secondary)] text-center font-heading mb-3">Sunny</h2>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos possimus ipsam quidem temporibus laboriosam, sit sint consequatur non quod aut hic inventore, facere, laudantium nam? Fugiat maiores amet repudiandae aut?</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                                <div class="order-2 md:order-1 flex justify-center items-center">
                                    <img src="https://dummyimage.com/300x300/000/fff" alt="">
                                </div>
                                <div class="order-1 md:order-2 flex flex-col items-center md:items-start">
                                    <h3 class="text-3xl text-[var(--color-secondary)] text-center font-heading mb-3">Pedrozy</h2>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos possimus ipsam quidem temporibus laboriosam, sit sint consequatur non quod aut hic inventore, facere, laudantium nam? Fugiat maiores amet repudiandae aut?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-15">
                    <div class="flex flex-col justify-center items-center gap-5">
                        <div class="flex flex-col justify-center items-center gap-5 md:flex-row">
                            <img src="https://dummyimage.com/350x350/000/fff" alt="">
                            <img src="https://dummyimage.com/350x350/000/fff" alt="">
                        </div>
                        <div>
                            <span class="mt-5"><a href="/regras" class="text-white bg-[var(--color-heading)] hover:bg-[var(--color-accent)] focus:ring-4 font-body rounded-lg px-5 py-2.5 transition">Vê as regras &rarr;</a></span>
                        </div>
                    </div>
                </section>

                <aside class="mt-15 mb-15">
                    <div class="card ">
                        <div class="flex flex-col items-center md:items-start">
                            <div class="mb-5">
                                <h2 class="h2 font-heading text-center">Onde podes nos encontrar</h2>
                            </div>
                            <div class="flex flex-col gap-3">
                                <div class="flex gap-3">
                                    <i class="fab fa-discord w-6 h-6 text-[var(--color-background)] text-2xl"></i>
                                    <a href="">Discord</a>
                                </div>
                                <div class="flex gap-3">
                                    <i class="fab fa-twitter w-6 h-6 text-[var(--color-background)] text-2xl"></i>
                                    <a href="">Twitter</a>
                                </div>
                                <div class="flex gap-3">
                                    <i class="fab fa-tiktok w-6 h-6 text-[var(--color-background)] text-2xl"></i>
                                    <a href="">TikTok</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </aside>

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