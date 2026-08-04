<?php  
$role = $_SESSION['admin']['role'] ?? null;
if ($role && ($role === 'admin' || $role === 'publisher')) { ?>

    <nav class="fixed bottom-5 right-5 flex flex-row gap-3 md:bottom-10 md:right-10 md:flex-col z-100" aria-label="Ações de administração">

        <?php if ($role === 'admin') { ?>
            <div class="admin-links admin-action" data-tooltip="Abrir dashboard">
                <a href="/dashboard" aria-label="Abrir dashboard" class="hover:text-[var(--color-contrast)] text-center transition">⚙️</a>
            </div>
        <?php } ?>
        
        <div class="admin-links admin-action" data-tooltip="Publicar notícia">
            <a href="/publicar" aria-label="Publicar notícia" class="hover:text-[var(--color-contrast)] text-center transition">📝</a>
        </div>

        <div class="admin-links admin-action" data-tooltip="Terminar sessão">
            <a href="/logout" aria-label="Terminar sessão" class="hover:text-[var(--color-contrast)] transition">🚪</a>
        </div>

    </nav>
<?php } ?>
