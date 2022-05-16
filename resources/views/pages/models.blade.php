@extends('layout.master')

@section('page-title', '3D modely')

@section('page-content')

    <section class="section-banner">
        <div class="page-wrapper">
            <h1 class="font-heading heading-shadow text-6xl">3D Modely</h1>
        </div>
    </section>

    <section class="page-section">
        <div class="page-wrapper large">
            <div class="grid grid-cols-3 gap-8">
                @foreach ($models as $model)
                    @include('items.model-item', compact('model'))
                @endforeach
            </div>
        </div>
    </section>

@endsection
