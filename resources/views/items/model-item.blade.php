@php
$mainImage = $model->files->where('pivot.type', 'main_image')->first();
@endphp
<div class="bg-pallette-black text-white">
    <a class="img-hover-shades w-full" href="{{ route('fe-pages.modelShowPage', $model->slug) }}">
        <img src="{{ route('file-thumbnail-serve', $mainImage->slug) }}" alt="{{ $model->title }}"
            class="w-full object-cover">
    </a>
    <div class="p-4">
        <h2 class="font-heading mb-8 mt-4 text-3xl">{{ $model->title }}</h2>
        <p>{{ addThreeDots(strip_tags(html_entity_decode($model->text)), 200) }}</p>
        <div class="mt-8 w-full">
            <a class="bg-pallette-yellow text-pallette-black font-heading ml-auto mr-0 block w-max py-2 px-4 font-bold transition duration-150 hover:bg-[#BAAD25]"
                href="{{ route('fe-pages.modelShowPage', $model->slug) }}">Otvoriť</a>
        </div>
    </div>
</div>
