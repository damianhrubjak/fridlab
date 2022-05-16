<div class="flex w-full items-start bg-white">
    <a class="group hover:bg-pallette-yellow flex h-full w-1/3 items-center justify-center bg-slate-200 transition duration-300"
        href="{{ route('file-download', $file->slug) }}">
        <div class="text-center">
            <p class="text-3xl text-slate-700 transition duration-300 group-hover:text-black"><i
                    class="fa-solid fa-download"></i></p>
            <p class="text-xl text-slate-700 transition duration-300 group-hover:text-black">Stiahnuť</p>
        </div>
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
            <form
                action="{{ route('admin-pages.print-model-files.destroy', ['printModel' => $printModel->slug, 'file' => $file->slug]) }}"
                method="POST">
                @csrf
                @method('DELETE')

                <button type="submit"
                    class="bg-pallette-black flex items-center px-4 py-2 font-bold text-white transition duration-300 hover:bg-rose-700">Vymazať</button>
            </form>
        </div>
    </div>
</div>
