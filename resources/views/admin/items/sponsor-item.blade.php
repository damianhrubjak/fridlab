<div class="bg-pallette-black flex flex-col text-white">
    <div class="h-full w-full">
        <img class="h-full w-full object-cover" src="{{ route('file-thumbnail-serve', $sponsor->image->slug) }}"
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
