<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/output.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <header class="bg-[var(--color-secondary)]">
        <nav class="flex justify-between px-4 py-7 mx-w-7xl text-[var(--color-primary)] font-heading md:justify-center">

            <div class="md:hidden">
                <span>IMG</span>
            </div>

            <div class="flex flex-col items-end md:flex-row md:items-center">
                <!-- MOBILE MENU BUTTON -->
                <button class="md:hidden" id="menu-toggle">
                    <i data-feather="menu" class="w-6 h-6 text-[var(--color-primary)]"></i>
                </button>
                    <!-- MOBILE MENU -->
                <div class="hidden flex-col space-y-4 mt-4 md:hidden md:mt-0" id="mobile-menu">
                    <a href="/sobre">Sobre Nós</a>
                    <a href="/regras">Regras</a>
                    <a href="/sobre">Sobre Nós</a>
                    <a href="/regras">Regras</a>
                </div>
            </div>

            <!-- DESKTOP MENU -->
            <div class="hidden md:flex md:justify-center md:items-center gap-x-10">
                <div class="flex space-x-8">
                    <a href="/sobre">Sobre Nós</a>
                    <a href="/regras">Regras</a>
                </div>
                <div>
                    <span>IMG</span>
                </div>
                <div class="flex space-x-8">
                    <a href="/noticias">Notícias</a>
                    <a href="/contacto">Contacto</a>
                </div>
            </div>

        </nav>
    </header>
</body>
<script src="./js/toggle_menu.js"></script>
</html>