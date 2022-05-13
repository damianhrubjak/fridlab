@extends('admin.layout.master')

@section('page-title', 'Modely')

@section('page-content')

    <div class="mb-8 flex items-center justify-between">
        <h1 class="text-7xl font-bold text-slate-700">3D Modely</h1>
        <div class="rounded-md bg-slate-700">
            <a href="{{ route('admin-pages.modely.create') }}"><i
                    class="rotate-plus fa-solid fa-plus text-pallette-yellow cursor-pointer p-4 text-5xl transition duration-200 hover:rotate-90"></i></a>
        </div>
    </div>

    <div class="model-items grid gap-4">
        @include('admin.items.model-item')
        @include('admin.items.model-item')
        @include('admin.items.model-item')
        @include('admin.items.model-item')
        @include('admin.items.model-item')
        @include('admin.items.model-item')
        @include('admin.items.model-item')
        @include('admin.items.model-item')
        @include('admin.items.model-item')

    </div>


@endsection
