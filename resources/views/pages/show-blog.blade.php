@extends('layout.master')

@section('page-title', __('Blogs') . ' - ' . $blog->title)

@section('page-content')

    <div class="section-banner">
        <div class="page-wrapper">
            <div class="mx-auto mb-8 flex items-center justify-between">
                <h1
                    class="xs:break-normal font-heading heading-shadow break-words text-4xl font-bold leading-relaxed text-white md:text-7xl">
                    {{ $blog->title }}</h1>
            </div>
            <div class="w-full">

                <div class="flex w-full justify-center">
                    <div class="bg-pallette-black p-8">
                        <div class="w-full">
                            <img class="w-full" src="{{ route('file-serve', $blog->image->slug) }}"
                                alt="{{ $blog->title }}">
                        </div>
                        <div class="mt-2">
                            <p class="text-right text-slate-300">{{ __('Created at') }}:
                                {{ slovakDateLong($blog->created_at) }}
                            </p>
                        </div>
                        <div class="mb-16 mt-8">
                            <h2 class="text-5xl font-bold text-white">{{ $blog->title }}</h2>
                        </div>

                        <div class="prose prose-white prose-img:p-6 prose-invert ml-auto mr-auto max-w-[1200px] text-xl">
                            {!! html_entity_decode($blog->text) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
