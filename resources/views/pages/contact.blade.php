@extends('layout.master')

@section('page-title', 'Kontakt')

@section('page-content')

    <section class="pt-28 pb-10">
        <div
            class="page-wrapper flex flex-col items-center justify-center gap-16 pt-16 sm:py-10 lg:flex-row lg:py-20 xl:gap-24">
            <div class="w-full max-w-2xl lg:w-1/3 xl:w-2/5">
                <h1 class="font-heading heading-shadow mb-16 break-words text-3xl leading-[1.3] sm:break-normal xl:text-5xl">
                    Kontakty
                </h1>
                <p>V prípade akýchkoľvek otázok nás neváhajte kontaktovať. <br> Volajte, píšte, mailujte, alebo použite
                    formulár nižšie. </p>
                <p class="font-heading block w-max rotate-90 text-xl">{{ '>' }}</p>


            </div>
            <div class="grid w-full max-w-2xl gap-10 sm:grid-cols-2 lg:w-2/3 xl:w-3/5">
                <div class="xxs:flex-row flex flex-col items-center justify-between gap-3">
                    <div class="xxs:w-20 w-full">
                        <div class="w-16">
                            @include('components.map-icon')
                        </div>
                    </div>
                    <div class="xxs:w-[calc(100%-5rem)] w-full">

                        <h3 class="font-heading text-pallette-yellow mb-2 text-lg tracking-wider">Adresa</h3>
                        <p>Univerzitná 8215/1 <br> 010 26 Žilina</p>
                    </div>
                </div>


                <div class="xxs:flex-row flex flex-col items-center justify-between gap-3">
                    <div class="xxs:w-20 w-full">
                        <div class="h-20 w-max">
                            @include('components.phone-icon')
                        </div>
                    </div>
                    <div class="xxs:w-[calc(100%-5rem)] w-full">

                        <h3 class="font-heading text-pallette-yellow mb-2 text-lg tracking-wider">Telefón</h3>
                        <a href="tel:+421 952 145 369"><span class="text-pallette-yellow">+</span>421 952 145 369</a>
                    </div>
                </div>
                <div class="xxs:flex-row flex flex-col items-center justify-between gap-3">
                    <div class="xxs:w-20 flex w-full items-center">
                        <p class="font-heading text-pallette-yellow h-20 text-7xl">@</p>
                    </div>
                    <div class="xxs:w-[calc(100%-5rem)] w-full">

                        <h3 class="font-heading text-pallette-yellow mb-2 text-lg tracking-wider">Email</h3>
                        <a href="mailto:{{ env('ADMIN_EMAIL') }}" class="break-words">{{ env('ADMIN_EMAIL') }}</a>
                    </div>
                </div>
                <div class="xxs:flex-row flex flex-col items-center justify-between gap-3">
                    <div class="xxs:w-20 w-full">
                        <div class="w-16">
                            @include('components.clock-icon')
                        </div>
                    </div>
                    <div class="xxs:w-[calc(100%-5rem)] w-full">

                        <h3 class="font-heading text-pallette-yellow mb-2 text-lg tracking-wider">Dostupnosť</h3>
                        <p>
                            Pondelok - Piatok<br>
                            8:00 - 16:00
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section bg-pallette-black border-pallette-blue border-y-2">
        <div class="page-wrapper" id="react-mount-contact-form"></div>
    </section>

    <section class="page-section">
        <div class="page-wrapper mb-16 text-center">
            <h2 class="font-heading heading-shadow text-3xl xl:text-5xl">Kde nás nájdete</h2>
        </div>
        <div class="h-72 w-full sm:h-96 xl:h-[650px]" id="map"></div>
    </section>

    <section class="page-section">
        <div class="page-wrapper text-center">
            <h3 class="font-heading xs:text-3xl text-2xl">„Can't Do It In Real Life? Do It On 3d printer."</h3>
            <p class="mt-5 text-right">2024, Matúš Baláži</p>
        </div>
    </section>

@endsection

@section('scripts')
    <script src="{{ request()->getSchemeAndHttpHost() . mix('js/react-contact-form.js') }}"></script>
    <script src="{{ request()->getSchemeAndHttpHost() . mix('js/map.js') }}"></script>

@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.8.0/leaflet.min.css"
        integrity="sha512-oIQ0EBio8LJupRpgmDsIsvm0Fsr6c3XNHLB7at5xb+Cf6eQuCX9xuX8XXGRIcokNgdqL1ms7nqbQ6ryXMGxXpg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>

@endsection
