@extends('layout.master')

@section('page-title', __('3D Model') . ' - ' . $printModel->title)

@section('page-content')

    <div class="section-banner">
        <div class="page-wrapper">
            <div class="mx-auto mb-8 flex items-center justify-between">
                <h1
                    class="xs:break-normal font-heading heading-shadow w-full break-words text-3xl font-bold leading-relaxed text-white md:text-7xl">
                    {{ $printModel->title }}</h1>
            </div>

            <div class="flex w-full justify-center">
                <div class="bg-pallette-black p-8">
                    <div class="w-full">
                        <div class="flex w-full flex-col gap-8 lg:flex-row">
                            <a class="w-full lg:w-1/2" data-fslightbox
                                href="{{ route('file-serve', $fileGroups['main_image']->first()->slug) }}">
                                <img class="w-full"
                                    src="{{ route('file-thumbnail-serve', $fileGroups['main_image']->first()->slug) }}"
                                    alt="{{ $printModel->title }}">
                            </a>
                            <div class="w-full lg:w-1/2">
                                @if ($fileGroups->has('image'))
                                    <div class="grid w-full grid-cols-3 gap-4">
                                        @foreach ($fileGroups['image'] as $image)
                                            <a href="{{ route('file-serve', $image->slug) }}" data-fslightbox
                                                class="block w-full">
                                                <img class="h-full w-full object-cover"
                                                    src="{{ route('file-thumbnail-serve', $image->slug) }}"
                                                    alt="{{ $printModel->title }}">
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="mt-4 flex w-full flex-wrap gap-4">
                                    @foreach ($fileGroups['file'] as $file)
                                        <a href="{{ route('file-download', $file->slug) }}" download
                                            class="border-pallette-yellow hover:bg-pallette-yellow hover:text-pallette-black flex w-max items-center border-2 py-2 px-4 font-bold text-white transition duration-300">
                                            <span class="mr-4 text-xl">
                                                <i class="fa-solid fa-download"></i>
                                            </span>
                                            {{ __('Download') }}: {{ $file->file_name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="my-16">
                            <h2 class="text-5xl font-bold text-white">{{ $printModel->title }}</h2>
                        </div>

                        <div class="prose prose-white prose-img:p-6 prose-invert ml-auto mr-auto max-w-[1200px] text-xl">
                            {!! html_entity_decode($printModel->text) !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ request()->getSchemeAndHttpHost() . mix('js/fslightbox.js') }}"></script>
@endsection
