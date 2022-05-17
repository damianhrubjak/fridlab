@extends('admin.layout.master')

@section('page-title', 'Pridať sponzora')

@section('page-content')

    <div class="mb-8">
        <h1 class="text-7xl font-bold text-slate-700">Pridať Sponzora</h1>
    </div>

    <div class="mt-20 flex h-full w-full flex-col items-center justify-center">

        @if (Session::get('success_store'))
            <div class="mb-5 w-4/5 bg-green-700 bg-opacity-50 py-2 px-5 text-2xl">
                <div class="flex items-center justify-between">
                    <p class="font-bold text-white">Sponzor bol úspešne pridaný!</p>
                    <i class="fa-solid fa-circle-check text-white"></i>
                </div>
                <div class="flex items-center justify-center">
                    <a href="{{ route('admin-pages.sponzori.index') }}"
                        class="block text-base font-bold text-white underline">Späť na sponzorov</a>
                </div>
            </div>
        @endif

        <div class="flex w-4/5 flex-col">
            @if ($errors->any())
                <div class="mb-8 bg-rose-800 p-4 font-bold text-white">
                    <h2 class="font-heading">Chyby</h2>

                    <ul class="mt-4 w-full list-disc pl-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form enctype="multipart/form-data" action="{{ route('admin-pages.sponzori.store') }}" method="POST">
                @csrf
                <div class="flex w-full flex-col">
                    <label for="">Názov sponzora</label>
                    <input name="name" value="{{ old('name') }}" class="rounded-xl py-3 px-6 text-xl" type="text">
                </div>


                <div class="my-6 flex w-full">
                    <label custom-file-input
                        class="relative flex min-h-[8rem] w-full cursor-pointer items-center justify-center rounded-xl border-4 border-dashed border-slate-700 bg-slate-200">
                        <div class="w-full p-4">
                            <h3 class="text-xl">Nahrajte logo sponzora</h3>
                            <p class="mt-2 font-bold">.png, .jpg, .jpeg, .svg, .bmp, .webp</p>
                            <div custom-file-input-files class="mt-6 flex flex-wrap gap-2"></div>
                        </div>
                        <input id="image-id" name="image" class="absolute top-0 h-full w-full cursor-pointer opacity-0"
                            type="file" accept=".png,.jpg,.jpeg,.svg,.bmp,.webp">
                    </label>
                </div>

                <div class="text-center">

                    <button
                        class="bg-pallette-black mt-5 w-full max-w-[500px] py-3 px-5 text-2xl text-white">Poslať</button>
                </div>
            </form>
        </div>
    </div>


@endsection
