<div class="m-10">

    <!-- Page Header -->
    <div class="page-header py-16 px-4">
        <div class="container mx-auto text-center">
            <div class="flex justify-center mb-6">
                <div class="p-4 bg-[var(--color-teal-500)] dark:bg-white rounded-full">

                    <flux:icon.users class="w-8 h-8 dark:text-[var(--color-teal-800)] text-white" />
                </div>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-[var(--color-foreground)] mb-4">
                Meet Our Authors
            </h1>
            <p class="text-xl text-[var(--color-zinc-500)] max-w-2xl mx-auto leading-relaxed">
                Talented writers, developers, and creators who share their expertise and insights
                to help you grow in your journey.
            </p>
        </div>
    </div>

    <!-- Filter Section -->
    <div
        class="py-8 px-4 bg-[var(--color-background)] border-b border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)]">
        <div class="container mx-auto">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="filter-button px-6 py-3 rounded-full font-medium text-sm transition-all duration-200">
                    All Authors
                </button>
                <button class="filter-button px-6 py-3 rounded-full font-medium text-sm transition-all duration-200">
                    Developers
                </button>
                <button class="filter-button px-6 py-3 rounded-full font-medium text-sm transition-all duration-200">
                    Designers
                </button>
                <button class="filter-button px-6 py-3 rounded-full font-medium text-sm transition-all duration-200">
                    Product
                </button>
            </div>
        </div>
    </div>

    <!-- Authors Grid -->
    <div class="py-16 px-4">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($authors as $author)
                    <div class="author-card card-hover rounded-2xl p-8 relative overflow-hidden">
                        <!-- Background Pattern -->
                        <div class="absolute top-0 right-0 w-32 h-32 opacity-5">
                            <div
                                class="w-full h-full bg-gradient-to-br from-[var(--color-accent)] to-transparent rounded-full">
                            </div>
                        </div>

                        <!-- Author Avatar -->
                        <div class="relative mb-6">
                            <div class="gradient-border w-20 h-20 mx-auto">
                                <div class="gradient-border-inner w-full h-full">
                                    <img src="{{ $author->user->profile_pic }}" alt="{{ $author->user->name }}"
                                        class="w-full h-full object-cover rounded-full">
                                </div>
                            </div>
                            <div
                                class="absolute -bottom-2 -right-2 w-6 h-6 bg-[var(--color-accent)] rounded-full flex items-center justify-center">
                                <flux:icon.check class="w-4 h-4 text-white" />
                            </div>
                        </div>

                        <!-- Author Info -->
                        <div class="text-center mb-6">
                            <h3 class="text-xl font-bold text-[var(--color-foreground)] mb-2">
                                {{ $author->user->name }}
                            </h3>
                            <p class="text-[var(--color-accent)] font-medium text-sm mb-3">{{ $author->author_bio }}
                            </p>
                        </div>

                        <!-- Social Links -->
                        <div class="flex justify-center space-x-4">
                            @if ($author->author_x)
                                <a href="{{ $author->author_x }}" target="_blank"
                                    class="social-icon p-2 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-lg hover:bg-blue-100 dark:hover:bg-blue-900 transition-all duration-200">
                                    <flux:icon.twitter
                                        class="w-4 h-4 text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]" />
                                </a>
                            @endif
                            @if ($author->author_github)
                                <a href="{{ $author->author_github }}" target="_blank"
                                    class="social-icon p-2 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-all duration-200">
                                    <flux:icon.github
                                        class="w-4 h-4 text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]" />
                                </a>
                            @endif
                            @if ($author->author_linkedin)
                                <a href="{{ $author->author_linkedin }}" target="_blank"
                                    class="social-icon p-2 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-lg hover:bg-blue-100 dark:hover:bg-blue-900 transition-all duration-200">
                                    <flux:icon.linkedin
                                        class="w-4 h-4 text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]" />
                                </a>
                            @endif
                            @if ($author->author_website)
                                <a href="{{ $author->author_website }}" target="_blank"
                                    class="social-icon p-2 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-lg hover:bg-[var(--color-teal-100)] dark:hover:bg-[var(--color-teal-900)] transition-all duration-200">
                                    <flux:icon.globe
                                        class="w-4 h-4 text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]" />
                                </a>
                            @endif
                        </div>

                        <!-- View Profile Button -->
                        <div class="mt-6 text-center hover:cursor-pointer">
                            <button
                                class="w-full bg-[var(--color-accent)] hover:bg-[var(--color-teal-600)] text-white font-medium py-3 px-6 rounded-lg transition-all duration-200 transform hover:scale-105">
                                View Profile
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] py-16 px-4">
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

                    <flux:button variant="primary"
                        class="bg-[var(--color-accent)] hover:bg-[var(--color-teal-600)] text-white font-medium py-3 px-8 rounded-lg transition-all duration-200 transform hover:scale-105">
                        Apply to Write</flux:button>
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
