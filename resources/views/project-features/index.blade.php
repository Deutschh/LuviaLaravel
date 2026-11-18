<x-app-layout>
    <section class="section-shell py-10">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-black text-slate-950">Gerenciar catálogo</h1>
                <p class="mt-2 text-sm text-slate-600">{{ $features->count() }} registros do TCC</p>
            </div>
            <div class="flex flex-wrap gap-2">
                <a class="btn-secondary" href="{{ route('dashboard') }}">Voltar ao painel</a>
                <a class="btn-primary" href="{{ route('project-features.create') }}">Novo registro</a>
            </div>
        </div>

        @if (session('status'))
            <p role="status" class="mt-6 rounded-xl bg-emerald-50 p-4 text-emerald-800">{{ session('status') }}</p>
        @endif

        <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($features as $feature)
                <article class="surface-card flex flex-col p-5">
                    <p class="text-xs font-bold uppercase tracking-wider text-luvia-600">{{ $feature->category }} · Ordem {{ $feature->sort_order }}</p>
                    <h2 class="mt-2 break-words text-lg font-black text-slate-950">{{ $feature->title }}</h2>
                    <p class="mb-5 mt-2 whitespace-pre-line break-words text-sm text-slate-600">{{ $feature->description }}</p>
                    <div class="mt-auto flex flex-wrap gap-2">
                        <a class="btn-secondary" href="{{ route('project-features.edit', $feature) }}">Editar</a>
                        <form method="POST" action="{{ route('project-features.destroy', $feature) }}" onsubmit="return confirm('Excluir este registro do catálogo?')">
                            @csrf
                            @method('DELETE')
                            <x-danger-button>Excluir</x-danger-button>
                        </form>
                    </div>
                </article>
            @empty
                <p class="text-sm text-slate-600">Nenhum registro cadastrado.</p>
            @endforelse
        </div>
    </section>
</x-app-layout>
