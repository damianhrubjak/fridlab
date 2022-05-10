<aside class="bg-pallette-black fixed flex h-screen w-80 flex-col justify-between">
    <div class="w-full">

        <div class="mx-auto mt-4 w-48">
            <img class="w-full" src="{{ asset('images/Logo/FriDLab-logo-transparent.svg') }}" alt="LOGO">
        </div>
        <div class="mt-16">
            <a class="nav-link-item" href="{{ route('admin-pages.home') }}">
                <span><i class="fa-solid fa-house-chimney"></i></span>
                <span>Domov</span>
            </a>
            <a class="nav-link-item" href="{{ route('admin-pages.blogy.index') }}">
                <span><i class="fa-solid fa-comment-dots"></i></span>
                <span>Blog</span>
            </a>
            <a class="nav-link-item" href="">
                <span><i class="fa-solid fa-cubes"></i></span>
                <span>3D modely</span>
            </a>
        </div>
    </div>

    <div class="flex justify-center gap-32 bg-slate-900 py-4">
        <a href="{{ route('fe-pages.home') }}"><i
                class="fa-solid fa-arrow-left-long icon-link text-3xl text-white transition duration-300"></i></a>
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button type="submit"><i
                    class="fa-solid fa-arrow-right-from-bracket icon-link text-3xl text-white transition duration-300"></i></button>
        </form>
    </div>
</aside>
