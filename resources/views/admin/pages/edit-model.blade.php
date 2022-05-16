@extends('admin.layout.master')

@section('page-title', 'Upraviť model')

@section('page-content')

    <div class="mb-8">
        <h1 class="text-7xl font-bold text-slate-700">Upraviť 3D model</h1>
    </div>

    <div class="mt-20 flex h-full w-full flex-col items-center justify-center">

        @if (Session::get('success'))
            <div class="mb-5 w-4/5 bg-green-700 bg-opacity-50 py-2 px-5 text-2xl">
                <div class="flex items-center justify-between">
                    <p class="font-bold text-white">Model bol úspešne upravený!</p>
                    <i class="fa-solid fa-circle-check text-white"></i>
                </div>
                <div class="flex items-center justify-center">
                    <a href="{{ route('admin-pages.modely.index') }}"
                        class="block text-base font-bold text-white underline">Späť na Modely</a>
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
            <form enctype="multipart/form-data" action="{{ route('admin-pages.modely.update', $printModel->slug) }}"
                method="POST">
                @csrf
                @method('PATCH')

                <input type="hidden" name="id" value="{{ $printModel->id }}">

                <div class="flex w-full flex-col">
                    <label for="">Nadpis Modelu</label>
                    <input name="title" value="{{ old('title', $printModel->title) }}"
                        class="rounded-xl py-3 px-6 text-xl" type="text">
                </div>

                <div class="my-5 flex flex-col">
                    <label for="">Váš text</label>
                    <textarea name="text" class="h-96 py-3 px-6 text-xl"
                        id="textarea-tinymce">{{ old('text', $printModel->text) }}</textarea>
                </div>

                <div class="my-5">
                    <label for="is-private-input">
                        <input type="checkbox" name="is_private" id="is-private-input" value="1"
                            {{ old('is_private', $printModel->is_private) ? 'checked' : '' }}>
                        Nastaviť ako súkromný
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

@section('scripts')
    <script src="https://cdn.tiny.cloud/1/{{ env('MIX_TINY_MCE_API_KEY') }}/tinymce/6/tinymce.min.js"></script>
    <script>
        tinyMCEInitializer(tinymce, '#textarea-tinymce');
    </script>
@endsection
