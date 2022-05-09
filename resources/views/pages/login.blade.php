@extends('layout.no-header-footer')

@section('page-title', 'Prihlásenie do CMS')

@section('page-content')

    <section class="bg-pallette-black flex min-h-screen w-full">

        <div class="w-7/12 self-stretch">
            <img src="{{ asset('images/login.svg') }}" alt="" class="h-full object-cover opacity-75">
        </div>

        <div class="flex w-5/12 items-center justify-center self-stretch">
            <div class="bg-pallette-white w-[28rem] p-4">

                @if ($errors->any())
                    <div class="mb-8 bg-rose-800 p-4">
                        <h2 class="font-heading">Chyby</h2>

                        <ul class="mt-4 w-full list-disc pl-4">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <h1 class="font-heading mb-8 text-xl font-bold">
                    Prosím, prihláste sa...
                </h1>

                <form action="{{ route('auth.login') }}" method="post">
                    @csrf
                    <div class="input-control">
                        <label for="email-input" class="label-control">E-mail:</label>
                        <input type="email" id="email-input" class="input-content-control" name="email"
                            placeholder="Sem zadajte e-mail" value="{{ old('email') }}" />
                    </div>
                    <div class="input-control mt-8">
                        <label for="password-input" class="label-control">Heslo:</label>
                        <input type="password" id="password-input" class="input-content-control" name="password"
                            placeholder="Sem zadajte heslo" />
                    </div>

                    <div class="input-control custom-checkbox mt-8">
                        <label for="remember-input" class="flex items-center">
                            <input type="checkbox" id="remember-input" name="remember" placeholder="Sem zadajte heslo"
                                {{ old('remember') == 'on' ? 'checked' : '' }} />
                            <div class="checker">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            Zostať prihlásený
                        </label>
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
