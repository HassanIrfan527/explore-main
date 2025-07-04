@props(['href' => 'home'])
<a href="{{ route($href) }}"
    class="block py-2 pl-4 text-[var(--color-foreground)] hover:text-[var(--color-accent)] transition-colors">
    {{ $slot }}
</a>
