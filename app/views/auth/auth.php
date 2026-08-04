
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
        <header class="navbar-section">
            <?php require_once __DIR__ . '/../components/navbar.php'; ?>
        </header>

        <main id="main-content" class="main-section">

            <section class="pt-24">
                <div class="flex flex-col justify-center max-w-[720px] px-5 py-20 mx-auto items-center">
                    <form action="/login" method="POST" class="flex flex-col backdrop-blur-md bg-white/10 border border-white/30 rounded-2xl p-8 w-full max-w-md shadow-[0_8px_32px_0_rgba(31,38,135,0.37)]">

                        <h2 class="text-4xl text-[var(--color-primary)] font-heading font-bold text-center mb-6">Bem-vindo, staff</h2>

                        <div class="mb-4">
                            <label for="password" class="input-label font-body">Password</label>
                            <input 
                            type="password" 
                            name="password"
                            id="password"
                            autocomplete="current-password"
                            required
                            class="input font-body">
                        </div>
                        
                        <div class="mb-4">
                            <label for="token" class="input-label font-body">Token</label>
                            <input 
                            type="text" 
                            name="token"
                            id="token"
                            autocomplete="username"
                            required
                            class="input font-body"
                            >
                        </div>

                        <button 
                            type="submit"
                            class="w-full bg-[var(--color-primary)] hover:bg-[var(--color-heading)] text-[var(--color-text-light)] font-body py-2 rounded-lg transition-colors shadow-md cursor-pointer"
                        >
                        Entrar
                        </button>

                    </form>
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
