@extends('front/layouts/app')
@section('title', 'Book a Meeting')
@section('content')

    <section id="Content"
        class="relative min-h-screen overflow-hidden bg-white transition-all duration-300 dark:bg-portto-black">

        {{-- Animated Gradient Background --}}
        <div
            class="animate-gradient absolute inset-0 bg-gradient-to-br from-portto-purple/10 via-portto-green/5 to-portto-purple/10">
        </div>
        <div
            class="absolute inset-0 bg-[url('{{ asset('images/background/side-image.png') }}')] bg-cover bg-center opacity-5">
        </div>

        {{-- Main Container --}}
        <div class="container relative z-10 mx-auto flex min-h-screen max-w-[1200px] items-center px-6 py-12">

            <div class="grid w-full gap-8 lg:grid-cols-12">

                {{-- Benefits Sidebar --}}
                <div class="lg:col-span-4">
                    <div class="sticky top-24 flex flex-col gap-6">

                        {{-- Testimonial Card --}}
                        <div
                            class="group rounded-[30px] border border-white/20 bg-white/80 p-8 shadow-xl backdrop-blur-xl transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl dark:border-white/10 dark:bg-portto-black/80">
                            <div class="mb-6 flex h-12 items-start overflow-hidden">
                                <img src="{{ asset('/images/logos/logo-testi5.svg') }}" class="h-full object-contain"
                                    alt="logo">
                            </div>
                            <p class="mb-6 text-lg font-semibold leading-relaxed text-portto-black dark:text-white">
                                "Working with Pratt transformed our vision into reality. The design quality and
                                technical expertise delivered results beyond our expectations."
                            </p>
                            <div class="mb-6 flex h-6 w-fit">
                                <img src="{{ asset('/images/icons/Star.svg') }}" class="h-full w-full" alt="star">
                                <img src="{{ asset('/images/icons/Star.svg') }}" class="h-full w-full" alt="star">
                                <img src="{{ asset('/images/icons/Star.svg') }}" class="h-full w-full" alt="star">
                                <img src="{{ asset('/images/icons/Star.svg') }}" class="h-full w-full" alt="star">
                                <img src="{{ asset('/images/icons/Star.svg') }}" class="h-full w-full" alt="star">
                            </div>
                        </div>

                        {{-- Benefits List --}}
                        <div
                            class="rounded-[30px] border border-white/20 bg-white/80 p-8 shadow-xl backdrop-blur-xl dark:border-white/10 dark:bg-portto-black/80">
                            <h3 class="mb-6 text-xl font-extrabold text-portto-black dark:text-white">Why Work With Me?</h3>
                            <div class="flex flex-col gap-4">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-portto-purple/20">
                                        <svg class="h-5 w-5 text-portto-purple" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-portto-black dark:text-white">Quick Response</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Get answers within 24 hours</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-portto-green/20">
                                        <svg class="h-5 w-5 text-portto-green" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-portto-black dark:text-white">Proven Expertise</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Years of industry experience</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-portto-red/20">
                                        <svg class="h-5 w-5 text-portto-red" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-portto-black dark:text-white">Premium Quality</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Exceptional attention to detail
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Form Section --}}
                <div class="lg:col-span-8">
                    <div
                        class="rounded-[30px] border border-white/20 bg-white/80 p-10 shadow-2xl backdrop-blur-xl dark:border-white/10 dark:bg-portto-black/80">

                        {{-- Header --}}
                        <div class="mb-10 text-center">
                            <h1 class="mb-3 text-5xl font-extrabold text-portto-black dark:text-white">Let's Create
                                Something Amazing</h1>
                            <p class="text-lg text-gray-600 dark:text-gray-400">Share your vision and I'll help bring it to
                                life</p>
                        </div>

                        {{-- Error Messages --}}
                        @if ($errors->any())
                            <div
                                class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-4 dark:border-red-900/50 dark:bg-red-900/20">
                                <ul class="list-disc pl-5">
                                    @foreach ($errors->all() as $error)
                                        <li class="text-sm font-semibold text-red-700 dark:text-red-300">
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Form --}}
                        <form method="POST" action="{{ route('front.book.store') }}" class="flex flex-col gap-6">
                            @csrf

                            {{-- Complete Name --}}
                            <label class="group flex flex-col gap-3 font-semibold">
                                <span class="flex items-center gap-2 text-portto-black dark:text-white">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    Complete Name
                                </span>
                                <input type="text" name="name" id="name"
                                    class="appearance-none rounded-2xl border-2 border-gray-200 bg-white px-6 py-4 text-portto-black outline-none transition-all duration-300 placeholder:text-base placeholder:font-normal placeholder:text-gray-400 focus:border-portto-purple focus:ring-4 focus:ring-portto-purple/20 dark:border-white/10 dark:bg-white/5 dark:text-white dark:placeholder:text-gray-500 dark:focus:border-portto-purple"
                                    placeholder="Enter your full name" required>
                            </label>

                            {{-- Email Address --}}
                            <label class="group flex flex-col gap-3 font-semibold">
                                <span class="flex items-center gap-2 text-portto-black dark:text-white">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    Email Address
                                </span>
                                <input type="email" name="email" id="email"
                                    class="appearance-none rounded-2xl border-2 border-gray-200 bg-white px-6 py-4 text-portto-black outline-none transition-all duration-300 placeholder:text-base placeholder:font-normal placeholder:text-gray-400 focus:border-portto-purple focus:ring-4 focus:ring-portto-purple/20 dark:border-white/10 dark:bg-white/5 dark:text-white dark:placeholder:text-gray-500 dark:focus:border-portto-purple"
                                    placeholder="your.email@example.com" required>
                            </label>

                            {{-- Category & Budget --}}
                            <div class="grid gap-6 md:grid-cols-2">
                                {{-- Category --}}
                                <label class="group flex flex-col gap-3 font-semibold">
                                    <span class="flex items-center gap-2 text-portto-black dark:text-white">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                            </path>
                                        </svg>
                                        Category
                                    </span>
                                    <select name="category" id="category"
                                        class="appearance-none rounded-2xl border-2 border-gray-200 bg-white bg-[url('{{ asset('/images/icons/arrow-down.svg') }}')] bg-[center_right_1.5rem] bg-no-repeat px-6 py-4 pr-14 font-semibold text-portto-black outline-none transition-all duration-300 invalid:font-normal invalid:text-gray-400 focus:border-portto-purple focus:ring-4 focus:ring-portto-purple/20 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:invalid:text-gray-400 dark:focus:border-portto-purple"
                                        required>
                                        <option value="" selected disabled hidden>Select
                                            category</option>
                                        <option value="Web Development"
                                            class="bg-white text-portto-black dark:bg-portto-black dark:text-white">Website
                                            Development</option>
                                        <option value="App Development"
                                            class="bg-white text-portto-black dark:bg-portto-black dark:text-white">App
                                            Development</option>
                                        <option value="Graphic Design"
                                            class="bg-white text-portto-black dark:bg-portto-black dark:text-white">Graphic
                                            Design</option>
                                        <option value="Digital Marketing"
                                            class="bg-white text-portto-black dark:bg-portto-black dark:text-white">Digital
                                            Marketing</option>
                                        <option value="Others"
                                            class="bg-white text-portto-black dark:bg-portto-black dark:text-white">Others
                                        </option>
                                    </select>
                                </label>

                                {{-- Budget --}}
                                <label class="group flex flex-col gap-3 font-semibold">
                                    <span class="flex items-center gap-2 text-portto-black dark:text-white">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                        Est. Budget (USD)
                                    </span>
                                    <input type="number" name="budget" id="budget"
                                        class="appearance-none rounded-2xl border-2 border-gray-200 bg-white px-6 py-4 text-portto-black outline-none transition-all duration-300 placeholder:text-base placeholder:font-normal placeholder:text-gray-400 focus:border-portto-purple focus:ring-4 focus:ring-portto-purple/20 dark:border-white/10 dark:bg-white/5 dark:text-white dark:placeholder:text-gray-500 dark:focus:border-portto-purple"
                                        placeholder="e.g., 5000" required>
                                </label>
                            </div>

                            {{-- Project Brief --}}
                            <label class="group flex flex-col gap-3 font-semibold">
                                <span class="flex items-center gap-2 text-portto-black dark:text-white">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                    Project Brief
                                </span>
                                <textarea name="brief" id="brief" rows="6"
                                    class="appearance-none rounded-2xl border-2 border-gray-200 bg-white px-6 py-4 text-portto-black outline-none transition-all duration-300 placeholder:text-base placeholder:font-normal placeholder:text-gray-400 focus:border-portto-purple focus:ring-4 focus:ring-portto-purple/20 dark:border-white/10 dark:bg-white/5 dark:text-white dark:placeholder:text-gray-500 dark:focus:border-portto-purple"
                                    placeholder="Describe your project goals, timeline, and any specific requirements..." required></textarea>
                            </label>

                            {{-- Submit Button --}}
                            <button type="submit"
                                class="group relative mt-4 flex w-full items-center justify-center overflow-hidden rounded-full bg-portto-purple px-8 py-5 text-xl font-bold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_40px_0_rgba(73,32,229,0.4)] hover:ring-4 hover:ring-portto-purple/30 hover:brightness-110">
                                <span class="relative z-10 flex items-center">
                                    Schedule Your Consultation
                                    <svg class="ml-2 h-6 w-6 transition-transform duration-300 group-hover:translate-x-2"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3">
                                        </path>
                                    </svg>
                                </span>
                            </button>
                        </form>

                    </div>
                </div>

            </div>

        </div>

    </section>

@endsection
