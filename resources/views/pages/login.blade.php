@extends('layout.no-header-footer')

@section('page-title', 'Prihlásenie do CMS')

@section('page-content')

    <section class="bg-pallette-black flex min-h-screen w-full">

        <div class="w-7/12 self-stretch">
            <img src="{{ asset('images/login.svg') }}" alt="" class="h-full object-cover opacity-75">
        </div>

        <div class="flex w-5/12 items-center justify-center self-stretch">
            <div class="bg-pallette-white w-[28rem] p-4">
                <h1 class="font-heading mb-8 text-xl font-bold">
                    Prosím, prihláste sa...
                </h1>

                <form action="" method="post">
                    <div class="input-control">
                        <label for="" class="label-control">E-mail:</label>
                        <input for="" class="input-content-control" name="email" placeholder="Sem zadajte e-mail" />
                    </div>
                    <div class="input-control mt-8">
                        <label for="" class="label-control">Heslo:</label>
                        <input for="" class="input-content-control" name="email" placeholder="Sem zadajte heslo" />
                    </div>
                    <div class="mt-16">
                        <button class="cta-button mx-auto">
                            <div class="content">Prihlásiť sa</div>
                            <div class="arrow">></div>
                        </button>
                    </div>
                </form>
            </div>
            <img src="{{ asset('images/Logo/FriDLab-logo-transparent.svg') }}" class="absolute right-8 top-8 w-48" alt="">
        </div>

    </section>

@endsection
