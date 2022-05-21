@php
$mainImage = $model->files->where('pivot.type', 'main_image')->first();
$files = $model->files->where('pivot.type', 'file');
@endphp
<div class="bg-pallette-black group relative overflow-hidden text-white">
    <a href="{{ route('fe-pages.modelShowPage', [$model->slug, 'language' => app()->getLocale()]) }}"
        class="font-heading bg-pallette-yellow text-pallette-black hover:text-pallette-blue hover:bg-pallette-black z-20 block py-3 px-6 text-2xl transition duration-300">{{ $model->title }}</a>
    <div class="relative flex flex-col items-stretch justify-start sm:h-full sm:flex-row">

        <a class="left-0 h-full w-full sm:absolute"
            href="{{ route('fe-pages.modelShowPage', [$model->slug, 'language' => app()->getLocale()]) }}">
            <img src="{{ route('file-thumbnail-serve', [$mainImage->slug, 'language' => app()->getLocale()]) }}"
                alt="{{ $model->title }}" class="h-64 w-full object-cover sm:h-full sm:w-3/4">
        </a>

        <div
            class="bg-pallette-black z-10 ml-auto mr-0 w-full p-4 transition duration-300 ease-in-out group-hover:translate-x-0 sm:w-3/4 sm:translate-x-48 lg:translate-x-64">
            <p>{{ addThreeDots(strip_tags(html_entity_decode($model->text)), 200) }}</p>
            <div class="my-4 flex flex-wrap gap-2">
                @foreach ($files as $file)
                    <a href="{{ route('file-download', [$file->slug, 'language' => app()->getLocale()]) }}" download
                        class="border-pallette-yellow hover:bg-pallette-yellow hover:text-pallette-black flex w-max items-center border-2 py-1 px-3 text-sm font-bold text-white transition duration-300">
                        <span class="mr-4 text-lg">
                            <i class="fa-solid fa-download"></i>
                        </span>
                        {{ __('Download') }}: {{ $file->file_name }}
                    </a>
                @endforeach
            </div>
            <div class="mt-8 w-full">
                <a class="bg-pallette-yellow text-pallette-black font-heading ml-auto mr-0 block w-max py-2 px-4 font-bold transition duration-150 hover:bg-[#BAAD25]"
                    href="{{ route('fe-pages.modelShowPage', [$model->slug, 'language' => app()->getLocale()]) }}">{{ __('Open') }}</a>
            </div>
        </div>
    </div>
</div>
