<section id="FAQ" class="container mx-auto max-w-[1130px]">
    <div class="flex items-center gap-[70px] pb-[150px] pt-[200px]">
        <div class="flex flex-col gap-[30px]">
            <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full bg-portto-purple">
                <img src="{{ asset('images/icons/messages.svg') }}" alt="icon">
            </div>
            <div class="flex flex-col gap-[10px]">
                <h2 class="text-[50px] font-extrabold leading-[70px] text-portto-black dark:text-white">Frequently Asked
                    Questions</h2>
                <p class="text-lg text-[#878C9C] dark:text-white/70">If you have any question please contact me.</p>
            </div>
            <a href="{{ route('front.book') }}"
                class="w-fit rounded-full bg-portto-black p-[14px_30px] text-lg font-bold text-white transition-all duration-300 hover:bg-portto-purple hover:ring hover:ring-portto-purple dark:bg-white dark:text-portto-black dark:hover:bg-portto-purple dark:hover:text-white dark:hover:ring-white">Contact
                Me</a>
        </div>
        <div class="flex w-[603px] shrink-0 flex-col gap-[30px]">
            <div class="flex w-full flex-col rounded-2xl bg-[#F4F5F8] p-5 transition-all duration-300 dark:bg-white/5"
                x-data="{ open: false }">
                <button @click="open = !open"
                    class="accordion-button flex items-center justify-between gap-1 text-left">
                    <span class="text-2xl font-bold text-portto-black dark:text-white">How do I work usually?</span>
                    <div class="arrow flex h-9 w-9 shrink-0 transition-transform duration-300"
                        :class="{ 'rotate-180': open }">
                        <img src="{{ asset('images/icons/arrow-circle-down.svg') }}"
                            class="transition-all duration-300 dark:invert" alt="icon">
                    </div>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0" class="accordion-content">
                    <p class="pt-5 text-[20px] leading-[36px] text-portto-black/80 dark:text-white/80">As a freelancer,
                        my
                        work process is characterized by
                        flexibility, self-discipline, and a strong emphasis on client communication.</p>
                </div>
            </div>
            <div class="flex w-full flex-col rounded-2xl bg-[#F4F5F8] p-5 transition-all duration-300 dark:bg-white/5"
                x-data="{ open: false }">
                <button @click="open = !open"
                    class="accordion-button flex items-center justify-between gap-1 text-left">
                    <span class="text-2xl font-bold text-portto-black dark:text-white">How much I charge per
                        project?</span>
                    <div class="arrow flex h-9 w-9 shrink-0 transition-transform duration-300"
                        :class="{ 'rotate-180': open }">
                        <img src="{{ asset('images/icons/arrow-circle-down.svg') }}"
                            class="transition-all duration-300 dark:invert" alt="icon">
                    </div>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0" class="accordion-content">
                    <p class="pt-5 text-[20px] leading-[36px] text-portto-black/80 dark:text-white/80">I don’t charge
                        hourly. I charge based on the project
                        brief and given timeline to finish that particular project.</p>
                </div>
            </div>
            <div class="flex w-full flex-col rounded-2xl bg-[#F4F5F8] p-5 transition-all duration-300 dark:bg-white/5"
                x-data="{ open: false }">
                <button @click="open = !open"
                    class="accordion-button flex items-center justify-between gap-1 text-left">
                    <span class="text-2xl font-bold text-portto-black dark:text-white">Can I work full-time?</span>
                    <div class="arrow flex h-9 w-9 shrink-0 transition-transform duration-300"
                        :class="{ 'rotate-180': open }">
                        <img src="{{ asset('images/icons/arrow-circle-down.svg') }}"
                            class="transition-all duration-300 dark:invert" alt="icon">
                    </div>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0" class="accordion-content">
                    <p class="pt-5 text-[20px] leading-[36px] text-portto-black/80 dark:text-white/80">I don’t work
                        full-time. At this moment, I prefer to
                        work remotely and based on the certain project only.</p>
                </div>
            </div>
        </div>
    </div>
</section>
