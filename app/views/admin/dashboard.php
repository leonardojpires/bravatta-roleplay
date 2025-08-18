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
<body class="!bg-gradient-to-br from-[#0D1B24] to-[#1F3A4B]">

        <?php 
            if (isset($_SESSION['admin']) && $_SESSION['admin']['role'] === 'admin') {
                require_once __DIR__ . '/admin_navbar.php';
            }
        ?>

        <header class="navbar-section z-1000">
            <?php require_once __DIR__ . '/../components/navbar.php'; ?>
        </header>


    <main class="main-section admin-wrapper">

        <h1 class="admin-title font-heading">Dashboard</h1>

        <section class="w-full">
            <div class="admin-card">
                <h2 class="text-2xl text-[var(--color-text-light)] font-body text-center mb-3">Criar um novo publisher</h2>
                <form action="/admin/create-publisher" method="POST" class="flex flex-col gap-2">
                    <label for="publisher_password" class="input-label font-body !mb-0">Define a password</label>
                    <input type="text" name="publisher_password" id="publisher_password" required min="8" class="input font-body mb-3">
                    <input type="submit" name="submit" value="Gerar um novo publisher" class="input-submit font-body">
                </form>
            </div>
        </section>

        <section class="mt-15 w-full">
            <div class="admin-card">
                <h2 class="text-2xl text-[var(--color-text-light)] font-body text-center mb-3">Todos os publishers</h2>

                <div class="overflow-x-auto w-full">
                    <table class="min-w-full text-left text-sm text-white">
                        <thead class="text-sm uppercase tracking-wider text-white/70 border-b border-white/30">
                            <tr>
                                <th class="px-6 py-4">ID</th>
                                <th class="px-6 py-4">Token</th>
                                <th class="px-6 py-4">Criado a</th>
                                <th class="px-6 py-4">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/10">
                            <?php foreach($publishers as $publisher): ?>
                                <tr class="hover:bg-white/5 transition">
                                    <td class="px-6 py-4"><?= htmlspecialchars($publisher['id']) ?></td>
                                    <td class="px-6 py-4"><?= htmlspecialchars($publisher['token']) ?></td>
                                    <td class="px-6 py-4"><?= htmlspecialchars($publisher['created_at']) ?></td>
                                    <td class="px-6 max-w-[200px] py-4 overflow-x-auto whitespace-nowrap scrollbar-thin scrollbar-thumb-white/30 scrollbar-track-transparent">
                                        <form action="/admin/delete-publisher" method="POST" class="text-center">
                                            <input type="hidden" name="id" value="<?= $publisher['id']?>">
                                            <input type="submit" name="delete_publisher" value="X" class="admin-delete">
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </section>

    </main>

    <!-- ALERTS -->
    <?php
        $alerts = ['success', 'error'];

        foreach($alerts as $type) {
            if (isset($_SESSION[$type])) {
                require_once __DIR__ . "/../components/{$type}_alert.php";
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