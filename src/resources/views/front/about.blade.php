@extends('front/layouts/app')
@section('title', 'About - prattfolio')
@section('content')
    <x-nav />

    <!-- Hero Section -->
    <section id="Header"
        class="relative flex w-full flex-col justify-center bg-white pb-[100px] pt-[50px] transition-all duration-300 dark:bg-portto-black">
        <div
            class="container relative mx-auto flex max-w-[1130px] flex-col gap-[30px] text-center text-portto-black dark:text-white">
            <p class="text-xl font-medium uppercase tracking-widest text-portto-light-gold">My Story</p>
            <h1 class="mx-auto max-w-[900px] text-[80px] font-extrabold leading-[90px]">
                Driven by Design.<br>Powered by Code.
            </h1>
            <p class="mx-auto max-w-[600px] text-xl leading-[34px] text-portto-black/80 dark:text-white/80">
                I am a multidisciplinary freelancer bridging the gap between aesthetic excellence and technical robustness.
            </p>
        </div>
    </section>

    <!-- Biography Section -->
    <section id="Biography" class="w-full bg-white pb-[100px] transition-all duration-300 dark:bg-portto-black">
        <div class="container mx-auto grid max-w-[1130px] grid-cols-2 gap-[100px] text-portto-black dark:text-white">
            <div class="flex flex-col gap-[30px]">
                <h2 class="text-[40px] font-bold leading-[50px]">From Concept to Creation</h2>
                <div class="flex flex-col gap-[20px] text-lg leading-[32px] text-portto-black/70 dark:text-white/70">
                    <p>
                        My journey began with a simple curiosity about how things work on the web. That curiosity quickly
                        blossomed into a career dedicated to crafting digital experiences that are not only functional but
                        also adaptable and scalable.
                    </p>
                    <p>
                        Over the years, I've had the privilege of working with startups and established companies, helping
                        them translate their vision into reality. I believe that good design is invisible—it just works. And
                        good code is the backbone that makes that experience possible.
                    </p>
                </div>
            </div>
            <div class="flex flex-col gap-[30px]">
                <h2 class="text-[40px] font-bold leading-[50px]">My Mission</h2>
                <div class="flex flex-col gap-[20px] text-lg leading-[32px] text-portto-black/70 dark:text-white/70">
                    <p>
                        I aim to empower businesses by providing them with the digital tools they need to succeed in a
                        competitive landscape. My approach is holistic; I don't just build websites, I build solutions.
                    </p>
                    <p>
                        Whether it's a complex web application or a simple landing page, I bring the same level of passion,
                        precision, and professionalism to every project.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="Stats"
        class="w-full border-b border-t border-[#E8E8E8] bg-white pb-[100px] pt-[100px] transition-all duration-300 dark:border-white/10 dark:bg-portto-black">
        <div class="container mx-auto flex max-w-[1130px] items-center justify-between text-portto-black dark:text-white">
            <div class="flex flex-col gap-[10px] text-center">
                <p class="text-[80px] font-extrabold text-portto-purple">5+</p>
                <p class="text-xl font-medium text-portto-black/60 dark:text-white/60">Years of Experience</p>
            </div>
            <div class="h-[80px] w-[1px] bg-portto-black/20 dark:bg-white/20"></div>
            <div class="flex flex-col gap-[10px] text-center">
                <p class="text-[80px] font-extrabold text-portto-purple">50+</p>
                <p class="text-xl font-medium text-portto-black/60 dark:text-white/60">Projects Completed</p>
            </div>
            <div class="h-[80px] w-[1px] bg-portto-black/20 dark:bg-white/20"></div>
            <div class="flex flex-col gap-[10px] text-center">
                <p class="text-[80px] font-extrabold text-portto-purple">30+</p>
                <p class="text-xl font-medium text-portto-black/60 dark:text-white/60">Happy Clients</p>
            </div>
            <div class="h-[80px] w-[1px] bg-portto-black/20 dark:bg-white/20"></div>
            <div class="flex flex-col gap-[10px] text-center">
                <p class="text-[80px] font-extrabold text-portto-purple">100%</p>
                <p class="text-xl font-medium text-portto-black/60 dark:text-white/60">Satisfaction Rate</p>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section id="Values" class="w-full bg-white py-[100px] transition-all duration-300 dark:bg-portto-black">
        <div class="container mx-auto flex max-w-[1130px] flex-col gap-[50px] text-portto-black dark:text-white">
            <div class="flex flex-col gap-[10px] text-center">
                <p class="text-lg font-medium uppercase tracking-widest text-portto-light-gold">Philosophy</p>
                <h2 class="text-[50px] font-extrabold">Core Values</h2>
            </div>
            <div class="grid grid-cols-3 gap-[30px]">
                <div
                    class="group flex flex-col gap-[20px] rounded-[20px] border border-[#E8E8E8] bg-gray-100 p-[40px] transition-all duration-300 hover:border-portto-purple hover:bg-gray-200 dark:border-white/10 dark:bg-white/5 dark:hover:bg-white/10">
                    <h3 class="text-[26px] font-bold">Precision</h3>
                    <p class="leading-[26px] text-portto-black/60 dark:text-white/60">
                        Attention to detail is what separates good from great. I obsess over every pixel and line of code.
                    </p>
                </div>
                <div
                    class="group flex flex-col gap-[20px] rounded-[20px] border border-[#E8E8E8] bg-gray-100 p-[40px] transition-all duration-300 hover:border-portto-purple hover:bg-gray-200 dark:border-white/10 dark:bg-white/5 dark:hover:bg-white/10">
                    <h3 class="text-[26px] font-bold">Empathy</h3>
                    <p class="leading-[26px] text-portto-black/60 dark:text-white/60">
                        Understanding the user is key. I design not just for screens, but for the humans behind them.
                    </p>
                </div>
                <div
                    class="group flex flex-col gap-[20px] rounded-[20px] border border-[#E8E8E8] bg-gray-100 p-[40px] transition-all duration-300 hover:border-portto-purple hover:bg-gray-200 dark:border-white/10 dark:bg-white/5 dark:hover:bg-white/10">
                    <h3 class="text-[26px] font-bold">Innovation</h3>
                    <p class="leading-[26px] text-portto-black/60 dark:text-white/60">
                        Staying ahead of the curve. I constantly explore new technologies to build better solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="CTA" class="bg-white pb-[50px] pt-[50px] transition-all duration-300 dark:bg-portto-black">
        <div
            class="container mx-auto flex w-full max-w-[1130px] flex-col items-center justify-center gap-[30px] rounded-[50px] bg-portto-purple px-[80px] py-[80px] text-center">
            <h2 class="max-w-[700px] text-[60px] font-extrabold leading-[70px] text-white">
                Ready to elevate your digital presence?
            </h2>
            Let's discuss how I can bring your vision to life.
            </p>
            <button
                class="w-fit rounded-full bg-white px-[40px] py-[20px] text-[20px] font-bold text-portto-purple transition-all duration-300 hover:bg-[#FFEDD3] hover:shadow-lg">
                Let's Talk
            </button>
        </div>
    </section>

    <x-footer />

    @push('after-script')
        <script src="{{ asset('js/main.js') }}"></script>
    @endpush
@endsection
