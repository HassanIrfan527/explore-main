@props(['href'=>'home', 'title', 'desc', 'icon'=> 'clock'])

{{-- Ensure href is a valid route --}}

<a href="{{ route($href) }}"
    class="flex items-center px-4 py-3 text-[var(--color-foreground)] hover:bg-[var(--color-zinc-100)] dark:hover:bg-[var(--color-zinc-800)] transition-colors">
    <flux:icon :name="$icon" class="w-5 text-[var(--color-accent)]" />
    <div class="ml-3">
        <div class="font-medium">{{ $title }}</div>
        <div class="text-sm text-[var(--color-zinc-500)]">{{ $desc }}</div>
    </div>
</a>
