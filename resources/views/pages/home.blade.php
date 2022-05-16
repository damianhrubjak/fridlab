@extends('layout.master')

@section('page-title', 'Domov')

@section('page-content')

    <section class="relative flex min-h-screen items-stretch pt-28 pb-10">
        <img class="side-shape left-0" src="{{ asset('images/homepage-illustration-cold-2.svg') }}" alt="">

        <div class="page-wrapper flex items-center justify-center gap-16 self-stretch">

            <div class="w-1/2">

                <div class="relative flex h-full w-full items-end justify-center">

                    <div class="lax-printer flex items-center justify-center">
                        <img src="{{ asset('images/printer.png') }}" alt="">
                        <div class="absolute -translate-x-6">
                            <img class="lax-printer-head" src="{{ asset('images/head.png') }}" alt="">
                        </div>
                    </div>

                    <div class="absolute -translate-x-4 -translate-y-32">
                        <img src="{{ asset('images/robot.png') }}" alt=""
                            class="lax-robot w-28 overflow-hidden object-cover object-bottom">
                    </div>
                </div>
            </div>
            <div class="relative flex w-1/2 items-center">
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
                        <button class="cta-button">
                            <div class="content">Naše projekty</div>
                            <div class="arrow">></div>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <img class="side-shape right-0 rotate-180" src="{{ asset('images/homepage-illustration-cold-2.svg') }}" alt="">

    </section>

    <section class="page-section">
        <div class="page-wrapper flex items-center justify-between">
            <div class="w-2/5">
                <h2 class="font-heading heading-shadow mb-16 text-5xl">Kto sme?</h2>
                <h3 class="mb-8 text-lg font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus odio
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
                <img src="{{ asset('images/Dummy_image.jpg') }}" class="pixel-border w-full" alt="PEOPLE">
            </div>
        </div>
    </section>

    <section class="page-section bg-pallette-black custom-pixel-art border-pallette-blue border-y-2">

        {{-- DINO --}}
        <img class="absolute left-16 top-64 w-80 rotate-12 opacity-40" src="{{ asset('images/pixel-art/dino-lose.png') }}"
            alt="">

        {{-- CACTUS --}}
        <img class="absolute right-64 bottom-32 w-40 opacity-40" src="{{ asset('images/pixel-art/cactus.png') }}" alt="">

        {{-- PAC-MAN --}}
        <img class="absolute right-20 top-1/3 w-64 rotate-12 -scale-x-[1] opacity-40"
            src="{{ asset('images/pixel-art/pacman.png') }}" alt="">

        {{-- MARIO --}}
        <img class="absolute top-[1130px] left-14 scale-75 opacity-40" src="{{ asset('images/pixel-art/mario.png') }}"
            alt="MARIO">

        {{-- GHOST --}}
        <img class="absolute left-16 bottom-1/3 w-64 opacity-40" src="{{ asset('images/pixel-art/ghost.png') }}" alt="">

        <div class="page-wrapper">

            <h2 class="font-heading heading-shadow mb-32 text-center text-6xl">Naša cesta</h2>

            @php
                $milestones = [
                    [
                        'image' => asset('images/milestones/milestone-1.jpg'),
                        'heading' => 'Vypratanie priestorov',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Officiis, quia a repellendus ad qui modi illo fugit dolore doloremque fugiat molestias unde beatae ipsam ipsa, harum quibusdam vero dicta. Esse? Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Sapiente molestiae totam maxime cupiditate, amet adipisci hic eum repudiandae, id accusantium laudantium obcaecati nisi excepturi consequatur animi vel natus quibusdam odio.',
                    ],
                    [
                        'image' => asset('images/milestones/milestone-2.jpg'),
                        'heading' => 'Upravenie priestorov',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Officiis, quia a repellendus ad qui modi illo fugit dolore doloremque fugiat molestias unde beatae ipsam ipsa, harum quibusdam vero dicta. Esse? Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Sapiente molestiae totam maxime cupiditate, amet adipisci hic eum repudiandae, id accusantium laudantium obcaecati nisi excepturi consequatur animi vel natus quibusdam odio.',
                    ],
                    [
                        'image' => asset('images/milestones/milestone-3.jpg'),
                        'heading' => 'Malovanie',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Officiis, quia a repellendus ad qui modi illo fugit dolore doloremque fugiat molestias unde beatae ipsam ipsa, harum quibusdam vero dicta. Esse? Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Sapiente molestiae totam maxime cupiditate, amet adipisci hic eum repudiandae, id accusantium laudantium obcaecati nisi excepturi consequatur animi vel natus quibusdam odio.',
                    ],
                    [
                        'image' => asset('images/milestones/milestone-4.jpg'),
                        'heading' => 'Priprava tlaciarni',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Officiis, quia a repellendus ad qui modi illo fugit dolore doloremque fugiat molestias unde beatae ipsam ipsa, harum quibusdam vero dicta. Esse? Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Sapiente molestiae totam maxime cupiditate, amet adipisci hic eum repudiandae, id accusantium laudantium obcaecati nisi excepturi consequatur animi vel natus quibusdam odio.',
                    ],
                    [
                        'image' => asset('images/milestones/milestone-5.jpg'),
                        'heading' => 'Tlacenie',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Officiis, quia a repellendus ad qui modi illo fugit dolore doloremque fugiat molestias unde beatae ipsam ipsa, harum quibusdam vero dicta. Esse? Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Sapiente molestiae totam maxime cupiditate, amet adipisci hic eum repudiandae, id accusantium laudantium obcaecati nisi excepturi consequatur animi vel natus quibusdam odio.',
                    ],
                ];
            @endphp

            @foreach ($milestones as $milestone)
                @include('items.roadmap-item', compact('milestone'))
            @endforeach
        </div>
    </section>

    <section class="page-section">
        <div class="page-wrapper">
            <h2 class="font-heading heading-shadow mb-16 text-5xl">Sponzori</h2>

            <div class="splide relative w-full" aria-label="Slide Container Example">
                <div class="splide__arrows">
                    <button
                        class="splide__arrow splide__arrow--prev heading-shadow font-heading absolute top-1/2 left-0 z-20 -ml-24 text-5xl">
                        {{ '<' }}
                    </button>
                    <button
                        class="splide__arrow splide__arrow--next heading-shadow font-heading absolute top-1/2 right-0 z-20 -mr-24 text-5xl">
                        {{ '>' }}
                    </button>

                </div>

                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="splide__slide__container h-52">
                                <img class="h-full"
                                    src="{{ asset('images/sponsors/globallogic-logo-vector.png') }}">
                            </div>
                            <div class="mt-4 text-center text-lg font-bold">
                                TOTOK JE GLOBAL GOGIC
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="splide__slide__container h-52">
                                <img class="h-full" src="{{ asset('images/sponsors/kia.jpg') }}">
                            </div>
                            <div class="mt-4 text-center text-lg font-bold">
                                TOTOK JE KIA
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="splide__slide__container h-52">
                                <img class="h-full" src="{{ asset('images/sponsors/kia1.webp') }}">
                            </div>
                            <div class="mt-4 text-center text-lg font-bold">
                                TOTOK JE ZASA KIA
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="splide__slide__container h-52">
                                <img class="h-full" src="{{ asset('images/sponsors/stiahnuť (1).png') }}">
                            </div>
                            <div class="mt-4 text-center text-lg font-bold">
                                TOTOK JE NEVIEM CO
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="splide__slide__container h-52">
                                <img class="h-full" src="{{ asset('images/sponsors/stiahnuť.png') }}">
                            </div>
                            <div class="mt-4 text-center text-lg font-bold">
                                TOTOK JE ZAS NEVIEM CO
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="splide__slide__container h-52">
                                <img class="h-full" src="{{ asset('images/sponsors/tatra.webp') }}">
                            </div>
                            <div class="mt-4 text-center text-lg font-bold">
                                TOTOK JE TATRA BANKA
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
    <link rel="stylesheet" href="{{ request()->getSchemeAndHttpHost() . mix('css/vendor/splide-core.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ request()->getSchemeAndHttpHost() . mix('js/splide.js') }}"></script>
    <script src="{{ request()->getSchemeAndHttpHost() . mix('js/lax.js') }}"></script>
@endsection
