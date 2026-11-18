@props(['eyebrow', 'title', 'description' => null, 'align' => 'left', 'dark' => false])

<div {{ $attributes->class([$align === 'center' ? 'mx-auto max-w-3xl text-center' : 'max-w-3xl']) }}>
    <span class="eyebrow">{{ $eyebrow }}</span>
    <h2 @class([
        'mt-5 text-3xl font-black tracking-[-0.04em] sm:text-4xl lg:text-5xl',
        'text-white' => $dark,
        'text-slate-950' => ! $dark,
    ])>{{ $title }}</h2>
    @if ($description)
        <p @class([
            'mt-5 text-base leading-8 sm:text-lg',
            'text-slate-300' => $dark,
            'text-slate-600' => ! $dark,
        ])>{{ $description }}</p>
    @endif
</div>
