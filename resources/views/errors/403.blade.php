<x-app-layout>
    <x-slot name="header">
        @include('includes/header')
    </x-slot>

    <div class="container mx-auto my-12 md:px-12">
        <div class="relative p-5 text-xl text-center text-gray-600 bg-gray-200 border">
            <h1>403</h1>
            <h3>{{ $exception->getMessage() }}</h3>
        </div>
    </div>
</x-app-layout>
