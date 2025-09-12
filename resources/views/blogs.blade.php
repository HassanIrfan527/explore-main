@extends('components.layouts.app')

@section('title', 'Blogs - Explore | Modern Blogging Platform')

@section('content')
    <section class="relative overflow-hidden">
        <!-- Decorative background -->
        <div aria-hidden="true" class="pointer-events-none absolute -top-20 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full blur-3xl opacity-20 bg-gradient-to-b from-[var(--color-teal-300)] to-[var(--color-teal-500)]"></div>

        <div class="container mx-auto px-6 pt-14 pb-6">
            <div class="flex flex-col items-center text-center">
                <span class="inline-flex items-center gap-2 rounded-full border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] px-3 py-1 text-xs font-semibold text-[var(--color-zinc-600)]">
                    <flux:icon.book-open-text class="w-4 h-4 text-[var(--color-accent)]" />
                    Latest articles and features
                </span>

                <h1 class="mt-4 text-3xl md:text-5xl font-extrabold tracking-tight text-[var(--color-foreground)]">
                    Discover stories on Explore
                </h1>
                <p class="mt-3 max-w-2xl text-lg text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-300)]">
                    Fresh perspectives on design, development, AI, and product—from makers around the world.
                </p>

                <!-- Category chips -->
                <div class="mt-6 flex flex-wrap justify-center gap-2">
                    <span class="rounded-full bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] px-4 py-1.5 text-sm font-medium text-[var(--color-accent)]">All</span>
                    <span class="rounded-full border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] px-4 py-1.5 text-sm text-[var(--color-foreground)]">Design</span>
                    <span class="rounded-full border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] px-4 py-1.5 text-sm text-[var(--color-foreground)]">Development</span>
                    <span class="rounded-full border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] px-4 py-1.5 text-sm text-[var(--color-foreground)]">AI</span>
                    <span class="rounded-full border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] px-4 py-1.5 text-sm text-[var(--color-foreground)]">Tutorials</span>
                </div>
            </div>
        </div>

        @livewire('blogs-data')
    </section>
@endsection
