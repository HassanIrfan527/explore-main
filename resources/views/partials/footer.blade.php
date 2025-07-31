<footer class="bg-zinc-900 dark:bg-zinc-950 border-t border-zinc-800 dark:border-zinc-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center space-x-6">
            <a href="#" class="text-zinc-400 hover:text-teal-500">
                <span class="sr-only">Facebook</span>
                <flux:icon.facebook class="h-6 w-6" />
            </a>

            <a href="#" class="text-zinc-400 hover:text-teal-500">
                <span class="sr-only">Instagram</span>
                <flux:icon.instagram class="h-6 w-6" />
            </a>

            <a href="#" class="text-zinc-400 hover:text-teal-500">
                <span class="sr-only">X</span>
                <flux:icon.twitter class="h-6 w-6" />
            </a>

            <a href="#" class="text-zinc-400 hover:text-teal-500">
                <span class="sr-only">GitHub</span>
                <flux:icon.github class="h-6 w-6" />
            </a>
        </div>
        <div class="mt-8">
            <p class="text-center text-base text-zinc-400">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
        </div>
    </div>
</footer>