<div class="m-10" x-data="{
    filter: 'all',
    authors: [{
            id: 1,
            name: 'Sarah Chen',
            role: 'Senior Developer & Tech Writer',
            avatar: 'https://images.unsplash.com/photo-1494790108755-2616b612b494?w=200&h=200&fit=crop&crop=face',
            bio: 'Passionate about modern web development and sharing knowledge through engaging technical articles.',
            posts: 24,
            followers: 1200,
            expertise: ['JavaScript', 'React', 'Node.js'],
            social: {
                twitter: '@sarahchen_dev',
                github: 'sarahchen',
                linkedin: 'sarahchen-dev',
                website: 'https://sarahchen.dev'
            },
            category: 'developer'
        },
        {
            id: 2,
            name: 'Marcus Rodriguez',
            role: 'UI/UX Designer & Content Creator',
            avatar: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face',
            bio: 'Creating beautiful digital experiences and writing about design principles that matter.',
            posts: 18,
            followers: 890,
            expertise: ['Design Systems', 'Figma', 'User Research'],
            social: {
                twitter: '@marcusux',
                github: 'marcusrodriguez',
                linkedin: 'marcus-rodriguez-ux',
                website: 'https://marcusdesign.co'
            },
            category: 'designer'
        },
        {
            id: 3,
            name: 'Emily Thompson',
            role: 'DevOps Engineer & Cloud Architect',
            avatar: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&h=200&fit=crop&crop=face',
            bio: 'Scaling applications and infrastructure while documenting the journey for fellow engineers.',
            posts: 31,
            followers: 1500,
            expertise: ['AWS', 'Docker', 'Kubernetes'],
            social: {
                twitter: '@emily_devops',
                github: 'emilythompson',
                linkedin: 'emily-thompson-devops',
                website: 'https://emilycloud.tech'
            },
            category: 'developer'
        },
        {
            id: 4,
            name: 'David Park',
            role: 'Product Manager & Strategy Writer',
            avatar: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&fit=crop&crop=face',
            bio: 'Bridging the gap between technology and business through strategic thinking and clear communication.',
            posts: 15,
            followers: 720,
            expertise: ['Product Strategy', 'Analytics', 'Growth'],
            social: {
                twitter: '@davidpark_pm',
                github: 'davidpark',
                linkedin: 'david-park-product',
                website: 'https://davidpark.pm'
            },
            category: 'product'
        },
        {
            id: 5,
            name: 'Lisa Wang',
            role: 'Data Scientist & AI Researcher',
            avatar: 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=200&h=200&fit=crop&crop=face',
            bio: 'Exploring the frontiers of machine learning and making complex AI concepts accessible to everyone.',
            posts: 22,
            followers: 1100,
            expertise: ['Python', 'TensorFlow', 'Data Analysis'],
            social: {
                twitter: '@lisawang_ai',
                github: 'lisawang',
                linkedin: 'lisa-wang-data-science',
                website: 'https://lisawang.ai'
            },
            category: 'developer'
        },
        {
            id: 6,
            name: 'Alex Johnson',
            role: 'Mobile Developer & Tech Educator',
            avatar: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop&crop=face',
            bio: 'Building mobile experiences that users love and teaching others to do the same.',
            posts: 19,
            followers: 950,
            expertise: ['Swift', 'Kotlin', 'Flutter'],
            social: {
                twitter: '@alexjohnson_mobile',
                github: 'alexjohnson',
                linkedin: 'alex-johnson-mobile',
                website: 'https://alexjohnson.dev'
            },
            category: 'developer'
        }
    ],
    filteredAuthors() {
        if (this.filter === 'all') return this.authors;
        return this.authors.filter(author => author.category === this.filter);
    }
}">

    <!-- Page Header -->
    <div class="page-header py-16 px-4">
        <div class="container mx-auto text-center">
            <div class="flex justify-center mb-6">
                <div class="p-4 bg-[var(--color-accent)] rounded-full">

                    <flux:icon.users class="w-8 h-8 text-white" />
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
                <button @click="filter = 'all'" :class="filter === 'all' ? 'active' : ''"
                    class="filter-button px-6 py-3 rounded-full font-medium text-sm transition-all duration-200">
                    All Authors
                </button>
                <button @click="filter = 'developer'" :class="filter === 'developer' ? 'active' : ''"
                    class="filter-button px-6 py-3 rounded-full font-medium text-sm transition-all duration-200">
                    Developers
                </button>
                <button @click="filter = 'designer'" :class="filter === 'designer' ? 'active' : ''"
                    class="filter-button px-6 py-3 rounded-full font-medium text-sm transition-all duration-200">
                    Designers
                </button>
                <button @click="filter = 'product'" :class="filter === 'product' ? 'active' : ''"
                    class="filter-button px-6 py-3 rounded-full font-medium text-sm transition-all duration-200">
                    Product
                </button>
            </div>
        </div>
    </div>

    <!-- Authors Grid -->
    <div class="py-16 px-4">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <template x-for="author in filteredAuthors()" :key="author.id">
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
                                    <img :src="author.avatar" :alt="author.name"
                                        class="w-full h-full object-cover rounded-full">
                                </div>
                            </div>
                            <div
                                class="absolute -bottom-2 -right-2 w-6 h-6 bg-[var(--color-accent)] rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-4 h-4 text-white"></i>
                            </div>
                        </div>

                        <!-- Author Info -->
                        <div class="text-center mb-6">
                            <h3 class="text-xl font-bold text-[var(--color-foreground)] mb-2" x-text="author.name">
                            </h3>
                            <p class="text-[var(--color-accent)] font-medium text-sm mb-3" x-text="author.role"></p>
                            <p class="text-[var(--color-zinc-500)] text-sm leading-relaxed" x-text="author.bio"></p>
                        </div>

                        <!-- Stats -->
                        <div class="flex justify-center space-x-6 mb-6">
                            <div class="text-center">
                                <div class="stats-counter rounded-lg px-4 py-2">
                                    <div class="text-lg font-bold text-[var(--color-foreground)]" x-text="author.posts">
                                    </div>
                                    <div class="text-xs text-[var(--color-zinc-500)]">Posts</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="stats-counter rounded-lg px-4 py-2">
                                    <div class="text-lg font-bold text-[var(--color-foreground)]"
                                        x-text="author.followers"></div>
                                    <div class="text-xs text-[var(--color-zinc-500)]">Followers</div>
                                </div>
                            </div>
                        </div>

                        <!-- Expertise Tags -->
                        <div class="flex flex-wrap justify-center gap-2 mb-6">
                            <template x-for="skill in author.expertise" :key="skill">
                                <span
                                    class="px-3 py-1 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)] rounded-full text-xs font-medium"
                                    x-text="skill"></span>
                            </template>
                        </div>

                        <!-- Social Links -->
                        <div class="flex justify-center space-x-4">
                            <a :href="'https://twitter.com/' + author.social.twitter.replace('@', '')" target="_blank"
                                class="social-icon p-2 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-lg hover:bg-blue-100 dark:hover:bg-blue-900 transition-all duration-200">
                                <flux:icon.twitter class="w-4 h-4 text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]" />
                            </a>
                            <a :href="'https://github.com/' + author.social.github" target="_blank"
                                class="social-icon p-2 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-all duration-200">
                                <flux:icon.github class="w-4 h-4 text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]" />
                            </a>
                            <a :href="'https://linkedin.com/in/' + author.social.linkedin" target="_blank"
                                class="social-icon p-2 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-lg hover:bg-blue-100 dark:hover:bg-blue-900 transition-all duration-200">
                                <flux:icon.linkedin class="w-4 h-4 text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]" />

                            </a>
                            <a :href="author.social.website" target="_blank"
                                class="social-icon p-2 bg-[var(--color-zinc-100)] dark:bg-[var(--color-zinc-800)] rounded-lg hover:bg-[var(--color-teal-100)] dark:hover:bg-[var(--color-teal-900)] transition-all duration-200">
                                <flux:icon.globe class="w-4 h-4 text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]" />

                            </a>
                        </div>

                        <!-- View Profile Button -->
                        <div class="mt-6 text-center">
                            <button
                                class="w-full bg-[var(--color-accent)] hover:bg-[var(--color-teal-600)] text-white font-medium py-3 px-6 rounded-lg transition-all duration-200 transform hover:scale-105">
                                View Profile
                            </button>
                        </div>
                    </div>
                </template>
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
                    <button
                        class="bg-[var(--color-accent)] hover:bg-[var(--color-teal-600)] text-white font-medium py-3 px-8 rounded-lg transition-all duration-200 transform hover:scale-105">
                        Apply to Write
                    </button>
                    <button
                        class="bg-[var(--color-background)] hover:bg-[var(--color-zinc-200)] dark:hover:bg-[var(--color-zinc-700)] text-[var(--color-foreground)] font-medium py-3 px-8 rounded-lg border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] transition-all duration-200">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Dark Mode Toggle (for demo) -->
    <div class="fixed bottom-6 right-6 z-50">
        <button @click="document.documentElement.classList.toggle('dark')"
            class="p-3 bg-[var(--color-accent)] text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-200 transform hover:scale-110">
            <i data-lucide="moon" class="w-5 h-5 dark:hidden"></i>
            <i data-lucide="sun" class="w-5 h-5 hidden dark:block"></i>
        </button>
    </div>
</div>
