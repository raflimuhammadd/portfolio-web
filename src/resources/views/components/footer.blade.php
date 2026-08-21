<footer
    class="w-full border-t border-[#E8E8E8] bg-white pt-[80px] text-portto-black transition-all duration-300 dark:border-white/10 dark:bg-portto-black dark:text-white">
    <div class="container mx-auto flex max-w-[1130px] flex-col gap-[80px]">
        <div class="flex justify-between">
            <div class="flex max-w-[350px] flex-col gap-[30px]">
                <div class="flex items-center gap-[10px]">
                    <img src="{{ asset('images/logos/logo-raflélio.png') }}" alt="logo" class="h-[60px]">
                    <span class="text-2xl font-bold"></span>
                </div>
                <p class="text-lg leading-[32px] text-portto-black/60 dark:text-white/60">
                    Helping businesses grow through design and technology. Let's build something amazing together.
                </p>
                <div class="flex items-center gap-[20px]">
                    <a href="#"
                        class="flex h-[40px] w-[40px] items-center justify-center rounded-full bg-gray-100 transition-all duration-300 hover:bg-portto-purple dark:bg-white/10 dark:hover:bg-portto-purple">
                        <img src="{{ asset('images/icons/sms.svg') }}" alt="email"
                            class="h-5 w-5 invert transition-all duration-300 hover:invert-0 dark:invert-0">
                    </a>
                    <a href="#"
                        class="flex h-[40px] w-[40px] items-center justify-center rounded-full bg-gray-100 transition-all duration-300 hover:bg-portto-purple dark:bg-white/10 dark:hover:bg-portto-purple">
                        <img src="{{ asset('images/icons/dribbble.svg') }}" alt="dribbble"
                            class="h-5 w-5 invert transition-all duration-300 hover:invert-0 dark:invert-0">
                    </a>
                </div>
            </div>

            <div class="flex gap-[100px]">
                <div class="flex flex-col gap-[20px]">
                    <h3 class="text-lg font-bold">Menu</h3>
                    <div class="flex flex-col gap-[15px] text-portto-black/60 dark:text-white/60">
                        <a href="{{ route('front.index') }}"
                            class="transition-all duration-300 hover:text-portto-purple dark:hover:text-white">Home</a>
                        <a href="{{ route('front.services') }}"
                            class="transition-all duration-300 hover:text-portto-purple dark:hover:text-white">Services</a>
                        <a href="{{ route('front.about') }}"
                            class="transition-all duration-300 hover:text-portto-purple dark:hover:text-white">About</a>
                    </div>
                </div>
                <!-- Services column removed as per request -->
                <div class="flex flex-col gap-[20px]">
                    <h3 class="text-lg font-bold">Contact</h3>
                    <div class="flex flex-col gap-[15px] text-portto-black/60 dark:text-white/60">
                        <span class="flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-green-500"></span>
                            Available for work
                        </span>
                        <a href="mailto:hello@portto.com"
                            class="transition-all duration-300 hover:text-portto-purple dark:hover:text-white">admin@raflélio.com</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between border-t border-[#E8E8E8] py-[30px] dark:border-white/10">
            <p class="text-sm text-portto-black/40 dark:text-white/40">© 2024 Raflélio. All Rights Reserved.</p>
            <div class="flex items-center gap-[30px] text-sm text-portto-black/40 dark:text-white/40">
                <a href="#"
                    class="transition-all duration-300 hover:text-portto-purple dark:hover:text-white">Privacy
                    Policy</a>
                <a href="#"
                    class="transition-all duration-300 hover:text-portto-purple dark:hover:text-white">Terms of
                    Service</a>
            </div>
        </div>
    </div>
</footer>
