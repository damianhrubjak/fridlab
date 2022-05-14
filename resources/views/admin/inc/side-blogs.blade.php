<aside class="bg-pallette-black fixed top-0 right-0 flex h-screen w-96 flex-col justify-between">
    <div class="w-full overflow-y-scroll">
        <h2 class="bg-slate-900 px-4 py-8 text-2xl font-bold text-white">Blogy</h2>
        <div class="">
            @foreach ($blogs as $b) @include(
                'admin.items.side-blog-item',
                compact(['b', 'blog'])
            ) @endforeach
        </div>
    </div>
    <div class="flex justify-center gap-8 bg-slate-900 px-2 py-4">
        <a href="#" class="icon-link w-1/2 text-center text-white transition duration-300">
            <i class="fa-solid fa-trash text-3xl"></i>
            <p class="mt-2">Odstrániť</p>
        </a>
        <a href="#" class="icon-link w-1/2 text-center text-white transition duration-300">
            <i class="fa-solid fa-pen-to-square text-3xl"></i>
            <p class="mt-2">Upraviť</p>
        </a>
    </div>
</aside>
