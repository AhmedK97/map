<x-app-layout>
    <x-slot name="header">
        @include('includes.header')
    </x-slot>

    <div class="container px-4 mx-auto my-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            @foreach($places as $place)
            <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                <article class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <a href="{{ route('place.show' ,$place->slug)  }}">
                        <img src="{{$place->image}}" alt="">
                    </a>
                    <header class="items-center justify-between p-2 leading-tight md:p-4">
                        <h1 class="mb-3 text-base">
                            <a class="text-black no-underline hover:underline" href="">
                                {{ $place->name }}
                            </a>
                        </h1>
                        <h4 class="text-xs"> {{ $place->address }}</h4>
                    </header>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
