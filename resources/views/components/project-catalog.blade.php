@props(['features'])

<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
    @forelse ($features as $feature)
        <article class="feature-card">
            <div class="icon-chip"><x-feature-icon :name="$feature->icon" /></div>
            <p class="mt-4 text-xs font-bold uppercase tracking-wider text-luvia-600">{{ $feature->category }}</p>
            <h3 class="mt-1 break-words text-lg font-black text-slate-950">{{ $feature->title }}</h3>
            <p class="mt-2 whitespace-pre-line break-words text-sm leading-6 text-slate-600">{{ $feature->description }}</p>
        </article>
    @empty
        <p class="text-sm text-slate-600">Nenhum registro cadastrado.</p>
    @endforelse
</div>
