@extends('components.layouts.app')
@section('title', $author->user->name . ' - Explore | Modern Blogging Platform')

@section('content')
    <div class="m-10">
        <!-- Author Profile Section -->
        <div class="page-header py-16 px-4">
            <div class="container mx-auto text-center">
                <!-- Author Avatar -->
                <div class="relative mb-6 mx-auto w-32 h-32">
                    <div class="gradient-border w-full h-full">
                        <div class="gradient-border-inner w-full h-full">
                            <img src="{{ $author->user->profile_pic }}" alt="{{ $author->user->name }}"
                                class="w-full h-full object-cover rounded-full">
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-2 -right-2 w-8 h-8 bg-[var(--color-accent)] rounded-full flex items-center justify-center">
                        <flux:icon.check class="w-5 h-5 text-white" />
                    </div>
                </div>

                <!-- Author Info -->
                <h1 class="text-4xl md:text-5xl font-bold text-[var(--color-foreground)] mb-4">
                    {{ $author->user->name }}
                </h1>
                <p class="text-xl text-[var(--color-accent)] font-medium mb-4">{{ $author->author_bio }}</p>
                <p class="text-lg text-[var(--color-zinc-500)] max-w-2xl mx-auto leading-relaxed">
                    {{-- A brief description about the author can go here --}}
                    A passionate writer and tech enthusiast, sharing insights on web development and design.
                </p>

                <!-- Social Links -->
                <div class="flex justify-center space-x-4 mt-6">
                    @if ($author->author_x)
                        <a href="{{ $author->author_x }}" target="_blank"
                            class="social-icon p-3 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-lg hover:bg-blue-100 dark:hover:bg-blue-900 transition-all duration-200">
                            <flux:icon.twitter
                                class="w-5 h-5 text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]" />
                        </a>
                    @endif
                    @if ($author->author_github)
                        <a href="{{ $author->author_github }}" target="_blank"
                            class="social-icon p-3 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-all duration-200">
                            <flux:icon.github
                                class="w-5 h-5 text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]" />
                        </a>
                    @endif
                    @if ($author->author_linkedin)
                        <a href="{{ $author->author_linkedin }}" target="_blank"
                            class="social-icon p-3 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-lg hover:bg-blue-100 dark:hover:bg-blue-900 transition-all duration-200">
                            <flux:icon.linkedin
                                class="w-5 h-5 text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]" />
                        </a>
                    @endif
                    @if ($author->author_website)
                        <a href="{{ $author->author_website }}" target="_blank"
                            class="social-icon p-3 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-lg hover:bg-[var(--color-teal-100)] dark:hover:bg-[var(--color-teal-900)] transition-all duration-200">
                            <flux:icon.globe
                                class="w-5 h-5 text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]" />
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <!-- Author's Blogs Section -->
        <div class="py-16 px-4 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)]">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center text-[var(--color-foreground)] mb-12">
                    Latest from {{ $author->user->name }}
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    {{-- Placeholder for author's blogs --}}
                    @for ($i = 0; $i < 3; $i++)
                        <div class="blog-card card-hover rounded-2xl p-6 relative overflow-hidden bg-[var(--color-background)]">
                            <div class="mb-4">
                                <img src="https://via.placeholder.com/400x250" alt="Blog Post" class="w-full h-auto rounded-lg">
                            </div>
                            <h3 class="text-xl font-bold text-[var(--color-foreground)] mb-2">
                                Blog Post Title {{ $i + 1 }}
                            </h3>
                            <p class="text-[var(--color-zinc-500)] mb-4">
                                A short excerpt of the blog post goes here. This is just a placeholder text.
                            </p>
                            <a href="#" class="font-medium text-[var(--color-accent)] hover:underline">
                                Read More &rarr;
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="py-16 px-4">
            <div class="container mx-auto text-center">
                <div class="max-w-2xl mx-auto">
                    <h2 class="text-3xl font-bold text-[var(--color-foreground)] mb-4">
                        Want to Join Our Team?
                    </h2>
                    <p class="text-[var(--color-zinc-500)] mb-8 leading-relaxed">
                        We're always looking for talented writers and creators who are passionate about
                        sharing their knowledge and helping others grow.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <flux:button variant="primary" href="{{ route('write-for-us') }}"
                            class="bg-[var(--color-accent)] hover:bg-[var(--color-teal-600)] text-white font-medium py-3 px-8 rounded-lg transition-all duration-200 transform hover:scale-105">
                            Apply to Write
                        </flux:button>
                        <flux:button variant="primary" href="https://google.com" icon:trailing="arrow-up-right"
                            class="bg-[var(--color-background)] hover:bg-[var(--color-zinc-200)] dark:hover:bg-[var(--color-zinc-700)] text-[var(--color-foreground)] font-medium py-3 px-8 rounded-lg border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] transition-all duration-200">
                            Learn More
                        </flux:button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dark Mode Toggle (for demo) -->
        <div class="fixed bottom-6 right-6 z-50">
            <button @click="document.documentElement.classList.toggle('dark')"
                class="p-3 bg-[var(--color-accent)] dark:text-black text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-200 transform hover:scale-110">
                <flux:icon.moon class="w-5 h-5 dark:hidden" />
                <flux:icon.sun class="w-5 h-5 hidden dark:block" />
            </button>
        </div>
    </div>
@endsection