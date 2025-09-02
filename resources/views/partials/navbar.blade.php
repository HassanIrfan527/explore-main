<header
    class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[var(--color-zinc-200)] dark:border-b-[var(--color-zinc-700)] px-10 py-3">
    <div class="flex items-center gap-8">
        <a href="{{ route('home') }}" class="flex items-center gap-4 text-[var(--color-foreground)]" wire:navigate>
            <div class="size-4">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Explore</h2>
        </a>
        <div class="flex items-center gap-9">

            @auth
                <a class="text-[var(--color-foreground)] text-sm font-medium leading-normal"
                    href="{{ route('blogs') }}">Blogs</a>

            @endauth
            @guest

                <a class="text-[var(--color-foreground)] text-sm font-medium leading-normal" href="{{ route('authors') }}"
                    wire:navigate>Our Authors</a>
                <a class="text-[var(--color-foreground)] text-sm font-medium leading-normal" href="{{ route('about') }}"
                    wire:navigate>About</a>
            @endguest
        </div>
    </div>

    <div class="flex flex-1 justify-end">
            @guest
            <a href="{{ route('write-for-us') }}" wire:navigate
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[var(--color-accent)] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Write for Us</span>
            </a>
            <a href="{{ route('login') }}"
                class="ml-6 flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-blue-500 text-white text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Login</span>
            </a>
            @endguest

            @auth
            <div class="mr-4 w-1/4">
                <flux:input kbd="⌘K" size="lg" icon="magnifying-glass" placeholder="Search..." wire:model.live="search" />
            </div>
            @endauth
        </div>
</header>
