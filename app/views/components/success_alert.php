<div id="successAlert" role="status" aria-live="polite" class="alert bg-green-800 border-2 border-green-950">
    <div class="flex flex-row items-center gap-10 p-5">
        <div class="flex flex-row items-center gap-2">
            <span class="text-3xl text-transparent" style="text-shadow: 0 0 0 rgb(30, 255, 0)">&#10004;</span>
            <p class="text-white font-body"><?= htmlspecialchars($_SESSION['success'] ?? 'Operação concluída.'); ?></p>
        </div>
        <button type="button" id="successClose" aria-label="Fechar mensagem de sucesso" class="text-white cursor-pointer min-w-11 min-h-11">&#10006;</button>
    </div>
</div>

<?php unset($_SESSION['success']); ?>
