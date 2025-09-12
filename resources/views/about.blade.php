@extends('components.layouts.app')

@section('title', 'About Explore | Modern Blogging Platform')

@section('content')
    <section class="relative overflow-hidden">
        <!-- Decorative background -->
        <div aria-hidden="true" class="pointer-events-none absolute -top-24 -right-24 h-80 w-80 rounded-full blur-3xl opacity-25 bg-gradient-to-tr from-[var(--color-teal-300)] to-[var(--color-teal-500)]"></div>

        <div class="container mx-auto px-6 py-20">
            <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 rounded-full border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] px-3 py-1 text-xs font-semibold text-[var(--color-zinc-600)]">
                        <flux:icon.book-open-text class="w-4 h-4 text-[var(--color-accent)]" />
                        About Explore
                    </span>

                    <h2 class="mt-4 text-3xl sm:text-4xl md:text-5xl font-extrabold text-[var(--color-foreground)]">
                        A place for ideas, insights, and meaningful stories
                    </h2>
                    <p class="mt-4 text-lg leading-relaxed text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-300)]">
                        Explore is a modern publishing platform for writers, thinkers, and storytellers. We focus on a clean reading
                        experience, a delightful writing flow, and a community that values depth over noise.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="{{ route('write-for-us') }}" class="inline-flex items-center gap-2 rounded-xl bg-[var(--color-accent)] px-5 py-3 font-semibold text-white transition-all duration-200 hover:-translate-y-0.5 hover:shadow-md">
                            <flux:icon.pen-tool class="w-5 h-5" />
                            Start writing today
                        </a>
                        <a href="{{ route('authors') }}" class="inline-flex items-center gap-2 rounded-xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] px-5 py-3 font-semibold text-[var(--color-foreground)] transition-all duration-200 hover:bg-[var(--color-zinc-100)] dark:hover:bg-[var(--color-zinc-800)]">
                            <flux:icon.users class="w-5 h-5" />
                            Meet our authors
                        </a>
                    </div>

                    <!-- Small stats -->
                    <dl class="mt-10 grid grid-cols-3 gap-4 text-center">
                        <div class="rounded-xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-4">
                            <dt class="text-xs text-[var(--color-zinc-500)]">Writers</dt>
                            <dd class="mt-1 text-xl font-bold text-[var(--color-foreground)]">500+</dd>
                        </div>
                        <div class="rounded-xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-4">
                            <dt class="text-xs text-[var(--color-zinc-500)]">Articles</dt>
                            <dd class="mt-1 text-xl font-bold text-[var(--color-foreground)]">2k+</dd>
                        </div>
                        <div class="rounded-xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-4">
                            <dt class="text-xs text-[var(--color-zinc-500)]">Readers</dt>
                            <dd class="mt-1 text-xl font-bold text-[var(--color-foreground)]">100k+</dd>
                        </div>
                    </dl>
                </div>

                <div class="relative">
                    <div class="rounded-2xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-2 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Explore"
                             class="h-full w-full rounded-xl object-cover">
                    </div>

                    <!-- Floating card -->
                    <div class="absolute -bottom-6 -left-6 rounded-2xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] px-4 py-3 shadow-md">
                        <div class="flex items-center gap-3">
                            <div class="rounded-lg bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-2">
                                <flux:icon.users class="w-4 h-4 text-[var(--color-accent)]" />
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-[var(--color-foreground)]">Trusted community</p>
                                <p class="text-xs text-[var(--color-zinc-500)]">Writers from 40+ countries</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Values -->
            <div class="mt-20">
                <h3 class="text-xl font-bold text-[var(--color-foreground)]">Our values</h3>
                <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-2xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-6 transition-all duration-200 hover:-translate-y-1 hover:shadow-lg">
                        <div class="flex items-center gap-3">
                            <div class="rounded-xl bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-2">
                                <flux:icon.star class="w-5 h-5 text-[var(--color-accent)]" />
                            </div>
                            <h4 class="font-semibold text-[var(--color-foreground)]">Curated quality</h4>
                        </div>
                        <p class="mt-2 text-sm text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">Signal over noise—thoughtful ideas, clear writing, and useful insights.</p>
                    </div>

                    <div class="rounded-2xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-6 transition-all duration-200 hover:-translate-y-1 hover:shadow-lg">
                        <div class="flex items-center gap-3">
                            <div class="rounded-xl bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-2">
                                <flux:icon.folder-git-2 class="w-5 h-5 text-[var(--color-accent)]" />
                            </div>
                            <h4 class="font-semibold text-[var(--color-foreground)]">Built for makers</h4>
                        </div>
                        <p class="mt-2 text-sm text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">A simple, powerful platform that gets out of your way.</p>
                    </div>

                    <div class="rounded-2xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-6 transition-all duration-200 hover:-translate-y-1 hover:shadow-lg">
                        <div class="flex items-center gap-3">
                            <div class="rounded-xl bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-2">
                                <flux:icon.globe class="w-5 h-5 text-[var(--color-accent)]" />
                            </div>
                            <h4 class="font-semibold text-[var(--color-foreground)]">Open and global</h4>
                        </div>
                        <p class="mt-2 text-sm text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">Read and publish from anywhere, with a design that feels at home everywhere.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection