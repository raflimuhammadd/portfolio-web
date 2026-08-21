@extends('front/layouts/app')
@section('title', 'prattfolio')
@section('content')

    {{-- Header --}}
    <section id="Header"
        class="relative mb-[493px] flex max-h-[665px] flex-col gap-[100px] bg-white transition-all duration-300 dark:bg-portto-black">
        <x-nav />
        <div class="hero container relative mx-auto flex max-w-[1130px] flex-col items-center justify-center">
            <h1 class="z-10 text-center text-[50px] font-extrabold leading-[70px] text-portto-black dark:text-white">
                {{ $project->name }}</h1>
            <p class="z-10 text-xl leading-[30px] text-portto-black dark:text-white">{{ $project->category }}</p>
            <div class="z-10 mt-[70px] flex h-[800px] w-full shrink-0 overflow-hidden rounded-[50px] bg-white">
                <img src="{{ Storage::url(path: $project->cover) }}" class="h-full w-full object-cover" alt="thumbnail">
            </div>
            <img src="{{ asset('images/Ellipse.svg') }}"
                class="absolute left-1/2 top-[135px] w-[35%] -translate-x-1/2 -translate-y-1/2 transform"
                alt="background icon">
        </div>
    </section>

    {{-- Details --}}
    <section id="Details" class="container mx-auto max-w-[1130px] pt-[50px] text-portto-black dark:text-white">
        <div class="flex justify-between gap-[50px]">
            <div class="flex max-w-full flex-1 flex-col gap-5 overflow-hidden">
                <h2 class="text-2xl font-extrabold">The First Purpose</h2>
                <div class="description flex max-w-full flex-col gap-4 overflow-hidden break-words text-lg font-medium leading-[38px] text-portto-black/80 dark:text-white/80"
                    style="word-break: break-word; overflow-wrap: anywhere;">
                    {!! $project->about !!}
                </div>
                <div class="flex gap-4">
                    <div class="flex items-center gap-1 rounded-[12px] bg-gray-100 p-[8px_10px] dark:bg-white/10">
                        <div class="flex h-5 w-5 shrink-0">
                            <img src="{{ asset('images/icons/crown-black.svg') }}" alt="icon" class="dark:invert">
                        </div>
                        <p class="font-semibold">Startup</p>
                    </div>
                    <div class="flex items-center gap-1 rounded-[12px] bg-gray-100 p-[8px_10px] dark:bg-white/10">
                        <div class="flex h-5 w-5 shrink-0">
                            <img src="{{ asset('images/icons/code-black.svg') }}" alt="icon" class="dark:invert">
                        </div>
                        <p class="font-semibold">Future AI</p>
                    </div>
                    <div class="flex items-center gap-1 rounded-[12px] bg-gray-100 p-[8px_10px] dark:bg-white/10">
                        <div class="flex h-5 w-5 shrink-0">
                            <img src="{{ asset('images/icons/chart-2-black.svg') }}" alt="icon" class="dark:invert">
                        </div>
                        <p class="font-semibold">Finance</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-5">
                <h2 class="text-2xl font-extrabold">Tech Stacks</h2>
                <div class="software-container flex w-[325px] shrink-0 flex-col gap-5">

                    @forelse ($project->tools as $tool)
                        <div
                            class="card-software group flex w-full items-center gap-4 rounded-2xl bg-gray-100 p-5 transition-all duration-300 hover:ring-2 hover:ring-portto-purple dark:bg-white/5 dark:hover:bg-white/10">
                            <div class="flex h-[70px] w-[70px] shrink-0 items-center justify-center rounded-full bg-white">
                                <img src="{{ Storage::url($tool->logo) }}" alt="tool">
                            </div>
                            <div class="flex flex-col gap-[2px]">
                                <p class="tool-title text-xl font-bold leading-[30px] text-portto-black dark:text-white">
                                    {{ $tool->name }}</p>
                                <p class="text-lg text-[#878C9C]">{{ $tool->tagline }}</p>
                            </div>
                        </div>
                    @empty
                        <p>No tools added.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    {{-- Screenshots --}}
    <section id="Screenshots" class="container mx-auto max-w-[1130px] pt-[50px] text-portto-black dark:text-white">
        <div class="flex flex-col gap-5">
            <h2 class="text-2xl font-extrabold">Screenshots</h2>
            <div class="grid grid-cols-4 gap-5">

                @forelse ($project->screenshots as $screenshot)
                    <a href="{{ Storage::url($screenshot->screenshot) }}"
                        class="group relative flex h-[190px] w-full overflow-hidden rounded-[30px] ring-1 ring-[#E4E5E8] transition-all duration-300 hover:ring-[3px] hover:ring-portto-purple"
                        data-fancybox="gallery" data-caption="Screenshot #1">
                        <img src="{{ Storage::url($screenshot->screenshot) }}" class="h-full w-full object-cover"
                            alt="thumbnail">
                        <img src="{{ asset('images/icons/eye.svg') }}"
                            class="absolute left-1/2 top-1/2 z-10 -translate-x-1/2 -translate-y-1/2 transform opacity-0 transition-all duration-300 group-hover:opacity-100"
                            alt="icon eye">
                    </a>
                @empty
                    <p>No screenshots added.</p>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Featured Testimonial --}}
    <section id="Featured-testimonial" class="container mx-auto max-w-[1130px] text-portto-black dark:text-white">
        <div class="flex items-center gap-[100px] px-[65px] pt-[100px]">
            <div class="relative flex flex-col gap-5">
                <div class="z-10 flex h-[250px] w-[200px] shrink-0 overflow-hidden rounded-[30px]">
                    <img src="{{ asset('images/hero-image-1.png') }}" alt="photo">
                </div>
                <div class="flex flex-col gap-[6px] text-center">
                    <p class="text-2xl font-bold">Jessie</p>
                    <p class="text-xl text-[#878C9C]">Co Founder</p>
                </div>
                <img src="{{ asset('images/icons/quote.svg') }}"
                    class="absolute left-[21px] top-[14px] -translate-x-1/2 -translate-y-1/2 transform" alt="icon">
            </div>
            <div class="flex flex-col gap-[50px]">
                <div class="flex shrink-0">
                    <img src="{{ asset('images/logos/logo-testi5.svg') }}" alt="logo">
                </div>
                <p class="text-[32px] font-semibold leading-[60px]">The expertise and dedication shown was exceptional. They
                    helped us build our first prototype to win our investor and early users heart that generate huge
                    attraction. Will hire again anytime soon.</p>
                <div class="flex h-8 w-fit shrink-0">
                    <img src="{{ asset('images/icons/Star.svg') }}" class="h-full w-full" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" class="h-full w-full" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" class="h-full w-full" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" class="h-full w-full" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" class="h-full w-full" alt="star">
                </div>
            </div>
        </div>
    </section>

    {{-- Book --}}
    <section id="Book" class="container mx-auto max-w-[1130px]">
        <div class="relative mt-[100px] flex h-[476px] justify-between rounded-[50px] border-[3px] border-solid border-[#FFE7C2] bg-[length:400px_400px] bg-center bg-no-repeat px-[50px] shadow-sm transition-all duration-300 hover:shadow-md dark:border-portto-black dark:bg-gradient-to-b dark:from-[#d4a760] dark:to-[#b8903d]"
            id="book-section">
            <div class="group/projects w-[220px] overflow-hidden">
                <div class="slider flex h-max flex-col justify-center">
                    <div
                        class="project-container group-hover/projects:pause-animate flex animate-[slideToT_30s_linear_infinite] flex-col justify-center gap-[30px] pt-[30px]">
                        @forelse ($projects as $index => $project)
                            @if ($index < 3)
                                <div
                                    class="flex h-[160px] w-full shrink-0 rounded-[30px] border border-white/20 bg-[#FFFFFF33] p-[10px] backdrop-blur dark:border-portto-black/10 dark:bg-portto-black/10">
                                    <div class="h-full w-full overflow-hidden rounded-[20px]">
                                        <img src="{{ Storage::url(path: $project->cover) }}"
                                            class="h-full w-full object-cover" alt="thumbnail">
                                    </div>
                                </div>
                            @endif
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="slider flex h-max flex-col justify-center">
                    <div
                        class="project-container group-hover/projects:pause-animate flex animate-[slideToT_30s_linear_infinite] flex-col justify-center gap-[30px] pt-[30px]">
                        <div
                            class="flex h-[160px] w-full shrink-0 rounded-[30px] border border-gray-200 bg-gray-100 p-[10px] backdrop-blur dark:border-white dark:bg-[#FFFFFF33]">
                            <div class="h-full w-full overflow-hidden rounded-[20px]">
                                <img src="{{ asset('images/thumbnails/thumbnail1.png') }}"
                                    class="h-full w-full object-cover" alt="thumbnail">
                            </div>
                        </div>
                        <div
                            class="flex h-[160px] w-full shrink-0 rounded-[30px] border border-gray-200 bg-gray-100 p-[10px] backdrop-blur dark:border-white dark:bg-[#FFFFFF33]">
                            <div class="h-full w-full overflow-hidden rounded-[20px]">
                                <img src="{{ asset('images/thumbnails/thumbnail2.png') }}"
                                    class="h-full w-full object-cover" alt="thumbnail">
                            </div>
                        </div>
                        <div
                            class="flex h-[160px] w-full shrink-0 rounded-[30px] border border-gray-200 bg-gray-100 p-[10px] backdrop-blur dark:border-white dark:bg-[#FFFFFF33]">
                            <div class="h-full w-full overflow-hidden rounded-[20px]">
                                <img src="{{ asset('images/thumbnails/thumbnail3.png') }}"
                                    class="h-full w-full object-cover" alt="thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative z-20 flex w-fit flex-col items-center justify-center gap-5 text-center">
                <h2 class="text-[40px] font-extrabold leading-[60px] text-white dark:text-portto-black">Let Me Help You
                    <br>Grow Business Today
                </h2>
                <p class="text-lg font-semibold leading-[32px] text-white dark:text-portto-black">I will dedicate my entire
                    career to focus <br>on
                    finishing your future dreams</p>
                <a href="{{ route('front.book') }}"
                    class="rounded-full bg-portto-light-gold p-[12px_30px] text-base font-bold text-portto-black shadow-[0_4px_10px_0_rgba(0,0,0,0.1)] transition-all duration-300 hover:bg-amber-400 hover:shadow-[0_10px_20px_0_#FFE7C280] dark:bg-portto-black dark:text-white dark:shadow-[0_4px_10px_0_rgba(0,0,0,0.5)] dark:hover:bg-portto-black/80 dark:hover:shadow-[0_12px_24px_0_rgba(0,0,0,0.9)]">
                    Book a Meeting
                </a>
            </div>
            <div class="group/projects w-[220px] overflow-hidden">
                <div class="slider flex h-max flex-col justify-center">
                    <div
                        class="project-container group-hover/projects:pause-animate flex animate-[slideToB_30s_linear_infinite] flex-col justify-center gap-[30px] pt-[30px]">
                        @forelse ($projects as $index => $project)
                            @if ($index >= 3)
                                <div
                                    class="flex h-[160px] w-full shrink-0 rounded-[30px] border border-white/20 bg-[#FFFFFF33] p-[10px] backdrop-blur dark:border-portto-black/10 dark:bg-portto-black/10">
                                    <div class="h-full w-full overflow-hidden rounded-[20px]">
                                        <img src="{{ Storage::url(path: $project->cover) }}"
                                            class="h-full w-full object-cover" alt="thumbnail">
                                    </div>
                                </div>
                            @endif
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="slider flex h-max flex-col justify-center">
                    <div
                        class="project-container group-hover/projects:pause-animate flex animate-[slideToB_30s_linear_infinite] flex-col justify-center gap-[30px] pt-[30px]">
                        <div
                            class="flex h-[160px] w-full shrink-0 rounded-[30px] border border-gray-200 bg-gray-100 p-[10px] backdrop-blur dark:border-white dark:bg-[#FFFFFF33]">
                            <div class="h-full w-full overflow-hidden rounded-[20px]">
                                <img src="{{ asset('images/thumbnails/thumbnail1.png') }}"
                                    class="h-full w-full object-cover" alt="thumbnail">
                            </div>
                        </div>
                        <div
                            class="flex h-[160px] w-full shrink-0 rounded-[30px] border border-gray-200 bg-gray-100 p-[10px] backdrop-blur dark:border-white dark:bg-[#FFFFFF33]">
                            <div class="h-full w-full overflow-hidden rounded-[20px]">
                                <img src="{{ asset('images/thumbnails/thumbnail2.png') }}"
                                    class="h-full w-full object-cover" alt="thumbnail">
                            </div>
                        </div>
                        <div
                            class="flex h-[160px] w-full shrink-0 rounded-[30px] border border-gray-200 bg-gray-100 p-[10px] backdrop-blur dark:border-white dark:bg-[#FFFFFF33]">
                            <div class="h-full w-full overflow-hidden rounded-[20px]">
                                <img src="{{ asset('images/thumbnails/thumbnail3.png') }}"
                                    class="h-full w-full object-cover" alt="thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-faq />

    <x-footer />

    @push('after-style')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    @endpush
    @push('after-script')
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <script>
            Fancybox.bind("[data-fancybox]", {
                // Your custom options
            });

            // Handle dark mode for book section background
            function updateBookBackground() {
                const bookSection = document.getElementById('book-section');
                if (bookSection) {
                    if (document.documentElement.classList.contains('dark')) {
                        // Dark mode: gold background, no image
                        bookSection.style.backgroundColor = '#FFCD83';
                        bookSection.style.backgroundImage = 'none';
                    } else {
                        // Light mode: black background with ellipse image
                        bookSection.style.backgroundColor = '#0B0B1B';
                        bookSection.style.backgroundImage = "url('{{ asset('images/Ellipse.svg') }}')";
                    }
                }
            }

            // Initial check
            updateBookBackground();

            // Watch for class changes on html element
            const observer = new MutationObserver(updateBookBackground);
            observer.observe(document.documentElement, {
                attributes: true,
                attributeFilter: ['class']
            });
        </script>
    @endpush
@endsection
