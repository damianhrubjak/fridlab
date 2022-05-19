<header class="header-filled fixed top-0 left-0 z-[450] w-full shadow-md transition duration-500" id="app-header">
    <div class="page-wrapper relative py-4">
        <div class="flex flex-wrap items-center justify-between md:flex-nowrap">
            <div class="logo w-32 md:w-40">
                <a href="{{ route('fe-pages.home') }}"><img
                        src="{{ asset('images/Logo/FriDLab-logo-transparent.svg') }}" class="h-full w-[200px]"
                        alt="LOGO"></a>

            </div>
            <div id="hamburger"
                class="flex h-10 w-10 cursor-pointer items-center md:pointer-events-none md:invisible md:hidden">
                <div
                    class="middle-hamburger bg-pallette-yellow pointer-events-none relative h-1 w-[40px] transition-all duration-500 ease-in-out">
                    <div
                        class="top-hamburger bg-pallette-yellow pointer-events-none absolute top-0 left-0 h-1 w-[40px] translate-y-[-13px] transition-all duration-500 ease-in-out">
                    </div>
                    <div
                        class="bottom-hamburger bg-pallette-yellow pointer-events-none absolute top-0 left-0 h-1 w-[40px] translate-y-[13px] transition-all duration-500 ease-in-out">
                    </div>
                </div>
            </div>
            <div class="max-h-0 w-full overflow-hidden opacity-0 transition-all duration-300 md:max-h-full md:w-auto md:opacity-100"
                id="menu-links-wrapper">
                <div class="flex w-full flex-col items-end gap-4 pb-2 pt-8 md:mt-0 md:flex-row md:items-center md:gap-16 md:pt-0 md:pb-0"
                    id="menu-links-get-height">

                    <a class="header-link {{ request()->routeIs('fe-pages.home') ? 'active' : '' }} block"
                        href="{{ route('fe-pages.home') }}">Domov</a>
                    <a class="header-link {{ request()->routeIs('fe-pages.blogy') || request()->routeIs('fe-pages.blogShowPage') ? 'active' : '' }} block"
                        href="{{ route('fe-pages.blogy') }}">Blog</a>
                    <a class="header-link {{ request()->routeIs('fe-pages.3d-models') || request()->routeIs('fe-pages.modelShowPage') ? 'active' : '' }} block"
                        href="{{ route('fe-pages.3d-models') }}">3D Modely</a>
                    <a class="header-link {{ request()->routeIs('fe-pages.contact') ? 'active' : '' }} block"
                        href="{{ route('fe-pages.contact') }}">Kontakt</a>

                </div>
            </div>
        </div>


        <div id="menu-social-links"
            class="bg-pallette-black social-links-wrapper absolute bottom-0 right-0 z-10 -mb-[29px] rounded-b px-3 py-1">
            <a href="https://www.tiktok.com/@fridlab"><i
                    class="header-social-links fa-brands fa-tiktok hover:text-[#EE1D52]"></i></a>
            <a href="https://www.instagram.com/fridlabuniza/"><i
                    class="header-social-links fa-brands fa-instagram instagram"></i></a>
            <a href="https://www.facebook.com/Fridlabuniza"><i
                    class="header-social-links fa-brands fa-facebook-f hover:text-[#4267B2]"></i></a>
            <a href="https://twitter.com/FridLab"><i
                    class="header-social-links fa-brands fa-twitter hover:text-[#1DA1F2]"></i></a>
            <a href="https://www.youtube.com/channel/UCAL9BL74HS6Cl3CVX9K18Ng"><i
                    class="header-social-links fa-brands fa-youtube hover:text-[#FF0000]"></i></a>
            <a href="https://discord.com/invite/vfy4KDaMXY"><i
                    class="header-social-links fa-brands fa-discord hover:text-[#7289DA]"></i></a>
            <a href="mailto:{{ env('ADMIN_EMAIL') }}"><i
                    class="header-social-links fa-solid fa-envelope gmail"></i></a>
        </div>

    </div>

</header>
