@extends('admin.layout.master')

@section('page-title', 'Blog')

@section('page-content')

    <div class="mb-8 flex items-center justify-between">
        <h1 class="text-7xl font-bold text-slate-700">BLOGY</h1>
        <div class="rounded-md bg-slate-700">
            <a href="{{ route('admin-pages.blogy.create') }}"><i
                    class="rotate-plus fa-solid fa-plus text-pallette-yellow cursor-pointer p-4 text-5xl transition duration-200 hover:rotate-90"></i></a>
        </div>
    </div>

    <div class="blog-items grid gap-4">
        @foreach ($blogs as $blog)
            @include('admin.items.blog-item', compact('blog'))
        @endforeach
    </div>


@endsection
