@extends('layouts.app')
@section('title', 'Todos')

@section('content')
    <div class="container mx-auto p-4">
        <div class="mb-8 mt-4">
            <input type="text" placeholder="Search todos..." class="w-full px-6 py-4 bg-gray-100 rounded-full focus:bg-white focus:outline-none transition-colors duration-300 text-xl font-bold">
        </div>
        <div class="flex items-center mb-4">
            <label class="mr-2">
                <input type="checkbox" name="done" class="mr-1"> Done
            </label>
            <label>
                <input type="checkbox" name="not_done" class="mr-1"> Not Done
            </label>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mb-8">
            <div class="bg-gray-100 rounded-2xl shadow-md p-4 h-64 flex flex-col items-center justify-center text-gray-400 transform transition-transform duration-300 hover:scale-105">
                <span class="text-8xl font-bold">+</span>
                <span class="text-2xl mt-2">new</span>
            </div>
            @for ($i = 1; $i <= 21; $i++)
                <div
                    class="bg-gray-100 rounded-2xl shadow-md p-4 h-64 overflow-auto transform transition-transform duration-300 hover:scale-105 relative">
                    <div class="bg-primary text-white rounded-t-2xl p-2">
                        <h5 class="font-bold text-xl text-black line-clamp-2">{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500) }}</h5>
                    </div>
                    <div class="p-2">
                        <p class="line-clamp-3">{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500) }}</p>
                    </div>
                    <div class="flex justify-end items-center mt-2 absolute bottom-2 right-2">
                        @if ($i % 2 == 0)
                            <span class="text-sm text-gray-500 mr-2">{{ now()->addDays($i)->toDateString() }}</span>
                            <span class="inline-block px-2 py-1 rounded-full text-white text-xs bg-green-500">Done</span>
                        @else
                            <span class="inline-block px-2 py-1 rounded-full text-white text-xs bg-red-500">Not Done</span>
                        @endif
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection