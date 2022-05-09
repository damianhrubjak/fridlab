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

    </section>

@endsection

@section('scripts')
    <script src="{{ request()->getSchemeAndHttpHost() . mix('js/react-contact-form.js') }}"></script>
@endsection
