@extends('components.layouts.app')
@section('title', 'Explore | Modern Blogging Platform')

@section('content')
    <div class="flex items-center justify-center h-screen bg-white dark:bg-gray-900">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                Welcome to Explore
            </h1>
            <p class="max-w-2xl mx-auto my-6 text-gray-500 dark:text-gray-400">
                A modern blogging platform to share your stories with the world. Start your journey with us and let your voice be heard.
            </p>
            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Start Reading
            </a>
        </div>
    </div>
@endsection