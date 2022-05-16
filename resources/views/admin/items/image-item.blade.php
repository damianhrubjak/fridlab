<div class="flex w-full items-start bg-white">
    <a class="h-full w-1/3">
        <img src="{{ route('file-thumbnail-serve', $file->slug) }}" alt="" class="h-full object-cover">
    </a>
    <div class="w-2/3 p-4">
        <div class="mt-4 first:mt-0">
            <p>Názov súboru:</p>
            <h3 class="text-xl font-bold text-slate-800">{{ $file->file_name }}</h3>
        </div>
        <div class="mt-4 first:mt-0">
            <p>Veľkosť súboru:</p>
            <h3 class="text-xl font-bold text-slate-800">
                {{ round($file->size / 1000000, 2) }}
                MB
            </h3>
        </div>
    </div>
</div>
