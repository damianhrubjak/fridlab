<div class="bg-pallette-black flex text-white">
    <div class="h-full w-2/5">
        <img class="h-full w-full object-cover" src="{{ route('file-thumbnail-serve', $blog->image->slug) }}"
            alt="BLOG">
    </div>

    <div class="flex h-full w-3/5 flex-col justify-between py-5 px-6">

        <div>
            <h2 class="mb-2 text-3xl font-bold">{{ $blog->title }}</h2>

            <p>{{ addThreeDots(strip_tags($blog->text), 200) }}</p>
        </div>

        <div class="w-full"> <a
                class="bg-pallette-yellow text-pallette-black ml-auto mr-0 block w-max py-2 px-4 font-bold transition duration-150 hover:bg-[#BAAD25]"
                href="{{ route('admin-pages.blogy.show', $blog->slug) }}">Otvoriť</a>
        </div>
    </div>


</div>
