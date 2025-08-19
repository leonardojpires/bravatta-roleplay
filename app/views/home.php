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
                <h1 class="title font-heading">Bem-Vindo(a) ao Bravatta Roleplay</h1>
                <p class="description font-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magni numquam enim! Velit optio doloribus veritatis pariatur atque hic distinctio ipsa neque tempore cum? Alias incidunt reprehenderit ut nulla saepe?</p>
                <div class="flex gap-2">
                    <i data-feather="users" class="w-6 h-6 text-[var(--color-primary)]"></i>
                    <span class="text-[var(--color-accent)] font-body">+ 100 jogadores</span>
                </div>
            </div>
        </section>

        
    <!-- INFORMATIONS SECTION -->
        <!-- FIRST CARD -->
        <section class="mt-15">
            <div class="card max-w-[720px] mx-auto">
                <img 
                    src="./images/icons/computer.png" 
                    alt="" 
                    class="floating-icons right-[-50px] top-[-50px] rotate-[-10deg]"
                    data-rellax-speed="1"
                >
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex flex-col items-center md:items-start">
                        <h2 class="text-3xl text-[var(--color-secondary)] text-center font-heading mb-3 md:text-left">Um pouco sobre nós</h2>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos possimus ipsam quidem temporibus laboriosam, sit sint consequatur non quod aut hic inventore, facere, laudantium nam? Fugiat maiores amet repudiandae aut?</p>
                        <span class="mt-5"><a href="/sobre" class="text-white bg-[var(--color-heading)] hover:bg-[var(--color-accent)] focus:ring-4 font-body rounded-lg px-5 py-2.5 transition">Descobre mais sobre nós &rarr;</a></span>
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="https://dummyimage.com/300x300/000/fff" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- SECOND CARD -->
        <section class="mt-15">
            <div class="card max-w-[720px] mx-auto">
                <img 
                    src="./images/icons/police_hat.png" 
                    alt="" 
                    class="floating-icons left-[-50px] top-[20px] rotate-[-10deg]"
                    data-rellax-speed="1"
                >
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="order-2 md:order-1 flex justify-center items-center">
                        <img src="https://dummyimage.com/300x300/000/fff" alt="">
                    </div>
                    <div class="order-1 md:order-2 flex flex-col items-center md:items-start">
                        <h2 class="text-3xl text-[var(--color-secondary)] text-center font-heading mb-3">Por quê jogar aqui?</h2>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos possimus ipsam quidem temporibus laboriosam, sit sint consequatur non quod aut hic inventore, facere, laudantium nam? Fugiat maiores amet repudiandae aut?</p>
                        <span class="mt-5"><a href="/regras" class="text-white bg-[var(--color-heading)] hover:bg-[var(--color-accent)] focus:ring-4 font-body rounded-lg px-5 py-2.5 transition">Vê as regras &rarr;</a></span>
                    </div>
                </div>
            </div>
        </section>

    <!-- FEATURES SECTION -->
        <section class="mt-15">
            <div class="max-w-[1200px] mx-auto">
                <h2 class="text-3xl text-[var(--color-secondary)] text-center font-heading mb-5">O que podes fazer?</h2>
                <div class="card-divs flex flex-col md:flex-row gap-10">

                    <div class="card flex flex-col !py-10">
                        <img src="https://dummyimage.com/600x300/000/fff" class="mb-5" alt="">
                        <h3 class="h3 font-body">Tópico 1</h3>
                        <p class="font-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae velit expedita veniam esse dolorem error, explicabo distinctio blanditiis nostrum quae facere sequi eum omnis! Saepe dolor laudantium soluta quo.</p>
                    </div>

                    <div class="card flex flex-col !py-10 z-50">
                        <img src="https://dummyimage.com/600x300/000/fff" class="mb-5" alt="">
                        <h3 class="h3 font-body">Tópico 2</h3>
                        <p class="font-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae velit expedita veniam esse dolorem error, explicabo distinctio blanditiis nostrum quae facere sequi eum omnis! Saepe dolor laudantium soluta quo.</p>
                    </div>

                    <div class="card flex flex-col !py-10">
                        <img src="https://dummyimage.com/600x300/000/fff" class="mb-5" alt="">
                        <h3 class="h3 font-body">Tópico 3</h3>
                        <p class="font-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae velit expedita veniam esse dolorem error, explicabo distinctio blanditiis nostrum quae facere sequi eum omnis! Saepe dolor laudantium soluta quo.</p>
                    </div>

                </div>
            </div>
        </section>

    <!-- ACTION SECTION -->
        <section class="action-section mt-15 py-20 px-5">
            <div class="w-full max-w-[720px] mx-auto flex flex-col justify-center items-center">
                <img
                    src="./images/icons/lego.png" 
                    alt="" 
                    class="floating-icons left-[350px] top-[550px] rotate-[-10deg]"
                    data-rellax-speed="2"
                >
                <img
                    src="./images/icons/hammer_phone.png" 
                    alt="" 
                    class="floating-icons right-[250px] top-[600px] rotate-[-10deg]"
                    data-rellax-speed="2"
                >
                <span class="text-4xl text-[var(--color-primary)] font-heading mb-5">Junta-te a Nós</span>
                <p class="text-base text-[var(--color-contrast)] font-body text-center mb-5 md:max-w-[75%]">Vem fazer parte da nossa comunidade e aventura-te no nosso RP!</p>
                <a href="#" class="text-white bg-[var(--color-heading)] hover:bg-[var(--color-accent)] focus:ring-4 font-body transition rounded-lg px-7 py-4.5">Vê o nosso jogo!</a>
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