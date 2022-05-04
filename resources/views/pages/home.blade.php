@extends('layout.master')

@section('page-title', 'Ahoj')

@section('page-content')

    <section class="min-h-screen pt-28 pb-0">
        <img class="side-shape left-0" src="{{ asset('images/homepage-illustration-warm.svg') }}" alt="">

        <div class="page-wrapper flex h-full items-center justify-center">

            <div class="h-full w-1/2"></div>
            <div class="relative flex h-full w-1/2 items-center">
                <div class="z-10 w-full">
                    <h1 class="font-heading heading-shadow w-3/4 text-7xl leading-snug">Hello, we are good</h1>

                    <p class="mt-16 w-3/4 text-xl font-medium">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        <br><br>
                        Optio ea praesentium laudantium temporibus,
                        at adipisci porro iure dolore! Qui eos velit ipsa voluptatibus dolor aperiam quod eius et quas
                        ipsum.
                    </p>

                    <div class="mt-16">
                        <button class="font-heading bg-pallette-yellow text-pallette-black py-4 px-8 text-xl">Naše
                            projekty</button>
                    </div>
                </div>

            </div>
        </div>
        <img class="side-shape right-0 rotate-180" src="{{ asset('images/homepage-illustration-warm.svg') }}" alt="">

    </section>

    <section class="page-section pt-40">
        <div class="page-wrapper flex justify-between items-center">
            <div class="w-2/5">
                <h2 class="text-5xl font-heading heading-shadow mb-16">Kto sme?</h2>
                <h3 class="text-lg mb-8 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus odio
                    sint
                    numquam animi reiciendis
                    est
                    corrupti facere.</h3>
                <p>Sme partia ľudí, ktorá vo svojom voľnom čase organizuje rôzne podujatia pre študentov, absolventov,
                    vyučujúcich a priateľov Fakulty riadenia a informatiky. Aj keď každý z nás šiel na FRI s inými záujmami
                    a
                    študijnými predpokladmi, v súčasnosti nás FRI Club spája. Radi zlepšujeme úroveň študentského života na
                    UNIZA.</p>
            </div>

            <div class="w-3/5 pl-20">
                <img src="{{ asset('images/Dummy_image.jpg') }}" class="w-full" alt="PEOPLE">
            </div>
        </div>
    </section>

@endsection
