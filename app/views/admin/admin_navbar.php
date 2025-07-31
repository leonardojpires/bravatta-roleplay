<?php  if (isset($_SESSION['admin']) && $_SESSION['admin']['role'] === 'admin' || $_SESSION['admin']['role'] === 'publisher' ) { ?>

    <div class="fixed bottom-5 right-5 flex flex-row gap-3 md:bottom-10 md:right-10 md:flex-col z-100">

        <?php if (isset($_SESSION['admin']) && $_SESSION['admin']['role'] === 'admin') { ?>
            <div class="admin-links">
                <a href="/dashboard" class="hover:text-[var(--color-contrast)] text-center transition duration-[0.3]]">⚙️</a>
            </div>
        <?php } ?>
        
        <div class="admin-links">
            <a href="/publicar" class="hover:text-[var(--color-contrast)] text-center transition duration-[0.3]]">📝</a>
        </div>

        <div class="admin-links">
            <a href="/logout" class="hover:text-[var(--color-contrast)] transition duration-[0.3]]">🚪</a>
        </div>

    </div>
<?php } ?>