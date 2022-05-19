<div class="w-full max-w-2xl">
    <a href="{{ route('fe-pages.blogShowPage', $blog->slug) }}" class="img-hover-shades w-full">
        <img src="{{ route('file-thumbnail-serve', $blog->image->slug) }}" alt="{{ $blog->title }}"
            class="h-64 w-full object-cover"></a>

    <div class="bg-pallette-black relative w-full p-4">
        <p class="xs:text-base text-right text-sm text-gray-400">{{ slovakDateLong($blog->created_at) }}</p>
        <h2 class="font-heading text-pallette-yellow xs:mt-4 xs:mb-8 mt-2 mb-4 break-words text-xl sm:break-normal">
            {{ $blog->title }}
        </h2>
        <div class="prose text-white">{{ addThreeDots(strip_tags(html_entity_decode($blog->text)), 180) }}</div>
        <div class="xs:mt-8 mt-4">
            <a href="{{ route('fe-pages.blogShowPage', $blog->slug) }}" class="ghost-button mr-0 ml-auto w-max">
                <div class="content">Čítaj viac</div>
                <div class="arrow">></div>
            </a>
        </div>
    </div>
</div>
