@php
    $attributes = $unescapedForwardedAttributes ?? $attributes;
    $classes = $classes ?? '';
@endphp



<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" {{ $attributes->merge(['class' => 'flux-chevron']) }}>
    <path d="M6 15l6-6 6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round" />
</svg>
