<div class="text-pallette-black flex flex-col bg-slate-100">
    <div class="h-full w-full p-4">
        <img class="h-28 w-full object-contain" src="{{ route('file-serve', $sponsor->image->slug) }}"
            alt="{{ $sponsor->image->file_name }}">
    </div>

    <div class="h-full w-full py-5 px-6">
        <div class="flex justify-between">
            <h2 class="mb-2 text-3xl font-bold">{{ $sponsor->name }}</h2>
            <form action="{{ route('admin-pages.sponzori.destroy', $sponsor->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"><i
                        class="fa-solid fa-trash hover:text-pallette-yellow text-3xl transition duration-300"></i></button>
            </form>
        </div>
    </div>


</div>
