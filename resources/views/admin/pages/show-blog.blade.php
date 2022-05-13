@extends('admin.layout.master')

@section('page-title', 'Blog - ' . $blog->title)

@section('page-content')

    <div class="mb-8 flex items-center justify-between">
        <h1 class="text-7xl font-bold text-slate-700">Vybraný blog</h1>

        <div class="flex gap-5">

            <div class="rounded-md bg-slate-700">
                <a href=""><i
                        class="fa-solid fa-trash text-pallette-yellow cursor-pointer p-4 text-5xl transition duration-200"></i></a>
            </div>

            <div class="rounded-md bg-slate-700">
                <a href=""><i
                        class="fa-solid fa-pen-to-square text-pallette-yellow cursor-pointer p-4 text-5xl transition duration-200"></i></a>
            </div>
        </div>
    </div>

    <div class="flex w-full justify-center">
        <div class="bg-pallette-black w-[90%] p-10">
            <div class="ml-auto mr-auto w-3/5"> <img class="w-full"
                    src="{{ route('file-thumbnail-serve', $blog->image->slug) }}" alt="{{ $blog->title }}">
            </div>

            <div class="my-16 text-center">
                <h2 class="text-5xl font-bold text-white">{{ $blog->title }}</h2>
            </div>

            <div class="prose ml-auto mr-auto max-w-[1200px] text-white">
                {!! html_entity_decode($blog->text) !!}
            </div>
        </div>
    </div>

@endsection
