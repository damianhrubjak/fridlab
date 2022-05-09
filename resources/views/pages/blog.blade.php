@extends('layout.master')

@section('page-title', 'Blog')

@section('page-content')

    <section class="section-banner">
        <div class="page-wrapper">
            <h1 class="font-heading heading-shadow text-6xl">Blogy</h1>
        </div>
    </section>

    <section class="page-section">
        <div class="page-wrapper large">
            <div class="grid grid-cols-3 gap-8">
                @foreach ($blogs as $blog)
                    @include('items.blog-item', compact('blog'))
                @endforeach
            </div>
        </div>
    </section>



@endsection
