@extends('components.layouts.app')

@section('title', 'About Explore | Modern Blogging Platform')

@section('content')
<div class="bg-gray-100 dark:bg-gray-800">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">About Explore</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-300 text-lg">Explore is a modern blogging platform designed for writers, thinkers, and storytellers. Our mission is to provide a simple, beautiful, and powerful platform for sharing your ideas with the world. Whether you're a seasoned author or just starting out, Explore provides the tools you need to create and share your content.</p>
                <div class="mt-8">
                    <a href="{{ route('write-for-us') }}" class="text-blue-500 hover:text-blue-600 font-medium">Start writing today
                        <span class="ml-2">&#8594;</span></a>
                </div>
            </div>
            <div class="mt-12 md:mt-0">
                <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image"
                    class="object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</div>
@endsection