<div id="successAlert" class="fixed left-5 bottom-5 bg-green-500/50 border-2 border-green-700/50 rounded-lg">
    <div class="flex flex-row items-center gap-10 p-5">
        <div class="flex flex-row items-center gap-2">
            <span class="text-3xl text-transparent" style="text-shadow: 0 0 0 rgb(26, 232, 77)">&#10004;</span>
            <p class="text-green-200 font-body"><?= $_SESSION['success'] ?? 'Success Test'; ?></p>
        </div>
        <button id="successClose" class="text-transparent cursor-pointer" style="text-shadow: 0 0 0 rgb(26, 232, 77, 0.8)">&#10006;</button>
    </div>
</div>

<?php unset($_SESSION['success']); ?>