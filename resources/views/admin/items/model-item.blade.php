<div class="bg-pallette-black text-white">
    <div>
        @php
            $mainImage = $printModel->files->where('pivot.type', 'main_image')->first();
        @endphp
        <img src="{{ route('file-thumbnail-serve', $mainImage->slug) }}" alt="IMAGE" class="w-full object-cover">
    </div>
    <div class="p-3">

        <h2 class="mb-2 text-3xl">{{ $printModel->title }}</h2>
        <p>{{ addThreeDots(strip_tags(html_entity_decode($printModel->text)), 200) }}</p>
        <div class="w-full">
            <a class="bg-pallette-yellow text-pallette-black ml-auto mr-0 block w-max py-2 px-4 font-bold transition duration-150 hover:bg-[#BAAD25]"
                href="{{ route('admin-pages.modely.show', $printModel->slug) }}">Otvoriť</a>
        </div>
    </div>
</div>
