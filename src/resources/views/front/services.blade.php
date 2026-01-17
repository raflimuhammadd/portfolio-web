@extends('front/layouts/app')
@section('title', 'prattfolio')
@section('content')
    <section id="Header"
        class="relative flex flex-col gap-[50px] bg-white transition-all duration-300 dark:bg-portto-black">
        <x-nav />
        <div class="hero container relative mx-auto flex max-w-[1130px] items-center justify-between">
            <div class="z-10 flex h-fit w-fit flex-col gap-[50px] text-portto-black dark:text-white">
                <p class="text-2xl font-semibold">I’m Shayna 👋</p>
                <h1 class="text-[80px] font-extrabold leading-[90px]">My Freelance Services</h1>
                <div class="flex flex-col gap-[20px]">
                    <p class="max-w-[500px] text-lg text-portto-light-gold">
                        I help companies and startups build successful digital products with specific expertise in design
                        and development.
                    </p>
                    <button
                        class="w-fit rounded-[30px] bg-portto-purple p-[20px_40px] text-[20px] font-bold leading-[30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">
                        Book a Consultation
                    </button>
                </div>
            </div>
            <div class="z-10 flex max-h-[567px] max-w-[471px]">
                <img src="{{ asset('images/hero-image.png') }}" class="h-full w-full object-contain" alt="hero image">
            </div>
            <img src="{{ asset('images/Ellipse.svg') }}"
                class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform" alt="background icon">
        </div>
    </section>

    <section id="Company"
        class="w-full overflow-hidden bg-white pb-[100px] pt-[50px] transition-all duration-300 dark:bg-portto-black">
        <div class="group/slider flex w-max flex-nowrap items-center">
            <div
                class="logo-container group-hover/slider:pause-animate flex animate-[slide_25s_linear_infinite] flex-nowrap items-center gap-[70px] pl-[70px]">
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum1.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum2.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum3.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum4.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum1.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum2.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum3.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum4.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
            </div>
            <div
                class="logo-container group-hover/slider:pause-animate flex animate-[slide_25s_linear_infinite] flex-nowrap items-center gap-[70px] pl-[70px]">
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum1.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum2.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum3.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum4.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum1.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum2.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum3.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
                <div class="flex h-[40px] w-fit shrink-0">
                    <img src="{{ asset('images/logos/logoipsum4.png') }}" class="h-full w-full object-contain"
                        alt="logo">
                </div>
            </div>
        </div>
    </section>

    <section id="Services" class="container mx-auto flex w-full max-w-[1130px] flex-col gap-[50px] py-[100px]">
        <div class="flex flex-col gap-[10px] text-center">
            <h2 class="text-[50px] font-extrabold leading-[70px] text-portto-black dark:text-white">My Expertise</h2>
            <p class="text-lg text-portto-black dark:text-white">High-quality services to help your business grow.</p>
        </div>
        <div class="grid grid-cols-3 gap-[30px]">
            <!-- Service Card 1 -->
            <div
                class="group flex flex-col gap-[30px] rounded-[30px] border border-[#E8E8E8] bg-white p-[40px] transition-all duration-300 hover:border-portto-purple hover:shadow-[0_10px_30px_0_#4920E51A] dark:border-white/10 dark:bg-[#FFFFFF0a] dark:hover:border-portto-purple">
                <div class="flex h-[70px] w-[70px] items-center justify-center rounded-full bg-portto-purple/10">
                    <!-- Icon placeholder -->
                    <span class="text-3xl">🎨</span>
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h3 class="text-[26px] font-bold leading-[39px] text-portto-black dark:text-white">UI/UX Design</h3>
                    <p class="text-portto-black/70 dark:text-white/70">Creating intuitive and aesthetically pleasing
                        interfaces for web and
                        mobile apps.</p>
                </div>
                <ul class="flex list-disc flex-col gap-[10px] pl-5 text-portto-black/70 dark:text-white/70">
                    <li>User Research</li>
                    <li>Wireframing</li>
                    <li>Prototyping</li>
                </ul>
            </div>
            <!-- Service Card 2 -->
            <div
                class="group flex flex-col gap-[30px] rounded-[30px] border border-[#E8E8E8] bg-white p-[40px] transition-all duration-300 hover:border-portto-purple hover:shadow-[0_10px_30px_0_#4920E51A] dark:border-white/10 dark:bg-[#FFFFFF0a] dark:hover:border-portto-purple">
                <div class="flex h-[70px] w-[70px] items-center justify-center rounded-full bg-portto-purple/10">
                    <!-- Icon placeholder -->
                    <span class="text-3xl">💻</span>
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h3 class="text-[26px] font-bold leading-[39px] text-portto-black dark:text-white">Web Development</h3>
                    <p class="text-portto-black/70 dark:text-white/70">Building responsive, high-performance websites using
                        modern
                        technologies.</p>
                </div>
                <ul class="flex list-disc flex-col gap-[10px] pl-5 text-portto-black/70 dark:text-white/70">
                    <li>Frontend (React, Vue)</li>
                    <li>Backend (Laravel, Node)</li>
                    <li>CMS Integration</li>
                </ul>
            </div>
            <!-- Service Card 3 -->
            <div
                class="group flex flex-col gap-[30px] rounded-[30px] border border-[#E8E8E8] bg-white p-[40px] transition-all duration-300 hover:border-portto-purple hover:shadow-[0_10px_30px_0_#4920E51A] dark:border-white/10 dark:bg-[#FFFFFF0a] dark:hover:border-portto-purple">
                <div class="flex h-[70px] w-[70px] items-center justify-center rounded-full bg-portto-purple/10">
                    <!-- Icon placeholder -->
                    <span class="text-3xl">📱</span>
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h3 class="text-[26px] font-bold leading-[39px] text-portto-black dark:text-white">Mobile App Dev</h3>
                    <p class="text-portto-black/70 dark:text-white/70">Developing cross-platform mobile applications for
                        iOS and Android.</p>
                </div>
                <ul class="flex list-disc flex-col gap-[10px] pl-5 text-portto-black/70 dark:text-white/70">
                    <li>Flutter / React Native</li>
                    <li>App Store Submission</li>
                    <li>Maintenance</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="Workflow" class="w-full bg-[#FAFAFA] py-[100px] transition-all duration-300 dark:bg-portto-black">
        <div class="container mx-auto flex max-w-[1130px] flex-col gap-[50px]">
            <div class="flex flex-col gap-[10px] text-center">
                <h2 class="text-[50px] font-extrabold leading-[70px] text-portto-black dark:text-white">My Workflow</h2>
                <p class="text-lg text-portto-black dark:text-white">How I turn your ideas into reality.</p>
            </div>
            <div class="flex items-center justify-between gap-[30px]">
                <!-- Step 1 -->
                <div class="flex flex-col items-center gap-[20px] text-center">
                    <div
                        class="flex h-[80px] w-[80px] items-center justify-center rounded-full bg-portto-purple text-[30px] font-bold text-white">
                        1</div>
                    <div>
                        <h4 class="text-[22px] font-bold text-portto-black dark:text-white">Discovery</h4>
                        <p class="max-w-[200px] text-sm text-portto-black/70 dark:text-white/70">Understanding your goals
                            and requirements.
                        </p>
                    </div>
                </div>
                <!-- Connector -->
                <div class="h-[2px] w-full flex-1 bg-[#E8E8E8]"></div>

                <!-- Step 2 -->
                <div class="flex flex-col items-center gap-[20px] text-center">
                    <div
                        class="flex h-[80px] w-[80px] items-center justify-center rounded-full bg-portto-purple text-[30px] font-bold text-white">
                        2</div>
                    <div>
                        <h4 class="text-[22px] font-bold text-portto-black dark:text-white">Design</h4>
                        <p class="max-w-[200px] text-sm text-portto-black/70 dark:text-white/70">Prototyping and crafting
                            the visual
                            experience.</p>
                    </div>
                </div>

                <!-- Connector -->
                <div class="h-[2px] w-full flex-1 bg-[#E8E8E8]"></div>

                <!-- Step 3 -->
                <div class="flex flex-col items-center gap-[20px] text-center">
                    <div
                        class="flex h-[80px] w-[80px] items-center justify-center rounded-full bg-portto-purple text-[30px] font-bold text-white">
                        3</div>
                    <div>
                        <h4 class="text-[22px] font-bold text-portto-black dark:text-white">Development</h4>
                        <p class="max-w-[200px] text-sm text-portto-black/70 dark:text-white/70">Writing clean, efficient,
                            and scalable code.
                        </p>
                    </div>
                </div>

                <!-- Connector -->
                <div class="h-[2px] w-full flex-1 bg-[#E8E8E8]"></div>

                <!-- Step 4 -->
                <div class="flex flex-col items-center gap-[20px] text-center">
                    <div
                        class="flex h-[80px] w-[80px] items-center justify-center rounded-full bg-portto-purple text-[30px] font-bold text-white">
                        4</div>
                    <div>
                        <h4 class="text-[22px] font-bold text-portto-black dark:text-white">Launch</h4>
                        <p class="max-w-[200px] text-sm text-portto-black/70 dark:text-white/70">Deploying and ensuring
                            everything runs
                            smoothly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Pricing" class="container mx-auto flex w-full max-w-[1130px] flex-col gap-[50px] py-[100px]">
        <div class="flex flex-col gap-[10px] text-center">
            <h2 class="text-[50px] font-extrabold leading-[70px] text-portto-black dark:text-white">Simple Pricing</h2>
            <p class="text-lg text-portto-black dark:text-white">Choose a package that fits your needs.</p>
        </div>
        <div class="grid grid-cols-3 gap-[30px]">
            <!-- Pricing Card 1 -->
            <div
                class="flex flex-col gap-[30px] rounded-[30px] border border-[#E8E8E8] bg-white p-[40px] transition-all duration-300 hover:border-portto-purple hover:shadow-[0_10px_30px_0_#4920E51A] dark:border-white/10 dark:bg-[#FFFFFF0a] dark:hover:border-portto-purple">
                <div class="flex flex-col gap-[10px]">
                    <h3 class="text-[26px] font-bold leading-[39px] text-portto-black dark:text-white">Starter</h3>
                    <p class="text-4xl font-extrabold text-portto-purple">$500</p>
                    <p class="text-sm text-portto-black/70 dark:text-white/70">Great for simple tasks and landing pages.
                    </p>
                </div>
                <hr class="border-[#E8E8E8] dark:border-white/10">
                <ul class="flex flex-col gap-[15px] font-medium text-portto-black dark:text-white">
                    <li class="flex items-center gap-[10px]">
                        <img src="{{ asset('images/icons/check.svg') }}"
                            onerror="this.src='https://icons.getbootstrap.com/assets/icons/check-circle-fill.svg'"
                            class="h-5 w-5" alt="check">
                        1 Page Website
                    </li>
                    <li class="flex items-center gap-[10px]">
                        <img src="{{ asset('images/icons/check.svg') }}"
                            onerror="this.src='https://icons.getbootstrap.com/assets/icons/check-circle-fill.svg'"
                            class="h-5 w-5" alt="check">
                        Basic SEO
                    </li>
                    <li class="flex items-center gap-[10px]">
                        <img src="{{ asset('images/icons/check.svg') }}"
                            onerror="this.src='https://icons.getbootstrap.com/assets/icons/check-circle-fill.svg'"
                            class="h-5 w-5" alt="check">
                        Mobile Responsive
                    </li>
                </ul>
                <button
                    class="mt-auto w-full rounded-full border border-portto-purple py-[16px] text-lg font-bold text-portto-purple transition-all hover:bg-portto-purple hover:text-white">
                    Choose Plan
                </button>
            </div>

            <!-- Pricing Card 2 (Popular) -->
            <div
                class="relative flex flex-col gap-[30px] rounded-[30px] border border-portto-purple bg-portto-black p-[40px] text-white shadow-[0_10px_30px_0_#4920E540] transition-all duration-300 dark:bg-white dark:text-portto-black">
                <div
                    class="absolute -top-[15px] left-1/2 -translate-x-1/2 rounded-full bg-portto-purple px-[20px] py-[8px] text-sm font-bold uppercase tracking-wider text-white">
                    Most Popular
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h3 class="text-[26px] font-bold leading-[39px]">Business</h3>
                    <p class="text-4xl font-extrabold text-portto-purple">$1,500</p>
                    <p class="text-sm opacity-80">Perfect for growing businesses.</p>
                </div>
                <hr class="border-white/10 dark:border-portto-black/10">
                <ul class="flex flex-col gap-[15px] font-medium">
                    <li class="flex items-center gap-[10px]">
                        <!-- Use a simple unicode check for now to be safe or the same fallback -->
                        <span class="text-xl text-portto-purple">✓</span>
                        5 Page Website
                    </li>
                    <li class="flex items-center gap-[10px]">
                        <span class="text-xl text-portto-purple">✓</span>
                        Advanced SEO
                    </li>
                    <li class="flex items-center gap-[10px]">
                        <span class="text-xl text-portto-purple">✓</span>
                        CMS Integration
                    </li>
                    <li class="flex items-center gap-[10px]">
                        <span class="text-xl text-portto-purple">✓</span>
                        Fast Support
                    </li>
                </ul>
                <button
                    class="mt-auto w-full rounded-full bg-portto-purple py-[16px] text-lg font-bold text-white transition-all hover:shadow-[0_10px_20px_0_#4920E5]">
                    Choose Plan
                </button>
            </div>

            <!-- Pricing Card 3 -->
            <div
                class="flex flex-col gap-[30px] rounded-[30px] border border-[#E8E8E8] bg-white p-[40px] transition-all duration-300 hover:border-portto-purple hover:shadow-[0_10px_30px_0_#4920E51A] dark:border-white/10 dark:bg-[#FFFFFF0a] dark:hover:border-portto-purple">
                <div class="flex flex-col gap-[10px]">
                    <h3 class="text-[26px] font-bold leading-[39px] text-portto-black dark:text-white">Custom</h3>
                    <p class="text-4xl font-extrabold text-portto-purple">Let's Talk</p>
                    <p class="text-sm text-portto-black/70 dark:text-white/70">For complex and unique projects.</p>
                </div>
                <hr class="border-[#E8E8E8] dark:border-white/10">
                <ul class="flex flex-col gap-[15px] font-medium text-portto-black dark:text-white">
                    <li class="flex items-center gap-[10px]">
                        <img src="{{ asset('images/icons/check.svg') }}"
                            onerror="this.src='https://icons.getbootstrap.com/assets/icons/check-circle-fill.svg'"
                            class="h-5 w-5" alt="check">
                        Unlimited Pages
                    </li>
                    <li class="flex items-center gap-[10px]">
                        <img src="{{ asset('images/icons/check.svg') }}"
                            onerror="this.src='https://icons.getbootstrap.com/assets/icons/check-circle-fill.svg'"
                            class="h-5 w-5" alt="check">
                        Custom Functionality
                    </li>
                    <li class="flex items-center gap-[10px]">
                        <img src="{{ asset('images/icons/check.svg') }}"
                            onerror="this.src='https://icons.getbootstrap.com/assets/icons/check-circle-fill.svg'"
                            class="h-5 w-5" alt="check">
                        Dedicated Manager
                    </li>
                </ul>
                <button
                    class="mt-auto w-full rounded-full border border-portto-purple py-[16px] text-lg font-bold text-portto-purple transition-all hover:bg-portto-purple hover:text-white">
                    Contact Me
                </button>
            </div>
        </div>
    </section>

    <section id="CTA" class="container mx-auto flex w-full max-w-[1130px] pb-[100px]">
        <div
            class="flex w-full items-center justify-between rounded-[50px] bg-portto-black bg-[url('{{ asset('images/Ellipse.svg') }}')] bg-cover bg-center px-[80px] py-[60px]">
            <div class="flex w-full flex-col gap-[20px] text-center">
                <h2 class="text-[50px] font-extrabold leading-[70px] text-white">Have a Project in Mind?</h2>
                <p class="text-lg text-white/70">Let’s build something amazing together.</p>
                <button
                    class="mx-auto mt-[10px] w-fit rounded-[30px] bg-portto-purple p-[20px_40px] text-[20px] font-bold leading-[30px] text-white transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">
                    Book a Consultation
                </button>
            </div>
        </div>
    </section>

    <x-faq />

    <x-footer />

    @push('after-script')
        <script src="{{ asset('js/main.js') }}"></script>
    @endpush
@endsection
