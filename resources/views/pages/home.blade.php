@extends('layout.master')

@section('page-title', 'Ahoj')

@section('page-content')


    <section class="page-section h-screen w-full">
        <div class="page-wrapper flex h-full items-center justify-center">

            <div class="h-full w-1/2"></div>
            <div class="relative flex h-full w-1/2 items-center">
                <div class="z-10 w-full">
                    <h1 class="font-heading text-8xl leading-snug">Hello, we are good</h1>

                    <p class="mt-16 w-3/4 text-2xl font-medium">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio ea praesentium laudantium temporibus,
                        at adipisci porro iure dolore! Qui eos velit ipsa voluptatibus dolor aperiam quod eius et quas
                        ipsum.
                    </p>

                    <div class="mt-16">
                        <button class="font-heading text-body bg-cyan-300 py-4 px-8 text-xl">Naše
                            projekty</button>
                    </div>
                </div>

            </div>
        </div>
        <img class="absolute right-0 top-0 h-full opacity-50" src="{{ asset('images/homepage-illustration.svg') }}" alt="">
    </section>

@endsection
