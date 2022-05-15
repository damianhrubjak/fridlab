@extends('layout.master')

@section('page-title', 'Blog')

@section('page-content')

    <div class="section-banner">
        <div class="page-wrapper">
            <div class="w-full">

                <div class="flex w-full justify-center">
                    <div class="bg-pallette-black p-8">
                        <div class="w-full">
                            <img class="w-full" src="{{ route('file-serve', $blog->image->slug) }}"
                                alt="{{ $blog->title }}">
                        </div>

                        <div class="my-16">
                            <h2 class="text-5xl font-bold text-white">{{ $blog->title }}</h2>
                        </div>

                        <div class="prose ml-auto mr-auto max-w-[1200px] break-all text-white">
                            {!! html_entity_decode($blog->text) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
