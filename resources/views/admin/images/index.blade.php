<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            画像一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex justify-end mb-4"> 
                                <button onclick="location.href='{{ route('admin.images.create')}}'" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録する</button>                        
                            </div> 
                            <div class="flex flex-wrap -m-4">
                            @foreach($images as $image)
                                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a href="{{ route('admin.images.edit', ['image' => $image->id])}}" class="block relative h-48 rounded overflow-hidden">
                                    @if(empty($image->filename))
                                        <img alt="" class="object-cover object-center w-full h-full block" src="{{ asset('images/no_image.jpeg') }}">
                                    @else
                                        <img alt="" class="object-cover object-center w-full h-full block" src="{{ asset('images/'. $image->filename) }}">
                                    @endif
                                </a>
                                <div class="mt-4">
                                    <h2 class="text-gray-900 title-font text-lg font-medium">{{ $image->title }}</h2>
                                </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                      </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
