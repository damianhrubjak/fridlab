<div class="w-full">
    <a href="{{ route('fe-pages.blogShowPage', $blog->slug) }}" class="img-hover-shades w-full">
        <img src="{{ route('file-thumbnail-serve', $blog->image->slug) }}" alt="{{ $blog->title }}"
            class="h-64 w-full object-cover"></a>

    <div class="bg-pallette-black relative w-full p-4">
        <p class="text-right text-base text-gray-400">{{ slovakDateLong($blog->created_at) }}</p>
        <h2 class="font-heading text-pallette-yellow mt-4 mb-8 text-xl">{{ $blog->title }}</h2>
        <div class="prose text-white">{{ addThreeDots(strip_tags(html_entity_decode($blog->text)), 180) }}</div>
        <div class="mt-8">
            <a href="{{ route('fe-pages.blogShowPage', $blog->slug) }}" class="ghost-button mr-0 ml-auto w-max">
                <div class="content">Čítaj viac</div>
                <div class="arrow">></div>
            </a>
        </div>
    </div>
</div>
