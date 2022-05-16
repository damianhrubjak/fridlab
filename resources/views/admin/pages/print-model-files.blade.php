@extends('admin.layout.master')

@section('page-title', '3D model - ' . $printModel->title . ' - Správca súborov')

@section('page-content')

    <div class="mb-8 flex items-center justify-between">
        <h1 class="text-7xl font-bold text-slate-700">Súbory 3D modelu - {{ $printModel->title }}</h1>
        <div class="rounded-md bg-slate-700">
            <a href="{{ route('admin-pages.print-model-files.create', $printModel->slug) }}"><i
                    class="rotate-plus fa-solid fa-plus text-pallette-yellow cursor-pointer p-4 text-5xl transition duration-200 hover:rotate-90"></i></a>
        </div>
    </div>

    <h2 class="mb-2 text-2xl font-bold text-slate-700 first:mt-0">Hlavný obrázok:</h2>
    <div class="grid w-full grid-cols-2 gap-8">
        @include('admin.items.image-item', ['file' => $fileGroups['main_image']->first()])
    </div>

    <h2 class="mb-2 mt-8 text-2xl font-bold text-slate-700 first:mt-0">Ďalšie obrázky:</h2>
    <div class="grid w-full grid-cols-2 gap-8">
        @foreach ($fileGroups['image'] as $image)
            @include('admin.items.image-item', ['file' => $image])
        @endforeach
    </div>

    <h2 class="mb-2 mt-8 text-2xl font-bold text-slate-700 first:mt-0">Súbory:</h2>
    <div class="grid w-full grid-cols-2 gap-8">
        @foreach ($fileGroups['file'] as $file)
            @include('admin.items.file-item', ['file' => $file])
        @endforeach
    </div>

@endsection
