@extends('components.layouts.app')
@section('title', 'Explore | Modern Blogging Platform')

@section('content')
    <section class="relative overflow-hidden">
        <!-- Decorative background -->
        <div aria-hidden="true" class="pointer-events-none absolute -top-24 -left-24 h-72 w-72 rounded-full blur-3xl opacity-30 bg-gradient-to-br from-[var(--color-teal-300)] to-[var(--color-teal-500)]"></div>
        <div aria-hidden="true" class="pointer-events-none absolute -bottom-24 -right-24 h-80 w-80 rounded-full blur-3xl opacity-20 bg-gradient-to-tr from-[var(--color-teal-400)] to-transparent"></div>

        <div class="container mx-auto px-6 pt-24 pb-20">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-flex items-center gap-2 rounded-full border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] px-3 py-1 text-xs font-semibold text-[var(--color-zinc-600)]">
                    <flux:icon.star class="w-4 h-4 text-[var(--color-accent)]" />
                    Modern Blogging Platform
                </span>

                <h1 class="mt-5 text-4xl md:text-6xl font-extrabold tracking-tight text-[var(--color-foreground)]">
                    Welcome to <span class="bg-gradient-to-r from-[var(--color-teal-600)] to-[var(--color-teal-400)] bg-clip-text text-transparent">Explore</span>
                </h1>

                <p class="mt-4 text-lg leading-relaxed text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-300)]">
                    Share ideas that matter. Read insightful articles, write compelling stories, and grow with a community of makers and thinkers.
                </p>

                <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                    <a href="{{ route('blogs') }}"
                       class="inline-flex items-center gap-2 rounded-xl bg-[var(--color-accent)] px-6 py-3 font-semibold text-white shadow-sm transition-all duration-200 hover:-translate-y-0.5 hover:shadow-md">
                        <flux:icon.book-open-text class="w-5 h-5" />
                        Explore Blogs
                    </a>

                    <a href="{{ route('write-for-us') }}"
                       class="inline-flex items-center gap-2 rounded-xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] px-6 py-3 font-semibold text-[var(--color-foreground)] transition-all duration-200 hover:bg-[var(--color-zinc-100)] dark:hover:bg-[var(--color-zinc-800)]">
                        <flux:icon.pen-tool class="w-5 h-5" />
                        Write for Us
                    </a>
                </div>

                <!-- Small reassurance -->
                <div class="mt-4 text-sm text-[var(--color-zinc-500)]">
                    No ads. Clean reading. Dark mode friendly.
                </div>
            </div>

            <!-- Feature highlights -->
            <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="group rounded-2xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-6 transition-all duration-200 hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-center gap-3">
                        <div class="rounded-xl bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-2">
                            <flux:icon.book-text class="w-5 h-5 text-[var(--color-accent)]" />
                        </div>
                        <h3 class="text-base font-semibold text-[var(--color-foreground)]">Quality content</h3>
                    </div>
                    <p class="mt-2 text-sm text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">Curated articles across design, development, AI, and product.</p>
                </div>

                <div class="group rounded-2xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-6 transition-all duration-200 hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-center gap-3">
                        <div class="rounded-xl bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-2">
                            <flux:icon.users class="w-5 h-5 text-[var(--color-accent)]" />
                        </div>
                        <h3 class="text-base font-semibold text-[var(--color-foreground)]">Community-driven</h3>
                    </div>
                    <p class="mt-2 text-sm text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">Join a growing network of authors and readers worldwide.</p>
                </div>

                <div class="group rounded-2xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-6 transition-all duration-200 hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-center gap-3">
                        <div class="rounded-xl bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-2">
                            <flux:icon.layout-grid class="w-5 h-5 text-[var(--color-accent)]" />
                        </div>
                        <h3 class="text-base font-semibold text-[var(--color-foreground)]">Beautiful experience</h3>
                    </div>
                    <p class="mt-2 text-sm text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">Fast, clean, and accessible UI with dark mode support.</p>
                </div>
            </div>
        </div>
    </section>
@endsection