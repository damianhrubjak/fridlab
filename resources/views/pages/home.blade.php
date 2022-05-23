@extends('layout.master')

@section('page-title', __('Home'))

@section('page-content')

    {{-- HOME --}}
    <section class="relative flex min-h-screen items-stretch pt-40 pb-10 sm:pt-32">
        <img class="side-shape left-0" src="{{ asset('images/homepage-illustration-cold-2.svg') }}" alt="">

        <div class="page-wrapper flex flex-col items-center justify-center gap-16 self-stretch xl:flex-row">

            <div class="w-full xl:w-1/2">

                <div class="relative flex h-full w-full items-end justify-center">

                    <div class="lax-printer flex items-center justify-center">
                        <img src="{{ asset('images/printer.png') }}" alt="Tlačiareň" class="xs:w-96 w-64 sm:w-[512px]">
                        <div class="xs:-translate-x-6 xs:translate-y-0 absolute -translate-y-1 -translate-x-5">
                            <img class="lax-printer-head xs:w-16 w-12 sm:w-24" src="{{ asset('images/head.png') }}" alt="">
                        </div>
                    </div>

                    <div class="xs:-translate-y-20 absolute -translate-y-14 sm:-translate-y-28">
                        <img src="{{ asset('images/robot.png') }}" alt=""
                            class="lax-robot xs:w-24 w-16 overflow-hidden object-cover object-bottom sm:w-36">
                    </div>
                </div>
            </div>
            <div class="relative flex w-full max-w-2xl items-center xl:w-1/2">
                <div class="z-10 w-full">
                    <h1 class="font-heading heading-shadow xxs:text-5xl w-full break-words text-4xl md:text-6xl lg:w-5/6"
                        style="line-height: 1.25">{{ __('FriDLab welcomes you') }}</h1>

                    <p class="mt-8 w-full text-justify text-xl font-medium md:mt-16 lg:w-3/4">
                        {{ __('Our 3D printing laboratory has been operating for several years and during that time we have managed to achieve a lot of success. We have helped hospitals, colleagues, but also many members of the 3D community. At present, there are 18 3D printers in our laboratory, including interesting prototypes.') }}

                        <br><br>
                        <span class="uppercase">{{ __('JOIN US!') }}</span>
                    </p>

                    <div class="mt-8 md:mt-16">
                        <a class="cta-button w-max"
                            href="{{ route('fe-pages.3d-models', ['language' => app()->getLocale()]) }}">
                            <div class="content">{{ __('3D models') }}</div>
                            <div class="arrow">></div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <img class="side-shape right-0 rotate-180" src="{{ asset('images/homepage-illustration-cold-2.svg') }}" alt="">

    </section>

    {{-- ABOUT US --}}
    <section class="page-section">
        <div class="page-wrapper flex flex-col items-center justify-between lg:flex-row">
            <div class="w-full max-w-2xl lg:w-2/5">
                <h2 class="font-heading heading-shadow xxs:text-5xl mb-8 break-words text-4xl sm:mb-16">
                    {{ __('Who are we ?') }}</h2>
                <h3 class="mb-8 text-lg font-bold">
                    {{ __('We are enthusiasts in 3D printing and we are trying to create a community that will support each other in the use of this creative technology and, most importantly, have fun doing so.') }}
                </h3>
                <p>{{ __('We want to advance and improve ourselves and our skills, offer space for creativity and also point out the versatility of using 3D printing and the skills resulting from it.') }}
                </p>
            </div>

            <div class="mt-8 w-full max-w-2xl sm:mt-16 lg:mt-0 lg:w-3/5 lg:pl-20">
                <img src="{{ asset('images/Dummy_image.jpg') }}" class="pixel-border w-full" alt="PEOPLE">
            </div>
        </div>
    </section>

    {{-- MLESTONES --}}
    <section class="page-section bg-pallette-black custom-pixel-art border-pallette-blue border-y-2">

        {{-- DINO --}}
        <img class="absolute left-16 top-48 hidden w-56 rotate-12 opacity-40 lg:w-80 2xl:block"
            src="{{ asset('images/pixel-art/dino-lose.png') }}" alt="">

        {{-- PAC-MAN --}}
        <img class="absolute right-20 top-1/4 hidden w-48 rotate-12 -scale-x-[1] opacity-40 sm:block lg:w-64"
            src="{{ asset('images/pixel-art/pacman.png') }}" alt="">

        {{-- MARIO --}}
        <img class="absolute top-1/2 left-16 hidden w-56 opacity-40 sm:block lg:w-80"
            src="{{ asset('images/pixel-art/mario.png') }}" alt="MARIO">

        {{-- GHOST --}}
        <img class="absolute right-32 top-3/4 hidden w-48 scale-x-[-1] opacity-40 sm:block lg:w-64"
            src="{{ asset('images/pixel-art/ghost.png') }}" alt="">

        {{-- CACTUS --}}
        <img class="absolute left-32 bottom-32 hidden w-32 opacity-40 lg:w-40 2xl:block"
            src="{{ asset('images/pixel-art/cactus.png') }}" alt="">


        <div class="page-wrapper">

            <h2 class="font-heading heading-shadow xxs:text-5xl mb-16 text-center text-4xl md:mb-32 md:text-6xl">
                {{ __('Our way') }}
            </h2>

            @php
                $milestones = [
                    [
                        'image' => asset('images/milestones/2014-prva-tlaciaren.jpg'),
                        'heading' => __('2014 - The first 3D printer'),
                        'text' => __('The first 3D printer at the Department of Technical Cybernetics at the Faculty of Management and Informatics was Ultimaker 2, which uses printing strings with a diameter of 2.85 mm for printing. Over time, we have redesigned it and currently it can print from a filament with a standard size of 1.75mm.'),
                    ],
                    [
                        'image' => asset('images/milestones/2016-inmoov.png'),
                        'heading' => '2016 - Raise3D N2 Plus',
                        'text' => __('Thanks to grant programs, we were able to obtain funding to expand laboratory equipment. The Raise3D N2 Plus 3D printer, which is exceptional with a double extruder, has become a new addition. With the help of her, we managed to create a humanoid robot called InMoov within the project teaching.'),
                    ],
                    [
                        'image' => asset('images/milestones/2017-prusa.png'),
                        'heading' => __('2017 - First Prusa'),
                        'text' => __('The great help of the faculty has enabled us to develop our equipment with the world-famous brand of printers Prusa model i3 MK3, which ranks among some of the best FDM / FFF 3D printers to date.'),
                    ],
                    [
                        'image' => asset('images/milestones/2018-hang-printer.jpg'),
                        'heading' => __('2018 - Hangprinter'),
                        'text' => __("This year, a group of 3D printing was formed at FRI consisting of students and teachers. At the same time, the first bachelor's and master's theses with a topic focused on 3D printing are created. One of these works is a 3D printer of the hanging type - Hangprinter, which is unique with a motion system using ropes."),
                    ],
                    [
                        'image' => asset('images/milestones/2019-3dtlac-workshopy.jpg'),
                        'heading' => __('2019 - Subject 3D printing'),
                        'text' => __('A sufficient amount of accumulated experience and equipment enabled us to run a selective subject of 3D printing for students of all study programs. We organized the first School of 3D Printing for high school students. This event has been held regularly since then.'),
                    ],
                    [
                        'image' => asset('images/milestones/2020-stity.jpg'),
                        'heading' => __('2020 - FRI shields'),
                        'text' => __('Since a worldwide coronavirus pandemic broke out this year, we decided to get involved in the fight against it. We produced 3,500 pieces of protective FRI shields, which we donated to hospitals. With the advent of the vaccine, we produced 500 pieces of FRI vaccine racks. At the same time, this time forced us to launch an online School of 3D Printing.'),
                    ],
                    [
                        'image' => asset('images/milestones/2021-fridlab.png'),
                        'heading' => __('2021 - FriDLab'),
                        'text' => __('Thanks to a group of students and teachers with the same enthusiasm for 3D printing, a new 3D printing laboratory was built at FRI - FriDLab. Anyone can find this lab in room RB102.'),
                    ],
                    [
                        'image' => asset('images/milestones/2022-globallogic.png'),
                        'heading' => __('2022 - GlobalLogic'),
                        'text' => __('Establishing cooperation with GlobalLogic Slovakia has enabled us to improve the premises of FriDLab and at the same time expand our range of 3D printers.'),
                    ],
                ];
            @endphp

            @foreach ($milestones as $milestone)
                @include('items.roadmap-item', compact('milestone'))
            @endforeach
        </div>
    </section>

    {{-- SPONSORS --}}
    <section class="page-section bg-[#a0afcc]">
        <div class="page-wrapper">
            <h2 class="font-heading heading-shadow xs:text-5xl mb-16 break-words text-4xl text-white">
                {{ __('Sponsors') }}</h2>

            <div class="splide relative mx-auto w-full sm:w-[calc(100%-8rem)]" aria-label="Slide Container Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($sponsors as $sponsor)
                            <li class="splide__slide">
                                <div class="splide__slide__container flex h-48 items-center justify-center">
                                    <img class="h-full w-full object-contain"
                                        src="{{ route('file-serve', $sponsor->image->slug) }}">
                                </div>
                                <div class="heading-yellow mt-4 text-center text-xl text-white">
                                    {{ $sponsor->name }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="splide__arrows mt-6 flex w-full items-center justify-between">
                    <button
                        class="splide__arrow splide__arrow--prev heading-shadow font-heading top-1/2 left-0 z-20 text-5xl text-white sm:absolute sm:-ml-16">
                        {{ '<' }}
                    </button>
                    <button
                        class="splide__arrow splide__arrow--next heading-shadow font-heading top-1/2 right-0 z-20 text-5xl text-white sm:absolute sm:-mr-14">
                        {{ '>' }}
                    </button>

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
