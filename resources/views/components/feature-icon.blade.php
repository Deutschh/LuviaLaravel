@props(['name'])

@php
    $paths = [
        'chip' => '<rect x="5" y="5" width="14" height="14" rx="2"/><path d="M9 9h6v6H9zM9 2v3m6-3v3M9 19v3m6-3v3M2 9h3m-3 6h3m14-6h3m-3 6h3"/>',
        'hand' => '<path d="M7 12V7a1.5 1.5 0 0 1 3 0v4-6a1.5 1.5 0 0 1 3 0v6-5a1.5 1.5 0 0 1 3 0v5-3a1.5 1.5 0 0 1 3 0v5c0 5-2.8 8-7.5 8H11c-2.4 0-4.1-1-5.5-3l-2-3a1.6 1.6 0 0 1 2.4-2.1L7 14"/>',
        'motion' => '<circle cx="12" cy="12" r="3"/><path d="M4.9 4.9a10 10 0 0 0 0 14.2M19.1 4.9a10 10 0 0 1 0 14.2M8 8a5.7 5.7 0 0 0 0 8m8-8a5.7 5.7 0 0 1 0 8"/>',
        'bluetooth' => '<path d="m7 7 10 10-5 4V3l5 4L7 17"/>',
        'mobile' => '<rect x="7" y="2" width="10" height="20" rx="2"/><path d="M10 5h4m-3 14h2"/>',
        'home' => '<path d="m3 11 9-8 9 8v9a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/>',
        'translate' => '<path d="M4 5h8M8 3v2m2 0c-.5 3.4-2.4 5.8-6 7m2-4c1 1.6 2.4 2.8 4.3 3.8M13 20l4-10 4 10m-6.8-3h5.6"/>',
        'glove' => '<path d="M7 12V7a1.5 1.5 0 0 1 3 0v4-6a1.5 1.5 0 0 1 3 0v6-5a1.5 1.5 0 0 1 3 0v5-3a1.5 1.5 0 0 1 3 0v5c0 5-2.8 8-7.5 8H11c-2.4 0-4.1-1-5.5-3l-2-3a1.6 1.6 0 0 1 2.4-2.1L7 14"/>',
        'sliders' => '<path d="M4 6h7m4 0h5M4 12h3m4 0h9M4 18h9m4 0h3"/><circle cx="13" cy="6" r="2"/><circle cx="9" cy="12" r="2"/><circle cx="15" cy="18" r="2"/>',
        'book' => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V4H6.5A2.5 2.5 0 0 0 4 6.5z"/><path d="M4 6.5v13M8 7h8m-8 4h6"/>',
        'heart' => '<path d="M20.8 4.7a5.5 5.5 0 0 0-7.8 0L12 5.8l-1.1-1.1a5.5 5.5 0 0 0-7.8 7.8l1.1 1.1L12 21l7.8-7.4 1.1-1.1a5.5 5.5 0 0 0-.1-7.8z"/>',
        'user' => '<circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/>',
        'server' => '<rect x="3" y="4" width="18" height="6" rx="2"/><rect x="3" y="14" width="18" height="6" rx="2"/><path d="M7 7h.01M7 17h.01M11 7h7m-7 10h7"/>',
        'database-link' => '<ellipse cx="9" cy="5" rx="6" ry="3"/><path d="M3 5v6c0 1.7 2.7 3 6 3h1m-7-3c0 1.7 2.7 3 6 3m5-1 7 7m0-7-7 7"/>',
        'database' => '<ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5M4 11v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6"/>',
        'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/><path d="m9 12 2 2 4-4"/>',
    ];
@endphp

<svg {{ $attributes->merge(['class' => 'h-5 w-5']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    {!! $paths[$name] ?? $paths['chip'] !!}
</svg>
