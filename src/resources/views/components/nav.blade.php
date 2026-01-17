<nav class="relative w-full bg-white transition-all duration-300 dark:bg-portto-black" id="navbar">
    <div class="container mx-auto flex h-[100px] max-w-[1130px] items-center justify-between">
        <!-- Logo -->
        <a href="{{ route('front.index') }}" class="flex h-fit w-fit shrink-0 items-center gap-[10px]">
            <img src="{{ asset('images/logos/logo-raflélio.png') }}" alt="logo" class="h-[70px]">
        </a>

        <!-- Navigation Links -->
        <ul class="flex items-center gap-[50px] text-portto-black dark:text-white">
            <li>
                <a href="{{ route('front.index') }}"
                    class="{{ request()->routeIs('front.index') ? 'font-bold text-portto-purple dark:text-portto-gold' : 'hover:text-portto-purple dark:hover:text-portto-gold' }} text-base transition-all duration-300">Home</a>
            </li>
            {{-- <li>
                <a href="{{ route('front.services') }}"
                    class="{{ request()->routeIs('front.services') ? 'font-bold text-portto-purple dark:text-portto-gold' : 'hover:text-portto-purple dark:hover:text-portto-gold' }} text-base transition-all duration-300">Services</a>
            </li> --}}
            <li>
                <a href="{{ route('front.about') }}"
                    class="{{ request()->routeIs('front.about') ? 'font-bold text-portto-purple dark:text-portto-gold' : 'hover:text-portto-purple dark:hover:text-portto-gold' }} text-base transition-all duration-300">About</a>
            </li>
        </ul>

        <div class="flex items-center gap-4">
            <!-- Theme Toggle -->
            <button id="theme-toggle"
                class="rounded-full p-2 text-portto-black transition-all hover:bg-gray-100 dark:text-white dark:hover:bg-white/10">
                <!-- Sun Icon (for Dark Mode) -->
                <svg id="theme-toggle-light-icon" class="hidden h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 100 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
                <!-- Moon Icon (for Light Mode) -->
                <svg id="theme-toggle-dark-icon" class="hidden h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
            </button>

            <!-- CTA Button -->
            <button
                class="rounded-full bg-portto-black p-[12px_30px] text-base font-bold text-white transition-all duration-300 hover:bg-portto-purple hover:text-white hover:shadow-[0_10px_20px_0_#4920E5] dark:bg-white dark:text-portto-black dark:hover:bg-portto-purple dark:hover:text-white">
                Hire Me
            </button>
        </div>
    </div>
</nav>

<script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('theme')) {
            if (localStorage.getItem('theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }
    });
</script>
