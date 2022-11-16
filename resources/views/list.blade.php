<x-app-layout>
    <x-slot name='header'>
        @include('includes.header')
    </x-slot>

    <div class="py-2">
        @if (count($places) == 0)
        <x-alert title="{{ __('There Is No Location For This Category') }}" />
        @endif
        <div class="grid grid-cols-1 gap-4 mx-auto max-w-7xl lg:grid-cols-2">
            <div>
                @forelse ($places as $place)
                <div class="flex mb-5 bg-white">
                    <div class="relative flex-none w-48">
                        <img src="{{ $place->image }}" class="absolute inset-0 object-cover w-full h-full" alt="">
                    </div>
                    <div class="flex-auto p-6">
                        <div class="flex-wrap">
                            <h1 class="flex-auto text-xl font-semibold">
                                {{ $place->name }}
                            </h1>
                        </div>
                        <div class="flex mt-5 mb-4 space-x-3 text-sm font-medium">
                            <div class="flex flex-auto space-x-4">
                                {{ $place->address }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
