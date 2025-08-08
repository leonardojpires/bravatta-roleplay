<div id="errorAlert" class="alert bg-red-500/90 border-2 border-red-700/50">
    <div class="flex flex-row items-center gap-10 p-5">
        <div class="flex flex-row items-center gap-2">
            <span class="text-3xl text-transparent" style="text-shadow: 0 0 0 rgb(255, 0, 0)">&#10060;</span>
            <p class="text-green-200 font-body"><?= $_SESSION['error'] ?? 'Error Test'; ?></p>
        </div>
        <button id="errorClose" class="text-transparent cursor-pointer" style="text-shadow: 0 0 0 rgb(255, 0, 0, 0.5)">&#10006;</button>
    </div>
</div>

<?php unset($_SESSION['error']); ?>