@extends('components.layouts.app')
@section('title', 'Write for Us | Explore')

@section('content')
    <section class="relative overflow-hidden">
        <!-- Decorative background -->
        <div aria-hidden="true" class="pointer-events-none absolute -top-20 -left-24 h-72 w-72 rounded-full blur-3xl opacity-25 bg-gradient-to-br from-[var(--color-teal-300)] to-[var(--color-teal-500)]"></div>

        <div class="container mx-auto px-6 py-16">
            <div class="mx-auto max-w-3xl text-center">
                <span class="inline-flex items-center gap-2 rounded-full border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] px-3 py-1 text-xs font-semibold text-[var(--color-zinc-600)]">
                    <flux:icon.pen-tool class="w-4 h-4 text-[var(--color-accent)]" />
                    Contribute your expertise
                </span>

                <h1 class="mt-4 text-3xl md:text-5xl font-extrabold tracking-tight text-[var(--color-foreground)]">
                    Write for Explore
                </h1>
                <p class="mt-4 text-lg leading-relaxed text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-300)]">
                    We’re looking for thoughtful tutorials, deep dives, and opinion pieces across design, development, AI,
                    and product. Share your story and help others grow.
                </p>
            </div>

            <!-- Benefits -->
            <div class="mx-auto mt-10 grid max-w-4xl gap-4 sm:grid-cols-2">
                <div class="flex items-start gap-3 rounded-2xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-4">
                    <div class="rounded-lg bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-2">
                        <flux:icon.globe class="w-4 h-4 text-[var(--color-accent)]" />
                    </div>
                    <div>
                        <p class="font-semibold text-[var(--color-foreground)]">Reach readers worldwide</p>
                        <p class="text-sm text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">Your work featured across our channels.</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 rounded-2xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-4">
                    <div class="rounded-lg bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-2">
                        <flux:icon.star class="w-4 h-4 text-[var(--color-accent)]" />
                    </div>
                    <div>
                        <p class="font-semibold text-[var(--color-foreground)]">Editorial support</p>
                        <p class="text-sm text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">We’ll help refine and polish your drafts.</p>
                    </div>
                </div>
            </div>

            <!-- Guidelines -->
            <div class="mx-auto mt-10 max-w-3xl">
                <h2 class="text-lg font-bold text-[var(--color-foreground)]">Submission guidelines</h2>
                <ul class="mt-4 grid gap-3 sm:grid-cols-2">
                    <li class="flex items-start gap-3">
                        <div class="rounded-md bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-1.5">
                            <flux:icon.check class="w-4 h-4 text-[var(--color-accent)]" />
                        </div>
                        <p class="text-sm text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">Original content (no reposts).</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="rounded-md bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-1.5">
                            <flux:icon.check class="w-4 h-4 text-[var(--color-accent)]" />
                        </div>
                        <p class="text-sm text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">Practical takeaways and clear structure.</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="rounded-md bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-1.5">
                            <flux:icon.check class="w-4 h-4 text-[var(--color-accent)]" />
                        </div>
                        <p class="text-sm text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">Estimated length: 800–2000 words.</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="rounded-md bg-[var(--color-teal-100)] dark:bg-[var(--color-teal-900)] p-1.5">
                            <flux:icon.check class="w-4 h-4 text-[var(--color-accent)]" />
                        </div>
                        <p class="text-sm text-[var(--color-zinc-600)] dark:text-[var(--color-zinc-400)]">Include references and code samples when relevant.</p>
                    </li>
                </ul>
            </div>

            <!-- Submission form -->
            <div class="mx-auto mt-12 max-w-2xl">
                @livewire('write-for-us-form')
            </div>
        </div>
    </section>
@endsection