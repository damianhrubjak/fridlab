<div class="flex w-full items-start bg-white">
    <a class="h-full w-1/3" href="{{ route('file-serve', $file->slug) }}" data-fslightbox>
        <img src="{{ route('file-thumbnail-serve', $file->slug) }}" alt="" class="h-full object-cover">
    </a>
    <div class="w-2/3 p-4">
        <div class="mt-4 first:mt-0">
            <p>Názov súboru:</p>
            <h3 class="text-xl font-bold text-slate-800">{{ $file->file_name }}</h3>
        </div>
        <div class="mt-4 first:mt-0">
            <p>Veľkosť súboru:</p>
            <h3 class="text-xl font-bold text-slate-800">
                {{ round($file->size / 1000000, 2) }}
                MB
            </h3>
        </div>
        <div class="flex w-full items-center justify-end gap-4">
            @if ($file->pivot->type !== 'main_image')
                <form
                    action="{{ route('admin-pages.print-model-files.update', ['printModel' => $printModel->slug, 'file' => $file->slug]) }}"
                    method="POST">
                    @csrf
                    @method('PATCH')

                    <button type="submit"
                        class="bg-pallette-black hover:bg-pallette-yellow flex items-center px-4 py-2 font-bold text-white transition duration-300 hover:text-black">Nastaviť
                        ako
                        hlavný</button>
                </form>
                <form
                    action="{{ route('admin-pages.print-model-files.destroy', ['printModel' => $printModel->slug, 'file' => $file->slug]) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                        class="bg-pallette-black flex items-center px-4 py-2 font-bold text-white transition duration-300 hover:bg-rose-700">Vymazať</button>
                </form>
            @endif
        </div>
    </div>
</div>
