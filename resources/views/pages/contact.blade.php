@extends('layout.master')

@section('page-title', 'Kontakt')

@section('page-content')

    <section class="pt-28 pb-10">
        <div class="page-wrapper flex items-center justify-center gap-24 py-20">
            <div class="w-1/2">
                <h2 class="font-heading heading-shadow mb-16 text-5xl leading-[1.3]">Kontaktujte nás</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad quam perferendis obcaecati quisquam est iusto
                    eligendi aliquam delectus fugiat ab consequuntur minus officia, facilis quibusdam optio dicta unde
                    corporis perspiciatis.</p>
            </div>
            <div class="grid w-1/2 grid-cols-2 gap-10">
                <div>
                    <h3 class="font-heading text-pallette-yellow mb-2 text-lg tracking-wider">Adresa</h3>
                    <p>Žilina 8512, 012345</p>
                </div>
                <div>
                    <h3 class="font-heading text-pallette-yellow mb-2 text-lg tracking-wider">Telefón</h3>
                    <p><span class="text-pallette-yellow">+</span>421 952 145 369</p>
                </div>
                <div>
                    <h3 class="font-heading text-pallette-yellow mb-2 text-lg tracking-wider">Email</h3>
                    <a href="#">nejakyfajnymail@mail.com</a>
                </div>
                <div>
                    <h3 class="font-heading text-pallette-yellow mb-2 text-lg tracking-wider">Dostupnosť</h3>
                    <p>
                        Pondelok - Sobota <br>
                        8:00 - 18:00
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section bg-pallette-black border-pallette-blue border-y-2">
        <div class="page-wrapper" id="react-mount-contact-form"></div>
    </section>

    <section class="page-section">
        <div class="page-wrapper mb-16 text-center">
            <h2 class="font-heading heading-shadow text-5xl">Kde nás nájdete</h2>
        </div>
        <div class="h-[650px] w-full" id="map"></div>
    </section>

    <section class="page-section">
        <div class="page-wrapper text-center">
            <h3 class="font-heading text-3xl">„Can't Do It In Real Life? Do It On 3d printer."</h3>
            <p class="mt-5 text-right">Matúš Baláži -> 2024</p>
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
