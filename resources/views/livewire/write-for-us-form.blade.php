<div class="w-full">
    <div class="w-full rounded-2xl border border-[var(--color-zinc-200)] dark:border-[var(--color-zinc-700)] bg-[var(--color-background)] p-8 shadow-sm">
        <h2 class="text-xl font-bold text-[var(--color-foreground)]">Submit your pitch</h2>

        <form wire:submit.prevent="submit" class="mt-6 space-y-6">
            @if (session()->has('success'))
                <div class="rounded-xl border border-[var(--color-teal-200)] dark:border-[var(--color-teal-800)] bg-[var(--color-teal-50)] dark:bg-[var(--color-teal-900)] px-4 py-3 text-sm text-[var(--color-teal-700)] dark:text-[var(--color-teal-100)]"
                    role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div>
                <label for="name" class="block text-sm font-medium text-[var(--color-foreground)]">Name</label>
                <input
                    type="text"
                    id="name"
                    wire:model="name"
                    class="mt-1 block w-full rounded-lg border border-[var(--color-zinc-200)] bg-[var(--color-background)] px-3 py-2 text-[var(--color-foreground)] focus:border-[var(--color-accent)] focus:outline-hidden focus:ring-2 focus:ring-[var(--color-accent)] focus:ring-offset-2 focus:ring-offset-[var(--color-background)] dark:border-[var(--color-zinc-700)]"
                />
                @error('name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-[var(--color-foreground)]">Email</label>
                <input
                    type="email"
                    id="email"
                    wire:model="email"
                    class="mt-1 block w-full rounded-lg border border-[var(--color-zinc-200)] bg-[var(--color-background)] px-3 py-2 text-[var(--color-foreground)] focus:border-[var(--color-accent)] focus:outline-hidden focus:ring-2 focus:ring-[var(--color-accent)] focus:ring-offset-2 focus:ring-offset-[var(--color-background)] dark:border-[var(--color-zinc-700)]"
                />
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-[var(--color-foreground)]">Message</label>
                <textarea
                    id="message"
                    wire:model="message"
                    rows="4"
                    class="mt-1 block w-full rounded-lg border border-[var(--color-zinc-200)] bg-[var(--color-background)] px-3 py-2 text-[var(--color-foreground)] focus:border-[var(--color-accent)] focus:outline-hidden focus:ring-2 focus:ring-[var(--color-accent)] focus:ring-offset-2 focus:ring-offset-[var(--color-background)] dark:border-[var(--color-zinc-700)]"
                ></textarea>
                @error('message')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-[var(--color-accent)] px-5 py-3 text-sm font-semibold text-white transition-all duration-200 hover:-translate-y-0.5 hover:bg-[var(--color-teal-600)] hover:shadow-sm">
                    <span>Submit</span>
                    <flux:icon.arrow-up-right class="w-4 h-4" />
                </button>
            </div>
        </form>
    </div>
</div>
