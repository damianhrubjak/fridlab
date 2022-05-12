@extends('admin.layout.master')

@section('page-title', 'Pridať blog')

@section('page-content')

    <div class="mb-8">
        <h1 class="text-7xl font-bold text-slate-700">Pridať Blog</h1>
    </div>

    <div class="mt-20 flex h-full w-full items-center justify-center">
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
        <form enctype="multipart/form-data" class="w-[80%]" action="{{ route('admin-pages.blogy.store') }}"
            method="POST">
            @csrf
            <div class="flex gap-5">
                <div class="flex w-1/2 flex-col">
                    <label for="">Nadpis blogu</label>
                    <input name="title" value="{{ old('title') }}" class="py-3 px-6 text-xl" type="text">
                </div>
                <div class="flex w-1/2 flex-col">
                    <label for="">Obrázok blogu</label>
                    <input name="image" class="bg-white py-3 px-6 text-xl" type="file">
                </div>
            </div>


            <div class="mb-5 flex flex-col">
                <label for="">Váš text</label>
                <textarea name="text" class="h-full py-3 px-6 text-xl" id="textarea-tinymce">{{ old('text') }}</textarea>
            </div>


            <div class="text-center">

                <button class="bg-pallette-black mt-5 w-full max-w-[500px] py-3 px-5 text-2xl text-white">Poslať</button>
            </div>
        </form>
    </div>


@endsection

@section('scripts')
    <script src="https://cdn.tiny.cloud/1/{{ env('MIX_TINY_MCE_API_KEY') }}/tinymce/6/tinymce.min.js"></script>
    <script>
        tinyMCEInitializer(tinymce, '#textarea-tinymce');
    </script>
@endsection
