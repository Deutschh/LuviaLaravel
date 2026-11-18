<x-app-layout>
    <section class="section-shell py-10">
        <div class="surface-card mx-auto max-w-2xl p-6 sm:p-8">
            <h1 class="text-3xl font-black text-slate-950">{{ $feature->exists ? 'Editar registro' : 'Novo registro' }}</h1>
            <form class="mt-6 space-y-5" method="POST" action="{{ $feature->exists ? route('project-features.update', $feature) : route('project-features.store') }}">
                @csrf
                @if ($feature->exists)
                    @method('PUT')
                @endif

                @foreach (['title' => ['Título', 255], 'category' => ['Categoria', 60], 'icon' => ['Ícone', 40]] as $field => [$label, $limit])
                    <div>
                        <x-input-label :for="$field" :value="$label" />
                        <x-text-input :id="$field" :name="$field" :maxlength="$limit" :value="old($field, $feature->{$field} ?? ($field === 'icon' ? 'chip' : ''))" class="mt-1 block w-full" required />
                        @if ($field === 'icon')
                            <p class="mt-1 text-xs text-slate-500">Exemplos: chip, hand, mobile, book, server.</p>
                        @endif
                        <x-input-error :messages="$errors->get($field)" />
                    </div>
                @endforeach

                <div>
                    <x-input-label for="description" value="Descrição" />
                    <textarea id="description" name="description" rows="5" maxlength="5000" required class="mt-1 block w-full rounded-md border-slate-300 focus:border-luvia-500 focus:ring-luvia-500">{{ old('description', $feature->description) }}</textarea>
                    <x-input-error :messages="$errors->get('description')" />
                </div>

                <div>
                    <x-input-label for="sort_order" value="Ordem de exibição" />
                    <x-text-input id="sort_order" name="sort_order" type="number" min="0" max="65535" :value="old('sort_order', $feature->sort_order ?? 0)" class="mt-1 block w-full" required />
                    <x-input-error :messages="$errors->get('sort_order')" />
                </div>

                <div class="flex flex-wrap gap-3">
                    <button class="btn-primary" type="submit">Salvar registro</button>
                    <a class="btn-secondary" href="{{ route('project-features.index') }}">Cancelar</a>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
