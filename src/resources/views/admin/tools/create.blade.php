<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('My Tools') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-5xl sm:px-6 lg:px-8">
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

                <form action="{{ route('admin.tools.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="flex flex-col gap-y-5">

                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                            Add New Tool
                        </h1>

                        {{-- Name --}}
                        <div class="flex flex-col gap-y-2">
                            <label for="name" class="text-base font-bold text-gray-900 dark:text-white">
                                Name
                            </label>
                            <input type="text" id="name" name="name"
                                class="rounded-xl border border-gray-300 px-4 py-3 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                placeholder="e.g. Laravel">
                        </div>

                        {{-- Tagline --}}
                        <div class="flex flex-col gap-y-2">
                            <label for="tagline" class="text-base font-bold text-gray-900 dark:text-white">
                                Tagline
                            </label>
                            <input type="text" id="tagline" name="tagline"
                                class="rounded-xl border border-gray-300 px-4 py-3 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                placeholder="e.g. PHP Framework">
                        </div>

                        {{-- Logo --}}
                        <div class="flex flex-col gap-y-2">
                            <label for="logo" class="text-base font-bold text-gray-900 dark:text-white">
                                Logo
                            </label>
                            <input type="file" id="logo" name="logo"
                                class="block w-full cursor-pointer rounded-xl border border-gray-300 bg-gray-50 text-sm text-slate-500 file:mr-4 file:border-0 file:bg-indigo-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-indigo-700 hover:file:bg-indigo-100 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:file:bg-indigo-900 dark:file:text-indigo-300">
                        </div>

                        <button type="submit"
                            class="mt-4 w-full rounded-full bg-indigo-600 py-4 text-base font-bold text-white shadow-lg transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
                            Upload Tool
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
