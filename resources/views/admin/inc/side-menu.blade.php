<aside class="bg-pallette-black fixed flex h-screen w-80 flex-col justify-between">
    <div class="w-full">

        <div class="mx-auto mt-4 w-48">
            <img class="w-full" src="{{ asset('images/Logo/FriDLab-logo-transparent.svg') }}" alt="LOGO">
        </div>
        <div class="mt-16">
            <a class="nav-link-item {{ request()->routeIs('admin-pages.home') ? 'admin-active' : '' }}"
                href="{{ route('admin-pages.home') }}">
                <span><i class="fa-solid fa-house-chimney"></i></span>
                <span>Domov</span>
            </a>
            <a class="nav-link-item {{ request()->routeIs('admin-pages.blogy.*') ? 'admin-active' : '' }}"
                href="{{ route('admin-pages.blogy.index') }}">
                <span><i class="fa-solid fa-comment-dots"></i></span>
                <span>Blog</span>
            </a>
            <a class="nav-link-item {{ request()->routeIs('admin-pages.modely.*') ? 'admin-active' : '' }}"
                href="{{ route('admin-pages.modely.index') }}">
                <span><i class="fa-solid fa-cubes"></i></span>
                <span>3D modely</span>
            </a>
            <a class="nav-link-item {{ request()->routeIs('admin-pages.modely.*') ? 'admin-active' : '' }}"
                href="{{ route('admin-pages.modely.index') }}">
                <span><i class="fa-solid fa-envelopes-bulk"></i></span>
                <span>Kontakty</span>
            </a>
        </div>
    </div>

    <div class="flex justify-center gap-8 bg-slate-900 px-2 py-4">
        <a href="{{ route('fe-pages.home') }}" class="icon-link w-1/2 text-center text-white transition duration-300">
            <i class="fa-solid fa-arrow-left-long text-3xl"></i>
            <p class="mt-2">Naspäť na web</p>
        </a>
        <form action="{{ route('auth.logout') }}" method="POST" class="m-0 w-1/2 text-center">
            @csrf
            <button type="submit" class="icon-link text-center text-white transition duration-300"><i
                    class="fa-solid fa-arrow-right-from-bracket text-3xl"></i>
                <p class="mt-2">Odhlásiť sa</p>
            </button>
        </form>
    </div>
</aside>
