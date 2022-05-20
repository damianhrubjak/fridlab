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

    @if (Session::get('success_delete'))
        <div class="page-wrapper">

            <div class="mb-5 w-4/5 bg-green-700 bg-opacity-50 py-2 px-5 text-2xl">
                <div class="flex items-center justify-between">
                    <p class="font-bold text-white">Blog bol úspešne vymazaný!</p>
                    <i class="fa-solid fa-circle-check text-white"></i>
                </div>
            </div>
        </div>
    @endif

    <div class="blog-items grid gap-4">
        @foreach ($blogs as $blog)
            @include('admin.items.blog-item', compact('blog'))
        @endforeach
    </div>


@endsection
