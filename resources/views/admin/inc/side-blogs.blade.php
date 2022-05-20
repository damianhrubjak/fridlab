<aside class="bg-pallette-black fixed top-0 right-0 flex h-screen w-96 flex-col justify-between">
    <div class="w-full overflow-y-scroll">
        <h2 class="bg-slate-900 px-4 py-8 text-2xl font-bold text-white">Blogy</h2>
        <div class="">
            @foreach ($blogs as $menuBlog)
                @include('admin.items.side-blog-item', compact(['menuBlog', 'blog']))
            @endforeach
        </div>
    </div>
    <div class="flex justify-center gap-8 bg-slate-900 px-2 py-4">
        <form action="{{ route('admin-pages.blogy.destroy', $blog->slug) }}" class="flex w-1/2 justify-center"
            method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="icon-link flex w-1/2 flex-col items-center text-center text-white transition duration-300">
                <i class="fa-solid fa-trash text-3xl"></i>
                <p class="mt-2">Odstrániť</p>
            </button>
        </form>
        <a href="{{ route('admin-pages.blogy.edit', $blog->slug) }}"
            class="icon-link w-1/2 text-center text-white transition duration-300">
            <i class="fa-solid fa-pen-to-square text-3xl"></i>
            <p class="mt-2">Upraviť</p>
        </a>
    </div>
</aside>
