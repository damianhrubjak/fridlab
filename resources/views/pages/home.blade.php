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

                    <div class="absolute -translate-y-32">
                        <img src="{{ asset('images/robot.png') }}" alt=""
                            class="lax-robot w-36 overflow-hidden object-cover object-bottom">
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
                        <a class="cta-button w-max" href="{{ route('fe-pages.3d-models') }}">
                            <div class="content">3D modely</div>
                            <div class="arrow">></div>
                        </a>
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
                        'image' => asset('images/milestones/2014-prva-tlaciaren.jpg'),
                        'heading' => '2014 - Prvá tlačiareň',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Officiis, quia a repellendus ad qui modi illo fugit dolore doloremque fugiat molestias unde beatae ipsam ipsa, harum quibusdam vero dicta. Esse? Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Sapiente molestiae totam maxime cupiditate, amet adipisci hic eum repudiandae, id accusantium laudantium obcaecati nisi excepturi consequatur animi vel natus quibusdam odio.',
                    ],
                    [
                        'image' => asset('images/milestones/2018-hang-printer.jpg'),
                        'heading' => '2018 - Hangprinter',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Officiis, quia a repellendus ad qui modi illo fugit dolore doloremque fugiat molestias unde beatae ipsam ipsa, harum quibusdam vero dicta. Esse? Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Sapiente molestiae totam maxime cupiditate, amet adipisci hic eum repudiandae, id accusantium laudantium obcaecati nisi excepturi consequatur animi vel natus quibusdam odio.',
                    ],
                    [
                        'image' => asset('images/milestones/2019-3dtlac-workshopy.jpg'),
                        'heading' => '2019 - Predmet 3D tlač',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Officiis, quia a repellendus ad qui modi illo fugit dolore doloremque fugiat molestias unde beatae ipsam ipsa, harum quibusdam vero dicta. Esse? Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Sapiente molestiae totam maxime cupiditate, amet adipisci hic eum repudiandae, id accusantium laudantium obcaecati nisi excepturi consequatur animi vel natus quibusdam odio.',
                    ],
                    [
                        'image' => asset('images/milestones/2020-stity.jpg'),
                        'heading' => '2020 - FRI štíty',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Officiis, quia a repellendus ad qui modi illo fugit dolore doloremque fugiat molestias unde beatae ipsam ipsa, harum quibusdam vero dicta. Esse? Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Sapiente molestiae totam maxime cupiditate, amet adipisci hic eum repudiandae, id accusantium laudantium obcaecati nisi excepturi consequatur animi vel natus quibusdam odio.',
                    ],
                    [
                        'image' => asset('images/milestones/2021-fridlab.png'),
                        'heading' => '2021 - FriDLab',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Officiis, quia a repellendus ad qui modi illo fugit dolore doloremque fugiat molestias unde beatae ipsam ipsa, harum quibusdam vero dicta. Esse? Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Sapiente molestiae totam maxime cupiditate, amet adipisci hic eum repudiandae, id accusantium laudantium obcaecati nisi excepturi consequatur animi vel natus quibusdam odio.',
                    ],
                    [
                        'image' => asset('images/milestones/2022-globallogic.png'),
                        'heading' => '2022 - GlobalLogic',
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
                        @foreach ($sponsors as $sponsor)
                            <li class="splide__slide">
                                <div class="splide__slide__container h-52">
                                    <img class="h-full" src="{{ route('file-serve', $sponsor->image->slug) }}">
                                </div>
                                <div class="mt-4 text-center text-lg font-bold">
                                    {{ $sponsor->name }}
                                </div>
                            </li>
                        @endforeach
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
