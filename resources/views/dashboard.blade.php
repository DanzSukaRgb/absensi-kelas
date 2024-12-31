<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium text-center">Selamat Datang! {{ Auth::user()->name }}</h3>
                    {{-- <p class="mt-2"></p> --}}
                    {{-- <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Explore</button> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>