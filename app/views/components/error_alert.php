<div id="errorAlert" role="alert" aria-live="assertive" class="alert bg-red-700 border-2 border-red-900">
    <div class="flex flex-row items-center gap-10 p-5">
        <div class="flex flex-row items-center gap-2">
            <span class="text-3xl text-transparent" style="text-shadow: 0 0 0 rgb(255, 0, 0)">&#10060;</span>
            <p class="text-white font-body"><?= htmlspecialchars($_SESSION['error'] ?? 'Ocorreu um erro.'); ?></p>
        </div>
        <button type="button" id="errorClose" aria-label="Fechar mensagem de erro" class="text-white cursor-pointer min-w-11 min-h-11">&#10006;</button>
    </div>
</div>

<?php unset($_SESSION['error']); ?>
