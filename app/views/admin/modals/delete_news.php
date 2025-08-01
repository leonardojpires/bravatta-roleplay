<div class="hidden fixed inset-0 bg-black/50 flex justify-center items-center z-1000" id="deleteNewsModal">
    <div class="flex flex-col bg-white/10 backdrop-blur-md border border-white/20 shadow-xl rounded-2xl p-6 w-[90%] max-w-md text-[var(--color-text-light)]">
        <div class="text-start font-body">
            <div class="mb-1">
                <h2 class="text-2xl font-semi-bold mb-2">Apagar notícia</h2>
                <p class="text-sm text-[var(--color-contrast)] mb-6">De certeza que desejas apagar esta notícia? Esta ação não pode ser desfeita mais tarde.</p>
            </div>
            
            <div class="flex justify-end items-center gap-3">
                <form action="/admin/delete-news" method="POST">
                    <input type="hidden" name="news_id" id="delete-news-id">
                    <input type="submit" value="Apagar" class="px-4 py-2 bg-[var(--color-primary)] hover:bg-[var(--color-heading)] transition rounded-lg cursor-pointer" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                </form>

                <button class="px-4 py-2 border border-[var(--color-text-light)]/50 rounded-lg hover:bg-[var(--color-contrast)]/70 cursor-pointer transition" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;" id="closeNewsModal">Cancelar</button>
            </div>
        </div>
    </div>
</div>