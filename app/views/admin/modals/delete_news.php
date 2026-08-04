<div class="hidden fixed inset-0 bg-black/70 flex justify-center items-center z-1000" id="deleteNewsModal" role="dialog" aria-modal="true" aria-labelledby="delete-news-title" aria-describedby="delete-news-description">
    <div class="flex flex-col bg-[var(--color-background)] border border-white/30 shadow-xl rounded-2xl p-6 w-[90%] max-w-md text-[var(--color-text-light)]">
        <div class="text-start font-body">
            <div class="mb-1">
                <h2 id="delete-news-title" class="text-2xl font-semibold mb-2">Apagar notícia</h2>
                <p id="delete-news-description" class="text-sm text-[var(--color-contrast)] mb-6">De certeza que desejas apagar esta notícia? Esta ação não pode ser desfeita mais tarde.</p>
            </div>
            
            <div class="flex justify-end items-center gap-3">
                <form action="/admin/delete-news" method="POST">
                    <input type="hidden" name="news_id" id="delete-news-id">
                    <button type="submit" class="px-4 py-2 bg-red-700 hover:bg-red-800 text-white transition rounded-lg cursor-pointer">Apagar</button>
                </form>

                <button type="button" class="px-4 py-2 border border-[var(--color-text-light)] rounded-lg hover:bg-white/10 cursor-pointer transition" id="closeNewsModal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
