<x-app-layout>
    <x-slot name="header">
    <center>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h1>
    </center>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}           
                  <a href="{{ route('topics.index') }}" style="color: blue; text-decoration: none; margin-right: 10px;">Topics</a>
                    <a href="{{ route('categories.index') }}" style="color: blue; text-decoration: none; margin-right: 10px;">Categories</a>
                    <a href="{{ route('courses.index') }}" style="color: blue; text-decoration: none; margin-right: 10px;">Courses</a>   
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}           
                    {{-- <a href="{{ route('topics.index') }}" style="color: blue; text-decoration: none; margin-right: 10px;">Topics</a>
                    <a href="{{ route('categories.index') }}" style="color: blue; text-decoration: none; margin-right: 10px;">Categories</a>
                    <a href="{{ route('courses.index') }}" style="color: blue; text-decoration: none; margin-right: 10px;">Courses</a>
                    
                </div>
            </div>
        </div>
    </div> --}}



</x-app-layout>
