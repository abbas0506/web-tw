@extends('layouts.base')
@section('header')
<header class="text-gray-600 body-font px-24">
    <div class="container mx-auto flex flex-wrap py-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Tailblocks</span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{route('courses.index')}}" class="mr-5 hover:text-gray-900">Courses</a>
            <a class="mr-5 hover:text-gray-900">Instructors</a>
            <a class="mr-5 hover:text-gray-900">Manage Students</a>
            <a class="mr-5 hover:text-gray-900">Summary</a>
        </nav>
        <div>Admin | {{Auth::user()->name}}</div>
        <a href="{{url('signout')}}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
            </svg>
        </a>
    </div>
</header>
@endsection

@section('body')
<div class="px-24 py-2 text-green-900 bg-green-200 text-xl">
    @yield('page-title')
</div>
<div class="container px-24">
    @yield('page-content')
</div>
@endsection