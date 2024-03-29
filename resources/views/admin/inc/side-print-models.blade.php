<aside class="bg-pallette-black fixed top-0 right-0 flex h-screen w-96 flex-col justify-between">
    <div class="w-full overflow-y-scroll">
        <h2 class="bg-slate-900 px-4 py-8 text-2xl font-bold text-white">3D modely</h2>
        <div class="">
            @foreach ($printModels as $menuPrintModel)
                @include(
                    'admin.items.side-print-model-item',
                    compact(['menuPrintModel', 'printModel'])
                )
            @endforeach
        </div>
    </div>
    <div class="flex justify-center gap-8 bg-slate-900 px-2 py-4">
        <a href="{{ route('admin-pages.modely.edit', $printModel->slug) }}"
            class="icon-link w-1/2 text-center text-white transition duration-300">
            <i class="fa-solid fa-pen-to-square text-3xl"></i>
            <p class="mt-2">Upraviť</p>
        </a>
        <a href="{{ route('admin-pages.print-model-files.index', $printModel->slug) }}"
            class="icon-link w-1/2 text-center text-white transition duration-300">
            <i class="fa-solid fa-folder text-3xl"></i>
            <p class="mt-2">Súbory</p>
        </a>
        <form action="{{ route('admin-pages.modely.destroy', $printModel->slug) }}" class="flex w-1/2 justify-center"
            method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="icon-link flex w-1/2 flex-col items-center text-center text-white transition duration-300">
                <i class="fa-solid fa-trash text-3xl"></i>
                <p class="mt-2">Odstrániť</p>
            </button>
        </form>
    </div>
</aside>
