@extends('components.layouts.app')
@section('title', 'Explore | Modern Blogging Platform')

@section('content')
    <!-- Demo Content -->
    <div class="pt-20 px-4">
        <div class="container mx-auto">
            <div class="space-y-8">
                <div class="text-center py-16">
                    <h1 class="text-4xl font-bold text-[var(--color-foreground)] mb-4">Modern Blog Platform</h1>
                    <p class="text-xl text-[var(--color-zinc-500)] max-w-2xl mx-auto">
                        Experience our enhanced navigation with smooth animations, dropdown menus, and a clean modern
                        design.
                    </p>
                </div>

                <!-- Demo sections to show scroll behavior -->
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-xl p-6">
                        <h3 class="text-xl font-semibold mb-3">Latest Articles</h3>
                        <p class="text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">
                            Discover the latest trends in web development, design, and technology through our curated
                            collection of articles.
                        </p>
                    </div>
                    <div class="bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-xl p-6">
                        <h3 class="text-xl font-semibold mb-3">Featured Content</h3>
                        <p class="text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">
                            Explore our editor's picks and most popular posts that have resonated with our community.
                        </p>
                    </div>
                </div>

                <!-- More demo content for scrolling -->
                <div class="space-y-6">
                    <div
                        class="h-96 bg-gradient-to-br from-teal-50 to-teal-100 dark:from-teal-900/20 dark:to-teal-800/20 rounded-xl flex items-center justify-center">
                        <div class="text-center">
                            <h2 class="text-2xl font-bold text-[var(--color-foreground)] mb-2">Scroll to Test Navbar
                            </h2>
                            <p class="text-[var(--color-zinc-500)]">Notice how the navbar becomes transparent with blur
                                effect</p>
                        </div>
                    </div>

                    <div
                        class="h-96 bg-gradient-to-br from-orange-50 to-orange-100 dark:from-orange-900/20 dark:to-orange-800/20 rounded-xl flex items-center justify-center">
                        <div class="text-center">
                            <h2 class="text-2xl font-bold text-[var(--color-foreground)] mb-2">Hover the Dropdowns</h2>
                            <p class="text-[var(--color-zinc-500)]">Try hovering over "Blog" and "Resources" in the
                                navbar</p>
                        </div>
                    </div>

                    <div
                        class="h-96 bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 rounded-xl flex items-center justify-center">
                        <div class="text-center">
                            <h2 class="text-2xl font-bold text-[var(--color-foreground)] mb-2">Mobile Responsive</h2>
                            <p class="text-[var(--color-zinc-500)]">Try resizing your browser or view on mobile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
