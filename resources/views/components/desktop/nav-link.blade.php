@props(['href'])

<a href="{{ route($href) }}"
    class="nav-link relative py-2 text-[var(--color-foreground)] hover:text-[var(--color-accent)] transition-colors duration-300 font-medium">
    {{ $slot }}
</a>


