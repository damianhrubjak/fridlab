@php
dd(url()->current());
@endphp

<a class="blog-itm {{ strtolower(str_replace(' ', '-', $b->title)) === $b->slug ? 'active' : '' }} mb-5 flex w-full items-center justify-between"
    href="{{ route('admin-pages.blogy.show', $b->slug) }}">
    <div class="w-[30%]"><img class="w-full" src="{{ route('file-thumbnail-serve', $b->image->slug) }}"
            alt=""></div>
    <span class="w-[70%] px-2 text-center font-bold text-white">{{ $b->title }}</span>
</a>
