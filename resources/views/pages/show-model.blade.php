@extends('layout.master')

@section('page-title', '3D Model - ' . $printModel->title)

@section('page-content')

    <div class="section-banner">
        <div class="page-wrapper">
            <div class="mx-auto mb-8 flex items-center justify-between">
                <h1 class="font-heading heading-shadow text-7xl font-bold text-white">{{ $printModel->title }}</h1>
            </div>

            <div class="flex w-full justify-center">
                <div class="bg-pallette-black p-8">
                    <div class="w-full">
                        <div class="flex w-full gap-8">
                            <div class="w-1/2">
                                <img class="w-full"
                                    src="{{ route('file-thumbnail-serve', $fileGroups['main_image']->first()->slug) }}"
                                    alt="{{ $printModel->title }}">
                            </div>
                            <div class="w-1/2">
                                <div class="flex w-full gap-4">
                                    @foreach ($fileGroups['image'] as $image)
                                        <img class="w-1/3"
                                            src="{{ route('file-thumbnail-serve', $image->slug) }}"
                                            alt="{{ $printModel->title }}">
                                    @endforeach
                                </div>
                                <div class="mt-4 flex w-full gap-4">
                                    @foreach ($fileGroups['file'] as $file)
                                        <a href="{{ route('file-download', $file->slug) }}" download
                                            class="border-pallette-yellow hover:bg-pallette-yellow hover:text-pallette-black flex w-max items-center border-2 py-2 px-4 font-bold text-white transition duration-300">
                                            <span class="mr-4 text-xl">
                                                <i class="fa-solid fa-download"></i>
                                            </span>
                                            Stianuť: {{ $file->file_name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="my-16">
                            <h2 class="text-5xl font-bold text-white">{{ $printModel->title }}</h2>
                        </div>

                        <div class="prose ml-auto mr-auto max-w-[1200px] text-white">
                            {!! html_entity_decode($printModel->text) !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    @endsection