<a class="blog-itm {{ $blog->id === $b->id ? 'bg-pallette-yellow' : '' }} group hover:bg-pallette-yellow mt-5 flex w-full items-center justify-between transition duration-300 last:mb-5"
    href="{{ route('admin-pages.blogy.show', $b->slug) }}">
    <div class="w-32 self-stretch">
        <img class="h-full w-full object-cover" src="{{ route('file-thumbnail-serve', $b->image->slug) }}" alt="">
    </div>
    <span
        class="{{ $blog->id === $b->id ? 'text-black' : '' }} w-[calc(100%-8rem)] px-2 text-left font-bold text-white transition duration-300 group-hover:text-black">
        {{ $b->title }}</span>
</a>
