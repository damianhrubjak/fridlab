@extends('admin.layout.master')

@section('page-title', '3D model - ' . $printModel->title)

@section('page-content')

    @include('admin.inc.side-print-models', compact(['printModels', 'printModel']))

    <div class="w-[calc(100%-24rem)]">
        <div class="mx-auto mb-8 flex items-center justify-between">
            <h1 class="text-7xl font-bold text-slate-700">3D model - {{ $printModel->title }}</h1>
        </div>

        <div class="flex w-full justify-center">
            <div class="bg-pallette-black p-8">
                <div class="w-full">
                    <div class="flex w-full gap-8">
                        <a class="w-1/2" href="{{ route('file-serve', $files['main_image']->first()->slug) }}"
                            data-fslightbox>
                            <img class="w-full"
                                src="{{ route('file-thumbnail-serve', $files['main_image']->first()->slug) }}"
                                alt="{{ $printModel->title }}">
                        </a>
                        <div class="w-1/2">
                            @if ($files->has('image'))
                                <div class="grid w-full grid-cols-3 gap-2">
                                    @foreach ($files['image'] as $image)
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
                                @foreach ($files['file'] as $file)
                                    <a href="{{ route('file-download', $file->slug) }}" download
                                        class="border-pallette-yellow hover:bg-pallette-yellow hover:text-pallette-black flex w-max items-center border-2 py-2 px-4 font-bold text-white transition duration-300">
                                        <span class="mr-4 text-xl">
                                            <i class="fa-solid fa-download"></i>
                                        </span>
                                        Stiahnuť: {{ $file->file_name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="my-16">
                        <h2 class="text-5xl font-bold text-white">{{ $printModel->title }}</h2>
                    </div>

                    <div
                        class="prose prose-white prose-img:p-6 prose-invert ml-auto mr-auto max-w-[1200px] break-all text-xl">
                        {!! html_entity_decode($printModel->text) !!}
                    </div>
                </div>
            </div>
        </div>

    @endsection
