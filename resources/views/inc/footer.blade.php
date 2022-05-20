<footer class="bg-pallette-black border-pallette-blue border-t-2">
    <div class="w-full py-10">
        <div class="page-wrapper">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:gap-16 xl:grid-cols-4">
                <div class="item">
                    <img src="{{ asset('images/Logo/FriDLab-logo-transparent.svg') }}" alt="Logo"
                        class="xs:w-3/4 w-full max-w-xs">
                    <em class="xs:w-5/6 mt-4 block w-full italic sm:mt-8">
                        "We are the makers, printers and tools are what we call for"
                    </em>
                </div>
                <div class="item">
                    <h2 class="font-heading">Social</h2>
                    <div class="xxs:grid-cols-2 xxs:gap-2 mt-4 grid sm:mt-8">
                        <div class=""> <a href="https://www.tiktok.com/@fridlab"
                                class="footer-social-link hover:text-[#EE1D52]">
                                <p class="footer-social-icon"><i class="fa-brands fa-tiktok"></i></p>
                                <p class="">TikTok</p>
                            </a> <a href="https://www.instagram.com/fridlabuniza/" class="instagram footer-social-link">
                                <p class="footer-social-icon"><i class="fa-brands fa-instagram"></i></p>
                                <p class="">Instagram</p>
                            </a> <a href="https://www.facebook.com/Fridlabuniza"
                                class="footer-social-link hover:text-[#4267B2]">
                                <p class="footer-social-icon"><i class="fa-brands fa-facebook-f"></i></p>
                                <p class="">Facebook</p>
                            </a> <a href="https://twitter.com/FridLab" class="footer-social-link hover:text-[#1DA1F2]">
                                <p class="footer-social-icon"><i class="fa-brands fa-twitter"></i></p>
                                <p class="">Twitter</p>
                            </a> </div>
                        <div class="">
                            <a href="https://www.youtube.com/channel/UCAL9BL74HS6Cl3CVX9K18Ng"
                                class="footer-social-link hover:text-[#FF0000]">
                                <p class="footer-social-icon"><i class="fa-brands fa-youtube"></i></p>
                                <p class="">YouTube</p>
                            </a> <a href="https://discord.com/invite/vfy4KDaMXY"
                                class="footer-social-link hover:text-[#7289DA]">
                                <p class="footer-social-icon"><i class="fa-brands fa-discord"></i></p>
                                <p class="">Discord</p>
                            </a> <a href="mailto:{{ env('ADMIN_EMAIL') }}" class="footer-social-link gmail w-max">
                                <p class="footer-social-icon"><i class="fa-solid fa-envelope"></i></p>
                                <p class="">Mail</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h2 class="font-heading">Address</h2>
                    <div class="mt-4 text-lg sm:mt-8">
                        <p>Univerzitná 8215/1</p>
                        <p>010 26 Žilina</p>
                        <p>miestnosť RB102</p>
                        <p class="mt-4 font-bold">FRI - Fakulta riadenia a informatiky</p>
                    </div>
                </div>
                <div class="item">
                    <h2 class="font-heading">Contact</h2>
                    <div class="mt-4 sm:mt-8">
                        <a href="" class="footer-contact-link group">
                            <div class="footer-social-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <p class="footer-contact-link--text">+421 908 456 123</p>
                        </a>
                        <a href="" class="footer-contact-link group">
                            <div class="footer-social-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <p class="footer-contact-link--text">+421 908 456 123</p>
                        </a>
                        <a href="mailto:{{ env('ADMIN_EMAIL') }}" class="footer-contact-link group">
                            <div class="footer-social-icon">
                                <i class="fa-solid fa-at"></i>
                            </div>
                            <p class="footer-contact-link--text">{{ env('ADMIN_EMAIL') }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-pallette-yellow text-pallette-black w-full py-4">
        <div class="page-wrapper flex flex-col items-center justify-between lg:flex-row">
            <p class="font-heading text-center text-xs">
                &copy; 2022 All rights reserved.
            </p>
            <p class="font-heading mt-4 text-center text-xs lg:mt-0">
                Created by 3D tlačiarnicks enthusiasts
            </p>
        </div>
    </div>
</footer>
