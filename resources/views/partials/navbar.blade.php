<nav>

    <div x-data="{
        navOpen: false,
        searchOpen: false,
        scrolled: false,
        activeDropdown: null
    }" x-init="window.addEventListener('scroll', () => {
        scrolled = window.scrollY > 20;
    })">
        <!-- Main Navigation -->
        <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
            :class="scrolled ? 'navbar-blur glass-effect shadow-lg' : 'bg-[var(--color-background)] shadow-sm'">
            <div class="container mx-auto px-4 py-4 flex items-center justify-between">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="group flex items-center space-x-2">
                    <div
                        class="w-8 h-8 bg-gradient-to-br from-teal-500 to-teal-600 rounded-lg flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">

                        {{-- App logo --}}
                        <x-app-logo></x-app-logo>
                    </div>
                    <span
                        class="text-xl font-bold text-[var(--color-foreground)] group-hover:text-[var(--color-accent)] transition-colors">BlogPlatform</span>
                </a>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden md:flex items-center space-x-8">

                    <x-desktop.nav-link href="home">
                        Home
                        <div class="nav-indicator"></div>
                    </x-desktop.nav-link>

                    <!-- Blog Dropdown -->
                    <div class="relative" @mouseenter="activeDropdown = 'blog'" @mouseleave="activeDropdown = null">
                        <x-desktop.nav-link href="home">
                            <span>Blog</span>

                            <flux:icon.custom.chevron class="inline-block transform transition-transform duration-200"
                                ::class="activeDropdown == 'blog' ? 'rotate-0' : 'rotate-180'" />

                            <div class="nav-indicator"></div>
                        </x-desktop.nav-link>

                        <!-- Dropdown Menu -->
                        <div x-show="activeDropdown === 'blog'" x-transition:enter="dropdown-enter-active"
                            x-transition:enter-start="dropdown-enter" x-transition:leave="dropdown-leave-active"
                            class="absolute top-full left-0 mt-2 w-64 bg-[var(--color-background)] border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] rounded-xl shadow-xl overflow-hidden">
                            <div class="py-2">
                                <x-desktop.dropdown-menu-item icon="clock" href="home" title="Latest Posts"
                                    desc="Recent Articles"></x-desktop.dropdown-menu-item>
                                <x-desktop.dropdown-menu-item icon="folder" href="home" title="Categories"
                                    desc="Browse by topic">
                                </x-desktop.dropdown-menu-item>


                                <x-desktop.dropdown-menu-item icon="star" href="home" title="Featured"
                                    desc="Editor's picks">
                                </x-desktop.dropdown-menu-item>

                            </div>
                        </div>
                    </div>

                    <!-- Resources Dropdown -->
                    <div class="relative" @mouseenter="activeDropdown = 'resources'"
                        @mouseleave="activeDropdown = null">
                        <x-desktop.nav-link href="home">
                            <span>Resources</span>
                            <flux:icon.custom.chevron class="inline-block transform transition-transform duration-200"
                                ::class="activeDropdown == 'resources' ? 'rotate-0' : 'rotate-180'" />
                            <div class="nav-indicator"></div>
                        </x-desktop.nav-link>

                        <!-- Dropdown Menu -->
                        <div x-show="activeDropdown === 'resources'" x-transition:enter="dropdown-enter-active"
                            x-transition:enter-start="dropdown-enter" x-transition:leave="dropdown-leave-active"
                            class="absolute top-full left-0 mt-2 w-64 bg-[var(--color-background)] border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] rounded-xl shadow-xl overflow-hidden">
                            <div class="py-2">
                                <x-desktop.dropdown-menu-item icon="book-text" href="home" title="Writing Guides"
                                    desc="Learn to write better">
                                </x-desktop.dropdown-menu-item>

                                <x-desktop.dropdown-menu-item icon="file-text" href="home" title="Templates"
                                    desc="Ready-to-use formats">
                                </x-desktop.dropdown-menu-item>

                                <x-desktop.dropdown-menu-item icon="pen-tool" href="authors" title="Authors"
                                    desc="Our authors">
                                </x-desktop.dropdown-menu-item>
                            </div>
                        </div>
                    </div>

                    <a href="/about"
                        class="nav-link relative py-2 text-[var(--color-foreground)] hover:text-[var(--color-accent)] transition-colors duration-300 font-medium">
                        About
                        <div class="nav-indicator"></div>
                    </a>
                </div>

                <!-- Right Side Actions -->
                <div class="flex items-center space-x-4">
                    <!-- Search Button -->
                    <button @click="searchOpen = true; navOpen = false"
                        class="p-2 text-[var(--color-foreground)] hover:text-[var(--color-accent)] hover:bg-[var(--color-zinc-100)] dark:hover:bg-[var(--color-zinc-800)] rounded-lg transition-all duration-200">
                        <i class="fas fa-search"></i>
                    </button>

                    <!-- Theme Toggle -->
                    <button @click="document.documentElement.classList.toggle('dark')"
                        class="p-2 text-[var(--color-foreground)] hover:text-[var(--color-accent)] hover:bg-[var(--color-zinc-100)] dark:hover:bg-[var(--color-zinc-800)] rounded-lg transition-all duration-200">
                        <i class="fas fa-moon dark:hidden"></i>
                        <i class="fas fa-sun hidden dark:block"></i>
                    </button>

                    <!-- Mobile Menu Button -->
                    <button @click="navOpen = true; searchOpen = false"
                        class="md:hidden p-2 text-[var(--color-foreground)] hover:text-[var(--color-accent)] hover:bg-[var(--color-zinc-100)] dark:hover:bg-[var(--color-zinc-800)] rounded-lg transition-all duration-200">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div x-show="navOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-40 md:hidden">

            <!-- Backdrop -->
            <div @click="navOpen = false" class="absolute inset-0 bg-black bg-opacity-50"></div>

            <!-- Menu Panel -->
            <div x-show="navOpen" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="transform translate-x-0"
                x-transition:leave-end="transform translate-x-full"
                class="absolute right-0 top-0 h-full w-80 bg-[var(--color-background)] shadow-2xl overflow-y-auto">

                <!-- Close Button -->
                <div class="flex justify-end p-4">
                    <button @click="navOpen = false"
                        class="p-2 text-[var(--color-foreground)] hover:text-[var(--color-accent)] hover:bg-[var(--color-zinc-100)] dark:hover:bg-[var(--color-zinc-800)] rounded-lg transition-all duration-200">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Navigation Links -->
                <div class="px-6 py-4 space-y-4">
                    <x-mobile.nav-link href="home">Home</x-mobile.nav-link>


                    <!-- Mobile Blog Section -->
                    <div class="space-y-2">
                        <div
                            class="py-3 text-lg font-medium text-[var(--color-foreground)] border-b border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)]">
                            Blog
                        </div>
                        <x-mobile.sub-nav-link>Latest Posts</x-mobile.sub-nav-link>
                        <x-mobile.sub-nav-link>Categories</x-mobile.sub-nav-link>
                        <x-mobile.sub-nav-link>Featured</x-mobile.sub-nav-link>
                    </div>

                    <!-- Mobile Resources Section -->
                    <div class="space-y-2">
                        <div
                            class="py-3 text-lg font-medium text-[var(--color-foreground)] border-b border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)]">
                            Resources
                        </div>
                        <x-mobile.sub-nav-link> Writing Guides </x-mobile.sub-nav-link>
                        <x-mobile.sub-nav-link> Templates </x-mobile.sub-nav-link>
                        <x-mobile.sub-nav-link> Tools </x-mobile.sub-nav-link>
                    </div>

                    <x-mobile.nav-link href="home">About</x-mobile.nav-link>
                </div>
            </div>
        </div>

        <!-- Search Overlay -->
        <div x-show="searchOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">

            <div x-show="searchOpen" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95"
                class="w-full max-w-md mx-4 bg-[var(--color-background)] rounded-xl shadow-2xl overflow-hidden">

                <!-- Search Header -->
                <div class="p-6 border-b border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)]">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-[var(--color-foreground)]">Search</h3>
                        <button @click="searchOpen = false"
                            class="p-2 text-[var(--color-foreground)] hover:text-[var(--color-accent)] hover:bg-[var(--color-zinc-100)] dark:hover:bg-[var(--color-zinc-800)] rounded-lg transition-all duration-200">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <!-- Search Input -->
                <div class="p-6">
                    <div class="relative">
                        <input type="text" placeholder="Search articles, topics, authors..."
                            class="search-glow w-full px-4 py-3 pl-12 text-[var(--color-foreground)] bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-accent)] focus:border-transparent transition-all duration-200">
                        <i
                            class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-[var(--color-zinc-400)]"></i>
                    </div>

                    <!-- Quick Search Suggestions -->
                    <div class="mt-4 space-y-2">
                        <div class="text-sm font-medium text-[var(--color-zinc-500)]">Popular searches:</div>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] text-[var(--color-foreground)] rounded-full text-sm hover:bg-[var(--color-accent)] hover:text-white cursor-pointer transition-colors">JavaScript</span>
                            <span
                                class="px-3 py-1 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] text-[var(--color-foreground)] rounded-full text-sm hover:bg-[var(--color-accent)] hover:text-white cursor-pointer transition-colors">React</span>
                            <span
                                class="px-3 py-1 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] text-[var(--color-foreground)] rounded-full text-sm hover:bg-[var(--color-accent)] hover:text-white cursor-pointer transition-colors">Web
                                Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</nav>
