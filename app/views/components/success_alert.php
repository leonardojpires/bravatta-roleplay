<div id="successAlert" class="alert bg-green-500/90 border-2 border-green-700/50">
    <div class="flex flex-row items-center gap-10 p-5">
        <div class="flex flex-row items-center gap-2">
            <span class="text-3xl text-transparent" style="text-shadow: 0 0 0 rgb(30, 255, 0)">&#10004;</span>
            <p class="text-green-200 font-body"><?= $_SESSION['success'] ?? 'Success Test'; ?></p>
        </div>
        <button id="successClose" class="text-transparent cursor-pointer" style="text-shadow: 0 0 0 rgb(30, 255, 0, 0.8)">&#10006;</button>
    </div>
</div>

<?php unset($_SESSION['success']); ?>