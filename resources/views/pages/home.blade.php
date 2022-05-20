@extends('layout.master')

@section('page-title', 'Domov')

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
                    <h1 class="font-heading heading-shadow xxs:text-5xl w-full break-words text-4xl md:text-7xl lg:w-5/6"
                        style="line-height: 1.25">{{ __('Víta ťa FriDLab') }}</h1>

                    <p class="mt-8 w-full text-justify text-xl font-medium md:mt-16 lg:w-3/4">
                        {{ __("Naše laboratórium 3D tlače funguje už niekoľko rokov a za ten čas sa nám podarilo dosiahnuť veľa
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        úspechov. Pomáhali sme nemocniciam, kolegom, ale aj mnohým členom 3D komunity. V sučasnosti sa v
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        našom laboratóriu nachádza 18 3D tlačiarní vrátane zaujímavých prototypov.") }}

                        <br><br>
                        <span class="uppercase">{{ __('PRIDAJ SA K NÁM!') }}</span>
                    </p>

                    <div class="mt-8 md:mt-16">
                        <a class="cta-button w-max" href="{{ route('fe-pages.3d-models') }}">
                            <div class="content">{{ __('3D modely') }}</div>
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
                    {{ __('Kto sme ?') }}</h2>
                <h3 class="mb-8 text-lg font-bold">
                    {{ __('Sme nadšenci do 3D tlače a snažíme sa vytvoriť komunitu, ktorá sa bude navzájom podporovať vo využívaní tejto kreatívnej technológie a hlavne sa pri tom zabávať.') }}
                </h3>
                <p>{{ __('Chceme napredovať a zdokonaľovať seba i svoje zručnosti, ponúknuť priestor kreativite a taktiež poukázať na všestrannosť využitia 3D tlače a zručností z nej vyplývajúcich.') }}
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
                {{ __('Naša cesta') }}
            </h2>

            @php
                $milestones = [
                    [
                        'image' => asset('images/milestones/2014-prva-tlaciaren.jpg'),
                        'heading' => '2014 - Prvá 3D tlačiareň',
                        'text' => 'Prvou 3D tlačiarňou na Katedre technickej kybernetiky na Fakulte riadenia a informatiky bola Ultimaker 2, ktorá na tlač používa tlačové struny s priemerom 2.85mm. Postupom času sme ju prerobili a v súčasnosti dokáže tlačiť z filamentu so štandardným rozmerom 1.75mm.',
                    ],
                    [
                        'image' => asset('images/milestones/2016-inmoov.png'),
                        'heading' => '2016 - Raise3D N2 Plus',
                        'text' => 'Vďaka grantovým programom sa nám podarilo získať financie na rozšírenie vybavenia laboratória. Novým prírastkom sa stala 3D tlačiareň Raise3D N2 Plus, ktorá je výnimočná dvojitým extrúderom. Pomocou nej sa nám podarilo vytvoriť v rámci projektovej výučby humanoidného robota, ktorý sa volá InMoov.',
                    ],
                    [
                        'image' => asset('images/milestones/2017-prusa.png'),
                        'heading' => '2017 - Prvá Prusa',
                        'text' => 'Veľká pomoc fakulty nám umožnila rozvinúť naše vybavenie o svetoznámu značku tlačiarní Prusa model i3 MK3, ktoré sa radia medzi jedny z najlepších FDM/FFF 3D tlačiarní dodnes.',
                    ],
                    [
                        'image' => asset('images/milestones/2018-hang-printer.jpg'),
                        'heading' => '2018 - Hangprinter',
                        'text' => 'V tomto roku sa sformovala skupina 3D tlače na FRI pozostávajúca zo študentov a pedagógov. Zároveň vznikajú prvé bakalárske a diplomové práce s tématikou zameranou na 3D tlač. Jednou z týchto prác je 3D tlačiareň závesného typu - Hangprinter, ktorá je unikátna pohybovým systémom pomocou lán.',
                    ],
                    [
                        'image' => asset('images/milestones/2019-3dtlac-workshopy.jpg'),
                        'heading' => '2019 - Predmet 3D tlač',
                        'text' => 'Dostatočné množstvo nazbieraných skúseností a vybavenia nám umožnilo spustiť výberový predmet 3D tlač pre študentov všetkých študijných programov. Zorganizovali sme prvú Školu 3D tlače pre študentov stredných škôl. Táto akcia sa odvtedy uskutočnuje pravidelne.',
                    ],
                    [
                        'image' => asset('images/milestones/2020-stity.jpg'),
                        'heading' => '2020 - FRI štíty',
                        'text' => 'Keďže v tomto roku vypukla celosvetová pandémia koronavírusu, tak sme sa rozhodli zapojiť do boja proti nej. Vyrobili sme 3500 kusov ochranných FRI štítov, ktoré sme darovali nemocniciam. S príchodom vakcíny sme vyrobili 500 kusov FRI stojanov na vakcíny. Zároveň nás táto doba donútila spustiť online Školu 3D tlače.',
                    ],
                    [
                        'image' => asset('images/milestones/2021-fridlab.png'),
                        'heading' => '2021 - FriDLab',
                        'text' => 'Vďaka partii študentov a pedagógov s rovnakým nadšením pre 3D tlač sa vybudovalo nové laboratórium 3D tlače na FRI - FriDLab. Toto labolatórium môže ktokoľvek nájsť v miestnosti RB102.',
                    ],
                    [
                        'image' => asset('images/milestones/2022-globallogic.png'),
                        'heading' => '2022 - GlobalLogic',
                        'text' => 'Nadviazenie spolupráce so spoločnosťou GlobalLogic Slovakia nám umožnilo vylepšiť priestory FriDLabu a zároveň rozšíriť náš sortiment 3D tlačiarní.',
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
                {{ __('Sponzori') }}</h2>

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
