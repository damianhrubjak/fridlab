@extends('layout.master')

@section('page-title', 'Blog')

@section('page-content')

    <section class="section-banner">
        <div class="page-wrapper">
            <h1 class="font-heading heading-shadow xxs:text-5xl text-4xl md:text-6xl">Blogy</h1>
        </div>
    </section>

    <section class="page-section">
        <div class="page-wrapper large">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 xl:grid-cols-3">
                @foreach ($blogs as $blog)
                    @include('items.blog-item', compact('blog'))
                @endforeach
            </div>
        </div>
    </section>



@endsection
