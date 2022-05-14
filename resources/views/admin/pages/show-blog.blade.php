@extends('admin.layout.master')

@section('page-title', 'Blog - ' . $blog->title)

@section('page-content')

    @include('admin.inc.side-blogs', compact('blogs'))

    <div class="mx-auto mb-8 flex w-[90%] items-center justify-between">
        <h1 class="text-7xl font-bold text-slate-700">Vybraný blog</h1>

    </div>

    <div class="flex w-full justify-center">
        <div class="bg-pallette-black w-[90%] p-10">
            <div class="ml-auto mr-auto w-4/5"> <img class="w-full"
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
