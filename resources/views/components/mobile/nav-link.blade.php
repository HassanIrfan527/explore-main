@props(['href'])

<a href="{{ route($href) }}"
    class="block py-3 text-lg font-medium text-[var(--color-foreground)] hover:text-[var(--color-accent)] transition-colors">
    {{ $slot }}
</a>
