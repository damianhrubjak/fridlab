@extends('layout.master')

@section('page-title', '3D modely')

@section('page-content')

    <section class="section-banner">
        <div class="page-wrapper">
            <h1 class="font-heading heading-shadow xxs:text-5xl text-4xl md:text-6xl">{{ __('3D Models') }}</h1>
        </div>
    </section>

    <section class="page-section">
        <div class="page-wrapper large">
            <div class="grid grid-cols-1 gap-8 xl:grid-cols-2">
                @foreach ($models as $model)
                    @include('items.model-item', compact('model'))
                @endforeach
            </div>
        </div>
    </section>

@endsection
