<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Order Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-5xl sm:px-6 lg:px-8">
            <div class="flex flex-col gap-y-10">

                {{-- Back Button --}}
                <div class="flex items-start">
                    <a href="{{ route('admin.project_orders.index') }}"
                        class="flex items-center gap-2 text-sm font-medium text-slate-500 transition hover:text-indigo-600 dark:text-slate-400 dark:hover:text-indigo-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Back to Orders
                    </a>
                </div>

                {{-- Header Summary --}}
                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl bg-white p-6 shadow-sm dark:bg-gray-800">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Client Name</p>
                        <h3 class="mt-1 text-lg font-bold text-gray-900 dark:text-white">{{ $projectOrder->name }}</h3>
                        <p class="text-sm text-slate-400">{{ $projectOrder->email }}</p>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-sm dark:bg-gray-800">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Category</p>
                        <div
                            class="mt-2 inline-flex rounded-full bg-indigo-50 px-3 py-1 text-sm font-semibold text-indigo-600 dark:bg-indigo-900 dark:text-indigo-300">
                            {{ $projectOrder->category }}
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-sm dark:bg-gray-800">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Budget</p>
                        <h3 class="mt-1 text-2xl font-bold text-indigo-600 dark:text-indigo-400">
                            ${{ number_format($projectOrder->budget, 0, ',', '.') }}
                        </h3>
                    </div>
                </div>

                {{-- Brief Section --}}
                <div class="flex flex-col gap-y-4 rounded-2xl bg-white p-8 shadow-sm dark:bg-gray-800">
                    <div class="flex items-center gap-2 border-b border-gray-100 pb-4 dark:border-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 dark:text-indigo-400"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                            Project Brief
                        </h3>
                    </div>

                    <div class="prose max-w-none text-base leading-relaxed text-slate-600 dark:text-slate-300">
                        <p>
                            {{ $projectOrder->brief }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
