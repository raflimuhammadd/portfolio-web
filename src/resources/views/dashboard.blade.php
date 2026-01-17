<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col gap-y-10">

                {{-- Stats Overview --}}
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-2xl bg-white p-6 shadow-sm dark:bg-gray-800">
                        <div class="flex items-center gap-4">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-indigo-100 text-indigo-600 dark:bg-indigo-900 dark:text-indigo-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Projects</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $totalProjects }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-sm dark:bg-gray-800">
                        <div class="flex items-center gap-4">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-emerald-100 text-emerald-600 dark:bg-emerald-900 dark:text-emerald-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Tools</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $totalTools }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-sm dark:bg-gray-800">
                        <div class="flex items-center gap-4">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-orange-100 text-orange-600 dark:bg-orange-900 dark:text-orange-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Orders</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $totalOrders }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-sm dark:bg-gray-800">
                        <div class="flex items-center gap-4">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-green-100 text-green-600 dark:bg-green-900 dark:text-green-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Revenue</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">
                                    ${{ number_format($revenue) }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">

                    {{-- Quick Actions --}}
                    <div class="flex flex-col gap-y-5">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Quick Actions</h3>
                        <div class="overflow-hidden rounded-2xl bg-white p-6 shadow-sm dark:bg-gray-800">
                            <div class="grid grid-cols-2 gap-4">
                                <a href="{{ route('admin.projects.create') }}"
                                    class="flex flex-col items-center justify-center rounded-xl bg-indigo-50 p-4 transition hover:bg-indigo-100 dark:bg-indigo-900/30 dark:hover:bg-indigo-900/50">
                                    <div
                                        class="mb-2 rounded-full bg-indigo-100 p-3 text-indigo-600 dark:bg-indigo-900 dark:text-indigo-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4" />
                                        </svg>
                                    </div>
                                    <span class="font-bold text-gray-900 dark:text-white">Add Project</span>
                                </a>
                                <a href="{{ route('admin.tools.create') }}"
                                    class="flex flex-col items-center justify-center rounded-xl bg-emerald-50 p-4 transition hover:bg-emerald-100 dark:bg-emerald-900/30 dark:hover:bg-emerald-900/50">
                                    <div
                                        class="mb-2 rounded-full bg-emerald-100 p-3 text-emerald-600 dark:bg-emerald-900 dark:text-emerald-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                    </div>
                                    <span class="font-bold text-gray-900 dark:text-white">Add Tool</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Recent Orders --}}
                    <div class="flex flex-col gap-y-5">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white">Recent Orders</h3>
                            <a href="{{ route('admin.project_orders.index') }}"
                                class="text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">View
                                All</a>
                        </div>
                        <div class="flex flex-col gap-y-4">
                            @forelse($recentOrders as $order)
                                <div
                                    class="flex items-center justify-between rounded-2xl bg-white p-5 shadow-sm dark:bg-gray-800">
                                    <div class="flex flex-col">
                                        <h4 class="font-bold text-gray-900 dark:text-white">{{ $order->name }}</h4>
                                        <p class="text-sm text-slate-500 dark:text-slate-400">{{ $order->category }}</p>
                                    </div>
                                    <div class="flex flex-col items-end">
                                        <p class="font-bold text-indigo-950 dark:text-indigo-300">
                                            ${{ number_format($order->budget) }}</p>
                                        <p class="text-xs text-slate-400">{{ $order->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                            @empty
                                <p class="py-5 text-center text-slate-500 dark:text-slate-400">No recent orders found.
                                </p>
                            @endforelse
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
