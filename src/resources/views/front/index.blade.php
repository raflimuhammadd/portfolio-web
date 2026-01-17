@extends('front/layouts/app')
@section('title', 'prattfolio')
@section('content')

    {{-- Header --}}
    <section id="Header"
        class="relative flex flex-col gap-[100px] bg-white transition-all duration-300 dark:bg-portto-black">
        <x-nav />
        <div class="hero container relative mx-auto flex max-w-[1130px] items-center justify-between">
            <div class="z-10 flex h-fit w-fit flex-col gap-[50px] text-portto-black dark:text-white">
                <p class="text-2xl font-semibold">I’m Shayna 👋</p>
                <h1 class="text-[80px] font-extrabold leading-[90px]">Professional Designer & Dev</h1>
                <button
                    class="group flex w-fit items-center rounded-full bg-portto-purple px-6 py-4 text-xl font-bold text-white shadow-lg transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5] hover:ring-4 hover:ring-portto-purple/30">
                    Explore Now
                    <svg class="ml-2 h-6 w-6 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="z-10 flex max-h-[567px] max-w-[471px]">
                <img src="{{ asset('images/hero-image.png') }}" class="h-full w-full object-contain" alt="hero image">
            </div>
        </div>
        <div class="company-logos w-full overflow-hidden pb-[190px]">
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
        </div>
        <div
            class="stats container absolute bottom-0 left-1/2 mx-auto flex h-[180px] w-full max-w-[1130px] -translate-x-1/2 translate-y-1/2 transform items-center justify-between rounded-[30px] bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] px-[100px] text-portto-black shadow-2xl">
            <div class="h-fit w-fit text-center">
                <p class="text-[40px] font-extrabold leading-[60px]">$230M</p>
                <p class="text-lg font-semibold">Valuation</p>
            </div>
            <div class="h-fit w-fit text-center">
                <p class="text-[40px] font-extrabold leading-[60px]">31,934</p>
                <p class="text-lg font-semibold">Projects</p>
            </div>
            <div class="h-fit w-fit text-center">
                <p class="text-[40px] font-extrabold leading-[60px]">245</p>
                <p class="text-lg font-semibold">Startups IPO</p>
            </div>
            <div class="h-fit w-fit text-center">
                <p class="text-[40px] font-extrabold leading-[60px]">9/10</p>
                <p class="text-lg font-semibold">Successful</p>
            </div>
            <div class="h-fit w-fit text-center">
                <p class="text-[40px] font-extrabold leading-[60px]">562</p>
                <p class="text-lg font-semibold">Companies</p>
            </div>
        </div>
    </section>

    {{-- Services --}}
    {{-- <section id="Services" class="container mx-auto max-w-[1130px] pb-[100px] pt-[190px]">
        <div class="flex flex-col gap-[50px]">
            <div class="flex items-center justify-between">
                <h2 class="text-[50px] font-extrabold leading-[70px] text-portto-black dark:text-white">Actually, I Do
                    Design <br>& Code for Living</h2>
                <a href=""
                    class="h-fit w-fit rounded-full bg-portto-black p-[14px_30px] text-lg font-bold text-white transition-all duration-300 hover:bg-portto-purple hover:ring hover:ring-portto-purple dark:bg-white dark:text-portto-black dark:hover:bg-portto-purple dark:hover:text-white">All
                    Services</a>
            </div>
            <div class="grid grid-cols-2 gap-[30px]">
                <div
                    class="flex flex-col gap-[50px] rounded-[30px] bg-gray-100 p-[50px] pb-0 transition-all duration-300 dark:bg-[#F4F5F8] dark:bg-[#FFFFFF0a]">
                    <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full bg-portto-purple">
                        <img src="{{ asset('images/icons/crown.svg') }}" class="h-10 w-10 object-contain"
                            alt="icon">
                    </div>
                    <div class="flex flex-col gap-5 text-portto-black dark:text-white">
                        <p class="text-[32px] font-extrabold leading-[48px]">High-Quality Mobile App UI/UX Design</p>
                        <p class="text-lg leading-[34px]">Delivering great experience to users so that they are
                            comfortable while using your product.</p>
                    </div>
                    <div class="h-[350px] w-full">
                        <img src="{{ asset('images/services1.png') }}" class="w-full object-contain" alt="image">
                    </div>
                </div>
                <div
                    class="flex flex-col gap-[50px] rounded-[30px] bg-gray-100 p-[50px] pb-0 transition-all duration-300 dark:bg-[#FFFFFF0a]">
                    <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full bg-portto-green">
                        <img src="{{ asset('images/icons/code.svg') }}" class="h-10 w-10 object-contain" alt="icon">
                    </div>
                    <div class="flex flex-col gap-5 text-portto-black dark:text-white">
                        <p class="text-[32px] font-extrabold leading-[48px]">AI Business Dashboard Finance Company</p>
                        <p class="text-lg leading-[34px]">Delivering great experience to users so that they are
                            comfortable while using product.</p>
                    </div>
                    <div class="h-[350px] w-full">
                        <img src="{{ asset('images/services2.png') }}" class="w-full object-contain" alt="image">
                    </div>
                </div>
                <div
                    class="col-span-2 flex gap-[50px] rounded-[30px] bg-gray-100 p-[50px] pb-0 transition-all duration-300 dark:bg-[#FFFFFF0a]">
                    <div class="flex flex-col gap-[50px]">
                        <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full bg-portto-red">
                            <img src="{{ asset('images/icons/3dcube.svg') }}" class="h-10 w-10 object-contain"
                                alt="icon">
                        </div>
                        <div class="flex flex-col gap-5 text-portto-black dark:text-white">
                            <p class="text-[32px] font-extrabold leading-[48px]">Robust Plugins Connected Machine
                                Learning</p>
                            <p class="text-lg leading-[34px]">Delivering great experience to users so that they are
                                comfortable while using your product to grow.</p>
                        </div>
                    </div>
                    <div class="flex h-[350px] w-[450px] shrink-0">
                        <img src="{{ asset('images/services3.png') }}" class="w-full object-contain" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- Projects --}}
    <section id="Projects"
        class="flex w-full flex-col bg-portto-black bg-[url('{{ asset('images/background/background1.png') }}')] bg-cover bg-center bg-no-repeat pb-[100px] pt-[200px] transition-all duration-300">
        <div class="mb-[50px] flex flex-col gap-[10px]">
            <h2 class="text-center text-[50px] font-extrabold leading-[70px] text-white">My Projects
            </h2>
            <p class="text-center text-lg text-white">Collaborating with amazing clients worldwide</p>
        </div>
        <div class="projects mb-[30px] flex w-full flex-col overflow-hidden">
            <div class="group/slider slider flex w-max flex-nowrap items-center">
                <div
                    class="project-container group-hover/slider:pause-animate flex animate-[slide_50s_linear_infinite] flex-nowrap items-center gap-[30px] pl-[30px]">

                    @forelse ($projects as $index => $project)
                        @if ($index < 3)
                            <div
                                class="group relative flex h-[450px] w-[650px] shrink-0 rounded-[30px] border border-white bg-[#FFFFFF33] p-5 backdrop-blur">
                                <div class="absolute h-[408px] w-[608px] overflow-hidden rounded-[30px]">
                                    <img src="{{ Storage::url(path: $project->cover) }}"
                                        class="h-full w-full object-cover" alt="thumbnail">
                                </div>
                                <div
                                    class="relative flex w-full flex-col items-center justify-center gap-[50px] rounded-[30px] bg-portto-black opacity-0 transition-all duration-300 hover:opacity-100">
                                    <div class="z-10 text-center">
                                        <p class="mb-[10px] text-[32px] font-extrabold leading-[48px] text-white">
                                            {{ $project->name }}</p>
                                        <p class="text-lg text-[#BABABC]">
                                            {{ $project->category }}</p>
                                    </div>
                                    <a href="{{ route('front.details', $project) }}"
                                        class="z-10 h-fit w-fit rounded-full bg-portto-light-gold p-[14px_30px] text-center text-lg font-bold text-portto-black transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View
                                        Details</a>
                                    <img src="{{ asset('images/Ellipse.svg') }}"
                                        class="absolute left-1/2 top-1/2 w-1/2 -translate-x-1/2 -translate-y-1/2 transform"
                                        alt="background icon">
                                </div>
                            </div>
                        @endif
                    @empty
                    @endforelse

                </div>
                <div
                    class="project-container group-hover/slider:pause-animate flex animate-[slide_50s_linear_infinite] flex-nowrap items-center gap-[30px] pl-[30px]">

                    @forelse ($projects as $index => $project)
                        @if ($index < 3)
                            <div
                                class="group relative flex h-[450px] w-[650px] shrink-0 rounded-[30px] border border-white bg-[#FFFFFF33] p-5 backdrop-blur">
                                <div class="absolute h-[408px] w-[608px] overflow-hidden rounded-[30px]">
                                    <img src="{{ Storage::url(path: $project->cover) }}"
                                        class="h-full w-full object-cover" alt="thumbnail">
                                </div>
                                <div
                                    class="relative flex w-full flex-col items-center justify-center gap-[50px] rounded-[30px] bg-portto-black opacity-0 transition-all duration-300 hover:opacity-100">
                                    <div class="z-10 text-center">
                                        <p class="mb-[10px] text-[32px] font-extrabold leading-[48px] text-white">
                                            {{ $project->name }}</p>
                                        <p class="text-lg text-[#BABABC]">
                                            {{ $project->category }}</p>
                                    </div>
                                    <a href="{{ route('front.details', $project) }}"
                                        class="z-10 h-fit w-fit rounded-full bg-portto-light-gold p-[14px_30px] text-center text-lg font-bold text-portto-black transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View
                                        Details</a>
                                    <img src="{{ asset('images/Ellipse.svg') }}"
                                        class="absolute left-1/2 top-1/2 w-1/2 -translate-x-1/2 -translate-y-1/2 transform"
                                        alt="background icon">
                                </div>
                            </div>
                        @endif
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
        <div class="projects flex w-full flex-col overflow-hidden">
            <div class="group/slider slider flex w-max flex-nowrap items-center">
                <div
                    class="project-container group-hover/slider:pause-animate flex animate-[slideToR_50s_linear_infinite] flex-nowrap items-center gap-[30px] pl-[30px]">

                    @forelse ($projects as $index => $project)
                        @if ($index >= 3)
                            <div
                                class="group relative flex h-[450px] w-[650px] shrink-0 rounded-[30px] border border-white bg-[#FFFFFF33] p-5 backdrop-blur">
                                <div class="absolute h-[408px] w-[608px] overflow-hidden rounded-[30px]">
                                    <img src="{{ Storage::url(path: $project->cover) }}"
                                        class="h-full w-full object-cover" alt="thumbnail">
                                </div>
                                <div
                                    class="relative flex w-full flex-col items-center justify-center gap-[50px] rounded-[30px] bg-portto-black opacity-0 transition-all duration-300 hover:opacity-100">
                                    <div class="z-10 text-center">
                                        <p class="mb-[10px] text-[32px] font-extrabold leading-[48px] text-white">
                                            {{ $project->name }}</p>
                                        <p class="text-lg text-[#BABABC]">
                                            {{ $project->category }}</p>
                                    </div>
                                    <a href="{{ route('front.details', $project) }}"
                                        class="z-10 h-fit w-fit rounded-full bg-portto-light-gold p-[14px_30px] text-center text-lg font-bold text-portto-black transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View
                                        Details</a>
                                    <img src="{{ asset('images/Ellipse.svg') }}"
                                        class="absolute left-1/2 top-1/2 w-1/2 -translate-x-1/2 -translate-y-1/2 transform"
                                        alt="background icon">
                                </div>
                            </div>
                        @endif
                    @empty
                    @endforelse

                </div>
                <div
                    class="project-container group-hover/slider:pause-animate flex animate-[slideToR_50s_linear_infinite] flex-nowrap items-center gap-[30px] pl-[30px]">

                    @forelse ($projects as $index => $project)
                        @if ($index >= 3)
                            <div
                                class="group relative flex h-[450px] w-[650px] shrink-0 rounded-[30px] border border-white bg-[#FFFFFF33] p-5 backdrop-blur">
                                <div class="absolute h-[408px] w-[608px] overflow-hidden rounded-[30px]">
                                    <img src="{{ Storage::url(path: $project->cover) }}"
                                        class="h-full w-full object-cover" alt="thumbnail">
                                </div>
                                <div
                                    class="relative flex w-full flex-col items-center justify-center gap-[50px] rounded-[30px] bg-portto-black opacity-0 transition-all duration-300 hover:opacity-100">
                                    <div class="z-10 text-center">
                                        <p class="mb-[10px] text-[32px] font-extrabold leading-[48px] text-white">
                                            {{ $project->name }}</p>
                                        <p class="text-lg text-[#BABABC]">
                                            {{ $project->category }}</p>
                                    </div>
                                    <a href="{{ route('front.details', $project) }}"
                                        class="z-10 h-fit w-fit rounded-full bg-portto-light-gold p-[14px_30px] text-center text-lg font-bold text-portto-black transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View
                                        Details</a>
                                    <img src="{{ asset('images/Ellipse.svg') }}"
                                        class="absolute left-1/2 top-1/2 w-1/2 -translate-x-1/2 -translate-y-1/2 transform"
                                        alt="background icon">
                                </div>
                            </div>
                        @endif
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </section>

    {{-- Workflow --}}
    <section id="Workflow"
        class="container relative mx-auto max-w-[1130px] pb-[200px] pt-[100px] text-portto-black dark:text-white">
        <div class="flex flex-col justify-center gap-[50px]">
            <h2 class="text-center text-[50px] font-extrabold leading-[70px]">My Workflow Suitable <br>For Any Project
            </h2>
            <div class="flex items-center justify-between">
                <div class="flex w-[350px] shrink-0 flex-col items-center gap-[30px]">
                    <div class="flex-none">
                        <img src="{{ asset('images/icons/messages-notif.svg') }}" alt="icon">
                    </div>
                    <div class="flex flex-col gap-[10px] text-center">
                        <p class="text-[22px] font-extrabold leading-[33px]">Research & Validate</p>
                        <p class="text-lg leading-[34px]">Ensuring all requirements were matching with market
                            conditions</p>
                    </div>
                </div>
                <div class="flex w-[350px] shrink-0 flex-col items-center gap-[30px]">
                    <div class="flex-none">
                        <img src="{{ asset('images/icons/programming-notif.svg') }}" alt="icon">
                    </div>
                    <div class="flex flex-col gap-[10px] text-center">
                        <p class="text-[22px] font-extrabold leading-[33px]">Building with Teams</p>
                        <p class="text-lg leading-[34px]">Working with agile framework to product a better results</p>
                    </div>
                </div>
                <div class="flex w-[350px] shrink-0 flex-col items-center gap-[30px]">
                    <div class="flex-none">
                        <img src="{{ asset('images/icons/like-notif.svg') }}" alt="icon">
                    </div>
                    <div class="flex flex-col gap-[10px] text-center">
                        <p class="text-[22px] font-extrabold leading-[33px]">Deliver to Clients</p>
                        <p class="text-lg leading-[34px]">I deliver exceptional results that exceed client expectations</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Valuation Tabs --}}
        <div
            class="stats container absolute bottom-0 left-1/2 mx-auto flex h-[180px] w-full max-w-[1130px] -translate-x-1/2 translate-y-1/2 transform items-center justify-between rounded-[30px] bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] px-[100px] text-portto-black shadow-2xl">
            <div class="h-fit w-fit text-center">
                <p class="text-[40px] font-extrabold leading-[60px]">$230M</p>
                <p class="text-lg font-semibold">Valuation</p>
            </div>
            <div class="h-fit w-fit text-center">
                <p class="text-[40px] font-extrabold leading-[60px]">31,934</p>
                <p class="text-lg font-semibold">Projects</p>
            </div>
            <div class="h-fit w-fit text-center">
                <p class="text-[40px] font-extrabold leading-[60px]">245</p>
                <p class="text-lg font-semibold">Startups IPO</p>
            </div>
            <div class="h-fit w-fit text-center">
                <p class="text-[40px] font-extrabold leading-[60px]">9/10</p>
                <p class="text-lg font-semibold">Successful</p>
            </div>
            <div class="h-fit w-fit text-center">
                <p class="text-[40px] font-extrabold leading-[60px]">562</p>
                <p class="text-lg font-semibold">Companies</p>
            </div>
        </div>

    </section>

    {{-- Impact Metrics Dashboard --}}
    <section id="ImpactMetrics" class="bg-white py-[100px] transition-all duration-300 dark:bg-portto-black">
        <div class="container mx-auto max-w-[1130px]">
            <div class="mb-[50px] flex flex-col gap-[10px]">
                <h2 class="text-center text-[50px] font-extrabold leading-[70px] text-portto-black dark:text-white">
                    Real Impact, <br>Measurable Results
                </h2>
                <p class="text-center text-lg text-portto-black/70 dark:text-white/70">Proven track record backed by data
                    and achievements</p>
            </div>

            <div class="metrics-container grid grid-cols-1 gap-[30px] md:grid-cols-2 lg:grid-cols-3">
                {{-- Metric Card 1: Projects Delivered --}}
                <div
                    class="metric-card group flex flex-col items-center gap-5 rounded-[30px] border border-gray-200 bg-gradient-to-br from-gray-50 to-white p-[40px] transition-all duration-300 hover:scale-105 hover:border-portto-purple hover:shadow-2xl dark:border-white/10 dark:from-white/5 dark:to-white/10 dark:hover:border-portto-light-gold">
                    <div
                        class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-portto-purple to-purple-600 shadow-lg transition-all duration-300 group-hover:shadow-[0_10px_30px_0_#4920E580]">
                        <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-center">
                        <p class="metric-number mb-2 text-[48px] font-extrabold leading-none text-portto-black dark:text-white"
                            data-target="150">0</p>
                        <p class="text-xl font-bold text-portto-black dark:text-white">Projects Delivered</p>
                        <p class="mt-2 text-sm text-portto-black/60 dark:text-white/60">Successfully completed</p>
                    </div>
                </div>

                {{-- Metric Card 2: Client Satisfaction --}}
                <div
                    class="metric-card group flex flex-col items-center gap-5 rounded-[30px] border border-gray-200 bg-gradient-to-br from-gray-50 to-white p-[40px] transition-all duration-300 hover:scale-105 hover:border-portto-green hover:shadow-2xl dark:border-white/10 dark:from-white/5 dark:to-white/10 dark:hover:border-portto-light-gold">
                    <div
                        class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-portto-green to-green-600 shadow-lg transition-all duration-300 group-hover:shadow-[0_10px_30px_0_#06D7A080]">
                        <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="text-center">
                        <p class="metric-number mb-2 text-[48px] font-extrabold leading-none text-portto-black dark:text-white"
                            data-target="98">0<span class="text-3xl">%</span></p>
                        <p class="text-xl font-bold text-portto-black dark:text-white">Client Satisfaction</p>
                        <p class="mt-2 text-sm text-portto-black/60 dark:text-white/60">Average rating</p>
                    </div>
                </div>

                {{-- Metric Card 3: On-Time Delivery --}}
                <div
                    class="metric-card group flex flex-col items-center gap-5 rounded-[30px] border border-gray-200 bg-gradient-to-br from-gray-50 to-white p-[40px] transition-all duration-300 hover:scale-105 hover:border-portto-light-gold hover:shadow-2xl dark:border-white/10 dark:from-white/5 dark:to-white/10 dark:hover:border-portto-light-gold">
                    <div
                        class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-portto-light-gold to-amber-500 shadow-lg transition-all duration-300 group-hover:shadow-[0_10px_30px_0_#FFE7C280]">
                        <svg class="h-10 w-10 text-portto-black" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-center">
                        <p class="metric-number mb-2 text-[48px] font-extrabold leading-none text-portto-black dark:text-white"
                            data-target="95">0<span class="text-3xl">%</span></p>
                        <p class="text-xl font-bold text-portto-black dark:text-white">On-Time Delivery</p>
                        <p class="mt-2 text-sm text-portto-black/60 dark:text-white/60">Projects on schedule</p>
                    </div>
                </div>

                {{-- Metric Card 4: Code Quality --}}
                <div
                    class="metric-card group flex flex-col items-center gap-5 rounded-[30px] border border-gray-200 bg-gradient-to-br from-gray-50 to-white p-[40px] transition-all duration-300 hover:scale-105 hover:border-portto-red hover:shadow-2xl dark:border-white/10 dark:from-white/5 dark:to-white/10 dark:hover:border-portto-light-gold">
                    <div
                        class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-portto-red to-red-600 shadow-lg transition-all duration-300 group-hover:shadow-[0_10px_30px_0_#F4544080]">
                        <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <div class="text-center">
                        <p class="metric-number mb-2 text-[48px] font-extrabold leading-none text-portto-black dark:text-white"
                            data-target="92">0<span class="text-3xl">%</span></p>
                        <p class="text-xl font-bold text-portto-black dark:text-white">Code Quality</p>
                        <p class="mt-2 text-sm text-portto-black/60 dark:text-white/60">Test coverage</p>
                    </div>
                </div>

                {{-- Metric Card 5: Years Experience --}}
                <div
                    class="metric-card group flex flex-col items-center gap-5 rounded-[30px] border border-gray-200 bg-gradient-to-br from-gray-50 to-white p-[40px] transition-all duration-300 hover:scale-105 hover:border-blue-500 hover:shadow-2xl dark:border-white/10 dark:from-white/5 dark:to-white/10 dark:hover:border-portto-light-gold">
                    <div
                        class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-blue-500 to-blue-600 shadow-lg transition-all duration-300 group-hover:shadow-[0_10px_30px_0_#3B82F680]">
                        <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <div class="text-center">
                        <p class="metric-number mb-2 text-[48px] font-extrabold leading-none text-portto-black dark:text-white"
                            data-target="8">0<span class="text-3xl">+</span></p>
                        <p class="text-xl font-bold text-portto-black dark:text-white">Years Experience</p>
                        <p class="mt-2 text-sm text-portto-black/60 dark:text-white/60">In the industry</p>
                    </div>
                </div>

                {{-- Metric Card 6: Technologies Mastered --}}
                <div
                    class="metric-card group flex flex-col items-center gap-5 rounded-[30px] border border-gray-200 bg-gradient-to-br from-gray-50 to-white p-[40px] transition-all duration-300 hover:scale-105 hover:border-indigo-500 hover:shadow-2xl dark:border-white/10 dark:from-white/5 dark:to-white/10 dark:hover:border-portto-light-gold">
                    <div
                        class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-indigo-500 to-indigo-600 shadow-lg transition-all duration-300 group-hover:shadow-[0_10px_30px_0_#6366F180]">
                        <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <div class="text-center">
                        <p class="metric-number mb-2 text-[48px] font-extrabold leading-none text-portto-black dark:text-white"
                            data-target="25">0<span class="text-3xl">+</span></p>
                        <p class="text-xl font-bold text-portto-black dark:text-white">Technologies</p>
                        <p class="mt-2 text-sm text-portto-black/60 dark:text-white/60">Mastered & delivered</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Workflow --}}

    <x-faq />

    <x-footer />

    @push('after-script')
        <script src="{{ asset('js/main.js') }}"></script>
    @endpush
@endsection
