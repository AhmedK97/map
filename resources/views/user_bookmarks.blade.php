<x-app-layout>
    <x-slot name="header">
        @include('includes/header')
    </x-slot>

    <div class="container p-5 mx-auto md:px-12">
        <h3 class="mt-4 mb-4 text-2xl">الإشارات المرجعية  </h3><hr/>
         @if(!count($bookmarks))
            <x-alert  title="لا توجد أي إشارات مرجعية بعد" />
         @endif

         @foreach($bookmarks as $place)
            <div class="flex mt-5 bg-white border">
                <div class="relative flex-none w-48">
                    <img src="{{ $place->image }}" alt="" class="absolute inset-0 object-cover w-full h-full" />
                </div>
                <div class="flex-auto p-6">
                    <div class="flex flex-wrap">
                        <h1 class="flex-auto text-xl font-semibold">
                            {{ $place->name }}
                        </h1>
                        <div class="flex-none w-full mt-2 text-sm font-medium text-gray-500">
                            {{ $place->address }}
                        </div>
                    </div>
                    <div class="flex mt-5 mb-4 space-x-3 text-sm font-medium">
                        <div class="flex flex-auto space-x-3">
                            <a href="{{ route('place.show', [$place->id, $place->slug]) }}" class="flex items-center justify-center h-8 border border-gray-300 rounded-md w-15">عرض</a>
                        </div>
                    </div>
                </div>
            </div>
         @endforeach
    </div>
</x-app-layout>
