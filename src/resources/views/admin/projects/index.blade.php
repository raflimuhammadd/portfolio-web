<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('My Projects') }}
            </h2>
            <a href="{{ route('admin.projects.create') }}"
                class="rounded-full bg-indigo-600 px-6 py-3 font-bold text-white transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
                Add New Project
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col gap-y-10">

                @if (session('success'))
                    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition
                        class="rounded-xl border border-green-300 bg-green-100 p-4 text-green-800 dark:border-green-800 dark:bg-green-900 dark:text-green-300">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="font-bold">{{ session('success') }}</span>
                        </div>
                    </div>
                @endif

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                    @forelse ($projects as $project)
                        <div
                            class="group flex flex-col justify-between rounded-2xl bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg dark:bg-gray-800">

                            {{-- Content --}}
                            <div>
                                <div class="relative overflow-hidden rounded-xl">
                                    <img src="{{ Storage::url($project->cover) }}" alt="{{ $project->name }}"
                                        class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    <div
                                        class="absolute right-2 top-2 rounded-full bg-white/90 px-3 py-1 text-xs font-bold text-indigo-950 shadow-sm backdrop-blur-sm">
                                        {{ $project->category }}
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                        {{ $project->name }}
                                    </h3>
                                    <p class="mt-2 line-clamp-2 text-sm text-slate-500 dark:text-slate-400">
                                        {{ $project->about }}
                                    </p>
                                </div>
                            </div>

                            {{-- Actions --}}
                            <div class="mt-6 flex flex-col gap-2">
                                <div class="flex flex-wrap gap-2">
                                    <a href="{{ route('admin.project.assign.tool', $project) }}"
                                        class="flex flex-1 items-center justify-center gap-2 rounded-lg bg-indigo-50 px-3 py-2 text-sm font-semibold text-indigo-600 transition hover:bg-indigo-100 dark:bg-indigo-900 dark:text-indigo-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                        </svg>
                                        Tools
                                    </a>
                                    <a href="{{ route('admin.project_screenshots.create', $project) }}"
                                        class="flex flex-1 items-center justify-center gap-2 rounded-lg bg-indigo-50 px-3 py-2 text-sm font-semibold text-indigo-600 transition hover:bg-indigo-100 dark:bg-indigo-900 dark:text-indigo-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Shots
                                    </a>
                                </div>
                                <div
                                    class="flex items-center justify-between border-t border-gray-100 pt-3 dark:border-gray-700">
                                    <a href="{{ route('admin.projects.edit', $project) }}"
                                        class="flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-indigo-600 dark:text-slate-400 dark:hover:text-indigo-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this project?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="flex items-center gap-2 text-sm font-medium text-red-500 transition hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    @empty
                        <div
                            class="col-span-full flex flex-col items-center justify-center rounded-2xl bg-white py-12 text-center shadow-sm dark:bg-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-slate-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            <h3 class="mt-2 text-lg font-medium text-gray-900 dark:text-white">No Projects Found</h3>
                            <p class="mt-1 text-slate-500 dark:text-slate-400">Add a project to your portfolio.</p>
                            <a href="{{ route('admin.projects.create') }}"
                                class="mt-4 inline-flex items-center rounded-full bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-700">
                                Add New Project
                            </a>
                        </div>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
