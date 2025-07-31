<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Explore')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

</head>

<body class="font-primary bg-background text-foreground min-h-screen">

    @include('partials.navbar')

    @yield('content')

    {{-- <div class="fixed bottom-6 right-6 z-50">
        <button @click="document.documentElement.classList.toggle('dark')"
            class="p-3 bg-[var(--color-accent)] dark:text-black text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-200 transform hover:scale-110">

            <flux:icon.moon class="w-5 h-5 dark:hidden" />
            <flux:icon.sun class="w-5 h-5 hidden dark:block" />
        </button>
    </div> --}}

    @livewireScripts

    @include('partials.footer')
</body>

</html>
