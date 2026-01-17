<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-5xl sm:px-6 lg:px-8">
            <div class="flex flex-col gap-y-10">

                {{-- Add Screenshot Form --}}
                <div class="overflow-hidden bg-white p-10 shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    @if ($errors->any())
                        <div class="mb-5 rounded-lg bg-red-100 p-4 text-red-700 dark:bg-red-900 dark:text-red-200">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.project_screenshots.store', $project) }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        <div class="flex flex-col gap-y-5">
                            <div class="flex items-center justify-between">
                                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                                    Add Screenshots
                                </h1>
                                <a href="{{ route('admin.projects.index') }}"
                                    class="text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">Back
                                    to Projects</a>
                            </div>

                            <div class="flex items-center gap-x-5 rounded-xl bg-slate-50 p-4 dark:bg-slate-700/50">
                                <img src="{{ Storage::url(path: $project->cover) }}" alt=""
                                    class="h-20 w-28 rounded-xl object-cover">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                        {{ $project->name }}
                                    </h3>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">
                                        {{ $project->category }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col gap-y-2">
                                <label for="screenshot" class="text-base font-bold text-gray-900 dark:text-white">
                                    Screenshot
                                </label>
                                <input type="file" id="screenshot" name="screenshot"
                                    class="block w-full cursor-pointer rounded-xl border border-gray-300 bg-gray-50 text-sm text-slate-500 file:mr-4 file:border-0 file:bg-indigo-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-indigo-700 hover:file:bg-indigo-100 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:file:bg-indigo-900 dark:file:text-indigo-300">
                            </div>

                            <button type="submit"
                                class="mt-2 w-full rounded-full bg-indigo-600 py-4 text-base font-bold text-white shadow-lg transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
                                Add Screenshot
                            </button>
                        </div>
                    </form>
                </div>

                {{-- Existing Screenshots --}}
                <div class="overflow-hidden bg-white p-10 shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <h3 class="mb-5 text-xl font-bold text-gray-900 dark:text-white">
                        Existing Screenshots
                    </h3>

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                        @forelse ($project->screenshots as $screenshot)
                            <div class="group relative overflow-hidden rounded-xl bg-slate-50 dark:bg-slate-700">
                                <img src="{{ Storage::url($screenshot->screenshot) }}" alt=""
                                    class="h-48 w-full object-cover transition duration-500 group-hover:scale-105">

                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black/50 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <form action="{{ route('admin.project_screenshots.destroy', $screenshot->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="rounded-full bg-red-600 px-4 py-2 text-sm font-bold text-white shadow-lg transition hover:scale-105 hover:bg-red-700">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <p class="col-span-full py-5 text-center text-slate-500 dark:text-slate-400">
                                No screenshots added yet.
                            </p>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
