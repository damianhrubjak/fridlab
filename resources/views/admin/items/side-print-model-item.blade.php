@php
$mainImage = $menuPrintModel->files->where('pivot.type', 'main_image')->first();
@endphp

<a class="blog-itm {{ $printModel->id === $menuPrintModel->id ? 'bg-pallette-yellow' : '' }} group hover:bg-pallette-yellow mt-5 flex w-full items-center justify-between transition duration-300 last:mb-5"
    href="{{ route('admin-pages.modely.show', $menuPrintModel->slug) }}">
    <div class="w-32 self-stretch">
        <img class="h-full w-full object-cover" src="{{ route('file-thumbnail-serve', $mainImage->slug) }}" alt="">
    </div>
    <span
        class="{{ $printModel->id === $menuPrintModel->id ? 'text-black' : '' }} w-[calc(100%-8rem)] px-2 text-left font-bold text-white transition duration-300 group-hover:text-black">
        {{ $menuPrintModel->title }}</span>
</a>
