<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-5xl sm:px-6 lg:px-8">
            <div class="flex flex-col gap-y-10">

                {{-- Assign Form --}}
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

                    <form action="{{ route('admin.project.assign.tool.store', $project) }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        <div class="flex flex-col gap-y-5">
                            <div class="flex items-center justify-between">
                                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                                    Assign Tools
                                </h1>
                                <a href="{{ route('admin.projects.index') }}"
                                    class="text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">Back
                                    to Projects</a>
                            </div>

                            <div class="flex items-center gap-x-5 rounded-xl bg-slate-50 p-4 dark:bg-slate-700/50">
                                <img src="{{ Storage::url($project->cover) }}" alt="{{ $project->name }}"
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
                                <label for="tool_id" class="text-base font-bold text-gray-900 dark:text-white">
                                    Choose Tool
                                </label>
                                <select name="tool_id" id="tool_id"
                                    class="rounded-xl border border-gray-300 px-4 py-3 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                                    <option value="">Select a tool to assign</option>
                                    @forelse($tools as $tool)
                                        <option value="{{ $tool->id }}">{{ $tool->name }}</option>
                                    @empty
                                        <option value="">No tools available</option>
                                    @endforelse
                                </select>
                            </div>

                            <button type="submit"
                                class="mt-2 w-full rounded-full bg-indigo-600 py-4 text-base font-bold text-white shadow-lg transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
                                Assign Tool
                            </button>
                        </div>
                    </form>
                </div>

                {{-- Existing Tools --}}
                <div class="overflow-hidden bg-white p-10 shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <h3 class="mb-5 text-xl font-bold text-gray-900 dark:text-white">
                        Computed Tools
                    </h3>

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                        @forelse ($project->tools as $tool)
                            <div
                                class="flex items-center justify-between rounded-xl bg-slate-50 p-4 transition hover:bg-slate-100 dark:bg-slate-700 dark:hover:bg-slate-600">
                                <div class="flex items-center gap-x-3">
                                    <img src="{{ Storage::url($tool->logo) }}" alt="{{ $tool->name }}"
                                        class="h-12 w-12 rounded-lg object-cover">
                                    <div>
                                        <h3 class="font-bold text-gray-900 dark:text-white">{{ $tool->name }}</h3>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">{{ $tool->tagline }}</p>
                                    </div>
                                </div>
                                <form action="{{ route('admin.project_tools.destroy', $tool->pivot->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="rounded-full bg-red-100 p-2 text-red-500 hover:bg-red-200 dark:bg-red-900/30 dark:text-red-400 dark:hover:bg-red-900/50">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        @empty
                            <p class="col-span-full py-5 text-center text-slate-500 dark:text-slate-400">
                                No tools assigned yet.
                            </p>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
