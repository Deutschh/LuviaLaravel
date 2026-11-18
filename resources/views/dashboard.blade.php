<x-app-layout>
    <div class="relative overflow-hidden bg-gradient-to-b from-luvia-50 to-slate-50 py-10 sm:py-14">
        <div class="absolute inset-0 soft-grid [mask-image:linear-gradient(to_bottom,black,transparent)]"></div>
        <div class="section-shell relative">
            <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">
                <div class="max-w-3xl">
                    <span class="eyebrow"><span class="h-2 w-2 rounded-full bg-emerald-500"></span> Área autenticada</span>
                    <h1 class="mt-5 text-4xl font-black tracking-[-0.045em] text-slate-950 sm:text-5xl">Visão técnica da Luvia</h1>
                    <p class="mt-4 text-lg leading-8 text-slate-600">Olá, {{ Auth::user()->name }}. Aqui estão os componentes confirmados, a arquitetura atual e o escopo acadêmico do projeto.</p>
                </div>
                <a href="{{ route('home') }}" class="btn-secondary w-fit">Ver apresentação pública <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6"/></svg></a>
            </div>

            <dl class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="surface-card p-5"><dt class="text-xs font-bold uppercase tracking-wider text-slate-400">Registros no SQLite</dt><dd class="mt-3 text-3xl font-black text-slate-950">{{ $featureCount }}</dd><p class="mt-1 text-xs text-slate-500">Exibidos nesta página</p></div>
                <div class="surface-card p-5"><dt class="text-xs font-bold uppercase tracking-wider text-slate-400">Sensores por luva</dt><dd class="mt-3 text-3xl font-black text-slate-950">5</dd><p class="mt-1 text-xs text-slate-500">Um sensor flex por dedo</p></div>
                <div class="surface-card p-5"><dt class="text-xs font-bold uppercase tracking-wider text-slate-400">Controle por luva</dt><dd class="mt-3 text-3xl font-black text-slate-950">1</dd><p class="mt-1 text-xs text-slate-500">ESP32-S3 dedicada</p></div>
                <div class="surface-card p-5"><dt class="text-xs font-bold uppercase tracking-wider text-slate-400">Integração BLE</dt><dd class="mt-3 text-xl font-black text-amber-600">Em desenvolvimento</dd><p class="mt-1 text-xs text-slate-500">Protocolo já projetado</p></div>
            </dl>
        </div>
    </div>

    <div class="section-shell space-y-10 pb-20">
        <section class="surface-card overflow-hidden">
            <div class="border-b border-slate-100 px-6 py-5 sm:px-8">
                <div class="flex flex-col justify-between gap-3 sm:flex-row sm:items-center">
                    <div><p class="text-xs font-bold uppercase tracking-[0.14em] text-luvia-600">Arquitetura do ecossistema</p><h2 class="mt-1 text-2xl font-black text-slate-950">Como as partes se conectam</h2></div>
                    <span class="w-fit rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-bold text-emerald-700 ring-1 ring-inset ring-emerald-200">API mobile implementada</span>
                </div>
            </div>
            <div class="grid gap-4 p-6 sm:p-8 lg:grid-cols-[1fr_auto_1fr_auto_1fr] lg:items-center">
                <div class="rounded-2xl bg-slate-950 p-6 text-white">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-luvia-300"><x-feature-icon name="hand" /></span>
                    <p class="mt-5 text-xs font-bold uppercase tracking-wider text-slate-400">Entrada física</p><h3 class="mt-1 text-xl font-black">Duas luvas inteligentes</h3><p class="mt-3 text-sm leading-6 text-slate-300">ESP32-S3, sensores flex e BNO055 em cada luva.</p>
                </div>
                <div class="flex items-center justify-center gap-2 text-luvia-600 lg:flex-col"><span class="h-px w-12 bg-luvia-300 lg:h-12 lg:w-px"></span><span class="rounded-full bg-amber-50 px-3 py-1 text-[10px] font-black text-amber-700">BLE EM INTEGRAÇÃO</span><span class="h-px w-12 bg-luvia-300 lg:h-12 lg:w-px"></span></div>
                <div class="rounded-2xl border border-luvia-100 bg-luvia-50 p-6">
                    <span class="icon-chip"><x-feature-icon name="mobile" /></span>
                    <p class="mt-5 text-xs font-bold uppercase tracking-wider text-luvia-600">Experiência</p><h3 class="mt-1 text-xl font-black text-slate-950">Aplicativo Luvia</h3><p class="mt-3 text-sm leading-6 text-slate-600">React Native, Expo, TypeScript e Expo Router.</p>
                </div>
                <div class="flex items-center justify-center gap-2 text-luvia-600 lg:flex-col"><span class="h-px w-12 bg-luvia-300 lg:h-12 lg:w-px"></span><span class="rounded-full bg-emerald-50 px-3 py-1 text-[10px] font-black text-emerald-700">API ATIVA</span><span class="h-px w-12 bg-luvia-300 lg:h-12 lg:w-px"></span></div>
                <div class="rounded-2xl border border-slate-200 bg-white p-6">
                    <span class="icon-chip"><x-feature-icon name="server" /></span>
                    <p class="mt-5 text-xs font-bold uppercase tracking-wider text-slate-400">Serviços</p><h3 class="mt-1 text-xl font-black text-slate-950">Backend principal</h3><p class="mt-3 text-sm leading-6 text-slate-600">Node.js, Express, Prisma, PostgreSQL/Neon e JWT.</p>
                </div>
            </div>
            <div class="mx-6 mb-6 rounded-2xl border border-amber-200 bg-amber-50 p-4 text-sm leading-6 text-amber-900 sm:mx-8 sm:mb-8">
                <strong>Estado atual:</strong> o protocolo BLE está projetado, mas a integração real entre cada luva e o aplicativo ainda está em desenvolvimento. Nenhuma métrica de precisão ou acerto é apresentada antes da validação.
            </div>
        </section>

        <section class="grid gap-6 xl:grid-cols-[1.3fr_.7fr]">
            <div class="surface-card p-6 sm:p-8">
                <div class="flex items-start justify-between gap-4"><div><p class="text-xs font-bold uppercase tracking-[0.14em] text-luvia-600">Aplicativo</p><h2 class="mt-1 text-2xl font-black text-slate-950">Módulos da experiência mobile</h2></div><span class="rounded-full bg-luvia-50 px-3 py-1.5 text-xs font-bold text-luvia-700">React Native + Expo</span></div>
                <div class="mt-7 grid gap-3 sm:grid-cols-2">
                    @foreach ($featureCategories->get('Aplicativo', collect())->where('title', '!=', 'Aplicativo Mobile') as $feature)
                        <article class="flex gap-4 rounded-2xl border border-slate-100 bg-slate-50/70 p-4">
                            <span class="icon-chip !h-10 !w-10 !rounded-xl"><x-feature-icon :name="$feature->icon" /></span>
                            <div><h3 class="font-black text-slate-950">{{ $feature->title }}</h3><p class="mt-1 text-xs leading-5 text-slate-500">{{ $feature->description }}</p></div>
                        </article>
                    @endforeach
                </div>
            </div>

            <aside class="rounded-3xl bg-luvia-600 p-6 text-white shadow-blue sm:p-8">
                <p class="text-xs font-bold uppercase tracking-[0.14em] text-luvia-100">Site da atividade</p>
                <h2 class="mt-2 text-2xl font-black">Uma aplicação separada.</h2>
                <p class="mt-4 text-sm leading-6 text-luvia-100">O Laravel apresenta o TCC, oferece autenticação e lê conteúdo informativo do SQLite. Ele não substitui a API Node.js do aplicativo.</p>
                <div class="mt-7 space-y-3">
                    @foreach ([['Laravel 12', 'Aplicação web'], ['Breeze + Blade', 'Autenticação e views'], ['Tailwind CSS', 'Interface responsiva'], ['SQLite', 'Dados desta atividade']] as [$title, $detail])
                        <div class="flex items-center justify-between rounded-2xl bg-white/10 px-4 py-3"><span class="font-bold">{{ $title }}</span><span class="text-xs text-luvia-100">{{ $detail }}</span></div>
                    @endforeach
                </div>
            </aside>
        </section>

        <section class="surface-card p-6 sm:p-8">
            <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                <div><p class="text-xs font-bold uppercase tracking-[0.14em] text-luvia-600">Banco de dados da atividade</p><h2 class="mt-1 text-2xl font-black text-slate-950">Catálogo ProjectFeature</h2><p class="mt-2 text-sm text-slate-500">Todos os itens abaixo foram consultados da tabela <code class="rounded bg-slate-100 px-1.5 py-0.5 text-xs font-bold text-slate-700">project_features</code>.</p></div>
                <span class="w-fit rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-bold text-emerald-700 ring-1 ring-inset ring-emerald-200">{{ $featureCount }} registros carregados</span>
            </div>
            @can('manage-catalog')
                <a href="{{ route('project-features.index') }}" class="btn-primary mt-5">Gerenciar catálogo</a>
            @endcan
            <div class="mt-7"><x-project-catalog :features="$features" /></div>
        </section>

        <section class="grid gap-6 lg:grid-cols-2">
            <article class="surface-card p-7 text-center sm:p-8">
                <span class="mx-auto flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-100 text-slate-400"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="m8 14 2.5-2.5L14 15l2-2 3 3"/></svg></span>
                <h2 class="mt-4 text-xl font-black text-slate-950">Protótipos e materiais</h2><p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">Figma, screenshots, logo oficial e fotos das luvas aguardam os arquivos reais.</p><span class="mt-5 inline-flex rounded-full bg-slate-100 px-3 py-1.5 text-xs font-bold text-slate-500">Pendente</span>
            </article>
            <article class="surface-card p-7 text-center sm:p-8">
                <span class="mx-auto flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-100 text-slate-400"><x-feature-icon name="user" /></span>
                <h2 class="mt-4 text-xl font-black text-slate-950">Equipe e atribuições</h2><p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">Integrantes, funções, instituição, curso e orientação serão adicionados após confirmação.</p><span class="mt-5 inline-flex rounded-full bg-slate-100 px-3 py-1.5 text-xs font-bold text-slate-500">Dados não fornecidos</span>
            </article>
        </section>
    </div>
</x-app-layout>
