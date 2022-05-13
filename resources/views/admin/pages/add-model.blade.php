@extends('admin.layout.master')

@section('page-title', 'Pridať model')

@section('page-content')

    <div class="mb-8">
        <h1 class="text-7xl font-bold text-slate-700">Pridať 3D model</h1>
    </div>

    <div class="mt-20 flex h-full w-full flex-col items-center justify-center">

        @if (Session::get('success'))
            <div class="mb-5 w-4/5 bg-green-700 bg-opacity-50 py-2 px-5 text-2xl">
                <div class="flex items-center justify-between">
                    <p class="font-bold text-white">Model bol úspešne pridaný!</p>
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
            <form enctype="multipart/form-data" action="{{ route('admin-pages.modely.store') }}" method="POST">
                @csrf
                <div class="flex w-full flex-col">
                    <label for="">Nadpis Modelu</label>
                    <input name="title" value="{{ old('title') }}" class="py-3 px-6 text-xl" type="text">
                </div>

                <div class="mt-6 flex w-full">
                    <label custom-file-input
                        class="relative flex min-h-[8rem] w-full cursor-pointer items-center justify-center border-4 border-dashed border-slate-700 bg-slate-200">
                        <div class="w-full p-4">
                            <h3 class="text-xl">Nahrajte obrazky</h3>
                            <p class="mt-2 font-bold">.png, .jpg, .jpeg, .gif, .tif, .bmp, .webp</p>
                            <div custom-file-input-files class="mt-6 flex flex-wrap gap-2"></div>
                        </div>
                        <input id="image-id" name="images[]" class="absolute top-0 h-full w-full cursor-pointer opacity-0"
                            type="file" multiple accept=".png,.jpg,.jpeg,.gif,.tif,.bmp,.webp">
                    </label>
                </div>

                <div class="mt-6 flex w-full">
                    <label custom-file-input
                        class="relative flex min-h-[8rem] w-full cursor-pointer items-center justify-center border-4 border-dashed border-slate-700 bg-slate-200">
                        <div class="w-full p-4">
                            <h3 class="text-xl">Nahrajte modely</h3>
                            <p class="mt-2 font-bold">.3mf, .stl</p>
                            <div custom-file-input-files class="mt-6 flex flex-wrap gap-2"></div>
                        </div>
                        <input id="image-id" name="models[]" class="absolute top-0 h-full w-full cursor-pointer opacity-0"
                            type="file" multiple accept=".3mf,.stl">
                    </label>
                </div>

                <div class="my-5 flex flex-col">
                    <label for="">Váš text</label>
                    <textarea name="text" class="h-96 py-3 px-6 text-xl" id="textarea-tinymce">{{ old('text') }}</textarea>
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
