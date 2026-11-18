<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Conheça a Luvia, um projeto assistivo que conecta luvas inteligentes, aplicativo mobile e tecnologia para apoiar a tradução de Libras.">
        <meta name="theme-color" content="#0A6DFF">
        <title>Luvia — Tecnologia assistiva para Libras</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>[x-cloak]{display:none!important}</style>
    </head>
    <body class="overflow-x-hidden bg-white" x-data="{ mobileOpen: false }">
        <header class="fixed inset-x-0 top-0 z-50 border-b border-slate-200/70 bg-white/90 backdrop-blur-xl">
            <nav class="section-shell flex h-18 items-center justify-between py-3" aria-label="Navegação principal">
                <a href="#inicio" aria-label="Luvia — voltar ao início">
                    <x-application-logo />
                </a>

                <div class="hidden items-center gap-7 lg:flex">
                    <a href="#problema" class="text-sm font-semibold text-slate-600 transition hover:text-luvia-700">O projeto</a>
                    <a href="#como-funciona" class="text-sm font-semibold text-slate-600 transition hover:text-luvia-700">Como funciona</a>
                    <a href="#hardware" class="text-sm font-semibold text-slate-600 transition hover:text-luvia-700">Tecnologia</a>
                    <a href="#arquitetura" class="text-sm font-semibold text-slate-600 transition hover:text-luvia-700">Arquitetura</a>
                    <a href="#projeto" class="text-sm font-semibold text-slate-600 transition hover:text-luvia-700">TCC</a>
                </div>

                <div class="hidden items-center gap-3 sm:flex">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn-primary">Abrir dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-bold text-slate-700 transition hover:text-luvia-700">Entrar</a>
                        <a href="{{ route('register') }}" class="btn-primary !px-4 !py-2.5">Criar conta</a>
                    @endauth
                </div>

                <button type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 text-slate-700 lg:hidden" @click="mobileOpen = !mobileOpen" :aria-expanded="mobileOpen" aria-controls="mobile-menu" aria-label="Abrir menu">
                    <svg x-show="!mobileOpen" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/></svg>
                    <svg x-cloak x-show="mobileOpen" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="m6 6 12 12M18 6 6 18"/></svg>
                </button>
            </nav>

            <div id="mobile-menu" x-cloak x-show="mobileOpen" x-transition class="border-t border-slate-100 bg-white lg:hidden">
                <div class="section-shell grid gap-1 py-4">
                    <a @click="mobileOpen = false" href="#problema" class="rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-luvia-50">O projeto</a>
                    <a @click="mobileOpen = false" href="#como-funciona" class="rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-luvia-50">Como funciona</a>
                    <a @click="mobileOpen = false" href="#hardware" class="rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-luvia-50">Tecnologia</a>
                    <a @click="mobileOpen = false" href="#arquitetura" class="rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-luvia-50">Arquitetura</a>
                    <div class="mt-2 grid grid-cols-2 gap-3 border-t border-slate-100 pt-4 sm:hidden">
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn-primary col-span-2">Abrir dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn-secondary">Entrar</a>
                            <a href="{{ route('register') }}" class="btn-primary">Criar conta</a>
                        @endauth
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section id="inicio" class="relative overflow-hidden bg-gradient-to-b from-luvia-50 via-white to-white pb-20 pt-32 sm:pb-28 sm:pt-40">
                <div class="absolute inset-0 soft-grid [mask-image:linear-gradient(to_bottom,black,transparent_82%)]"></div>
                <div class="absolute -left-32 top-24 h-96 w-96 rounded-full bg-luvia-200/40 blur-3xl"></div>
                <div class="absolute -right-32 top-10 h-96 w-96 rounded-full bg-cyan-100/70 blur-3xl"></div>

                <div class="section-shell relative grid items-center gap-14 lg:grid-cols-[1.05fr_.95fr]">
                    <div>
                        <span class="eyebrow">
                            <span class="h-2 w-2 rounded-full bg-luvia-600"></span>
                            Tecnologia assistiva · TCC
                        </span>
                        <h1 class="mt-7 max-w-3xl text-5xl font-black leading-[1.02] tracking-[-0.055em] text-slate-950 sm:text-6xl lg:text-7xl">
                            Movimento que aproxima. <span class="text-luvia-600">Tecnologia que comunica.</span>
                        </h1>
                        <p class="mt-7 max-w-2xl text-lg leading-8 text-slate-600 sm:text-xl">
                            A Luvia integra luvas inteligentes, aplicativo mobile e uma API própria em um sistema assistivo voltado à tradução de Libras em desenvolvimento.
                        </p>
                        <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                            <a href="#como-funciona" class="btn-primary">
                                Explorar o projeto
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6"/></svg>
                            </a>
                            @guest
                                <a href="{{ route('register') }}" class="btn-secondary">Acessar área do projeto</a>
                            @else
                                <a href="{{ route('dashboard') }}" class="btn-secondary">Acessar dashboard</a>
                            @endguest
                        </div>

                        <dl class="mt-12 grid max-w-2xl grid-cols-3 divide-x divide-slate-200 border-y border-slate-200 py-5">
                            <div class="pr-4">
                                <dt class="text-xs font-bold uppercase tracking-wider text-slate-400">Por luva</dt>
                                <dd class="mt-1 text-lg font-black text-slate-900">5 sensores</dd>
                            </div>
                            <div class="px-4">
                                <dt class="text-xs font-bold uppercase tracking-wider text-slate-400">Conexão</dt>
                                <dd class="mt-1 text-lg font-black text-slate-900">BLE</dd>
                            </div>
                            <div class="pl-4">
                                <dt class="text-xs font-bold uppercase tracking-wider text-slate-400">Base mobile</dt>
                                <dd class="mt-1 text-lg font-black text-slate-900">React Native</dd>
                            </div>
                        </dl>
                    </div>

                    <div class="relative mx-auto w-full max-w-xl">
                        <div class="absolute -inset-5 rounded-[2.5rem] bg-gradient-to-br from-luvia-200/50 to-cyan-100/30 blur-2xl"></div>
                        <div class="surface-card relative overflow-hidden p-5 sm:p-7">
                            <div class="flex items-center justify-between border-b border-slate-100 pb-5">
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-[0.15em] text-slate-400">Ecossistema Luvia</p>
                                    <p class="mt-1 font-bold text-slate-900">Fluxo assistivo integrado</p>
                                </div>
                                <span class="inline-flex items-center gap-2 rounded-full bg-amber-50 px-3 py-1.5 text-xs font-bold text-amber-700 ring-1 ring-inset ring-amber-200">
                                    <span class="h-2 w-2 rounded-full bg-amber-500"></span> Em desenvolvimento
                                </span>
                            </div>

                            <div class="relative mt-7 grid grid-cols-[1fr_auto_1fr] items-center gap-3">
                                <div class="rounded-3xl bg-slate-950 p-5 text-white shadow-xl">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-luvia-300">
                                        <x-feature-icon name="hand" class="h-7 w-7" />
                                    </div>
                                    <p class="mt-5 text-xs font-bold uppercase tracking-wider text-slate-400">Luvas</p>
                                    <p class="mt-1 text-lg font-black">Captura de gestos</p>
                                    <div class="mt-4 flex flex-wrap gap-2 text-[11px] font-semibold text-slate-300">
                                        <span class="rounded-full bg-white/10 px-2.5 py-1">Flexão</span>
                                        <span class="rounded-full bg-white/10 px-2.5 py-1">Orientação</span>
                                        <span class="rounded-full bg-white/10 px-2.5 py-1">Movimento</span>
                                    </div>
                                </div>

                                <div class="flex flex-col items-center gap-2 text-luvia-600">
                                    <span class="rounded-full bg-luvia-50 p-2 ring-1 ring-luvia-100"><x-feature-icon name="bluetooth" class="h-5 w-5" /></span>
                                    <span class="h-px w-8 bg-gradient-to-r from-luvia-200 to-luvia-500"></span>
                                    <span class="text-[10px] font-black uppercase tracking-wider">BLE</span>
                                </div>

                                <div class="rounded-3xl border border-luvia-100 bg-gradient-to-b from-luvia-50 to-white p-5">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-luvia-600 text-white shadow-blue">
                                        <x-feature-icon name="mobile" class="h-6 w-6" />
                                    </div>
                                    <p class="mt-5 text-xs font-bold uppercase tracking-wider text-luvia-600">Aplicativo</p>
                                    <p class="mt-1 text-lg font-black text-slate-950">Experiência mobile</p>
                                    <div class="mt-4 space-y-2">
                                        <div class="h-2 rounded-full bg-luvia-100"><div class="h-2 w-4/5 rounded-full bg-luvia-500"></div></div>
                                        <div class="h-2 rounded-full bg-slate-100"><div class="h-2 w-3/5 rounded-full bg-cyan-400"></div></div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 grid grid-cols-3 gap-3">
                                <div class="rounded-2xl bg-slate-50 p-3 text-center"><p class="text-xs font-semibold text-slate-500">Hardware</p><p class="mt-1 text-sm font-black text-slate-900">ESP32-S3</p></div>
                                <div class="rounded-2xl bg-slate-50 p-3 text-center"><p class="text-xs font-semibold text-slate-500">Mobile</p><p class="mt-1 text-sm font-black text-slate-900">Expo</p></div>
                                <div class="rounded-2xl bg-slate-50 p-3 text-center"><p class="text-xs font-semibold text-slate-500">API</p><p class="mt-1 text-sm font-black text-slate-900">Node.js</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="problema" class="py-20 sm:py-28">
                <div class="section-shell grid gap-8 lg:grid-cols-2">
                    <article class="surface-card relative overflow-hidden p-8 sm:p-10">
                        <span class="absolute right-6 top-4 text-7xl font-black text-slate-100">01</span>
                        <div class="icon-chip"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" d="M12 9v4m0 4h.01"/><path d="M10.3 3.8 2.7 17a2 2 0 0 0 1.7 3h15.2a2 2 0 0 0 1.7-3L13.7 3.8a2 2 0 0 0-3.4 0Z"/></svg></div>
                        <p class="mt-6 text-xs font-bold uppercase tracking-[0.15em] text-slate-400">O desafio</p>
                        <h2 class="mt-2 text-3xl font-black tracking-tight text-slate-950">Barreiras ainda limitam a comunicação.</h2>
                        <p class="mt-5 leading-7 text-slate-600">A comunicação entre pessoas surdas e ouvintes pode depender da presença de intérpretes ou do conhecimento prévio de Libras. A Luvia investiga como a tecnologia pode apoiar esse encontro.</p>
                    </article>

                    <article class="relative overflow-hidden rounded-3xl bg-slate-950 p-8 text-white shadow-soft sm:p-10">
                        <span class="absolute right-6 top-4 text-7xl font-black text-white/5">02</span>
                        <div class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-luvia-500 text-white"><x-feature-icon name="translate" /></div>
                        <p class="mt-6 text-xs font-bold uppercase tracking-[0.15em] text-luvia-300">A proposta</p>
                        <h2 class="mt-2 text-3xl font-black tracking-tight">Transformar dados de movimento em uma experiência assistiva.</h2>
                        <p class="mt-5 leading-7 text-slate-300">Sensores nas luvas capturam flexão, orientação e movimento. O aplicativo organiza o fluxo de tradução e se conecta à API já desenvolvida, enquanto a integração BLE continua evoluindo.</p>
                    </article>
                </div>
            </section>

            <section id="como-funciona" class="bg-slate-950 py-20 text-white sm:py-28">
                <div class="section-shell">
                    <x-section-heading :dark="true" eyebrow="Como funciona" title="Da mão ao aplicativo, etapa por etapa." description="Uma arquitetura modular permite desenvolver e validar cada parte do sistema sem confundir o que já existe com o que ainda está em integração." />

                    <ol class="mt-14 grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                        @foreach ([
                            ['01', 'Captura', 'Cinco sensores flex e o BNO055 registram configuração dos dedos, orientação e movimento.'],
                            ['02', 'Processamento', 'Uma ESP32-S3 em cada luva organiza as leituras produzidas pelos sensores.'],
                            ['03', 'Comunicação', 'O protocolo BLE está projetado; a integração real com o aplicativo segue em desenvolvimento.'],
                            ['04', 'Experiência', 'O aplicativo recebe o fluxo e utiliza a API existente para os recursos do ecossistema.'],
                        ] as [$number, $title, $text])
                            <li class="rounded-3xl border border-white/10 bg-white/[0.06] p-6">
                                <span class="text-sm font-black text-luvia-300">{{ $number }}</span>
                                <h3 class="mt-8 text-xl font-black">{{ $title }}</h3>
                                <p class="mt-3 text-sm leading-6 text-slate-300">{{ $text }}</p>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </section>

            <section id="hardware" class="py-20 sm:py-28">
                <div class="section-shell">
                    <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end">
                        <x-section-heading eyebrow="Luvas inteligentes" title="Hardware pensado para ler cada dimensão do gesto." description="Componentes confirmados do protótipo, apresentados diretamente a partir dos registros do banco deste site." />
                        <span class="inline-flex w-fit items-center gap-2 rounded-full bg-emerald-50 px-4 py-2 text-xs font-bold text-emerald-700 ring-1 ring-inset ring-emerald-200">
                            <span class="h-2 w-2 rounded-full bg-emerald-500"></span> Dados carregados do SQLite
                        </span>
                    </div>

                    <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach ($featureCategories->get('Hardware', collect())->concat($featureCategories->get('Conectividade', collect())) as $feature)
                            <article class="feature-card">
                                <div class="icon-chip"><x-feature-icon :name="$feature->icon" /></div>
                                <p class="mt-5 text-xs font-bold uppercase tracking-wider text-luvia-600">{{ $feature->category }}</p>
                                <h3 class="mt-2 text-xl font-black text-slate-950">{{ $feature->title }}</h3>
                                <p class="mt-3 text-sm leading-6 text-slate-600">{{ $feature->description }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="aplicativo" class="overflow-hidden bg-luvia-50 py-20 sm:py-28">
                <div class="section-shell grid items-center gap-14 lg:grid-cols-[.8fr_1.2fr]">
                    <div class="mx-auto w-full max-w-sm">
                        <div class="rounded-[2.5rem] border-[7px] border-slate-950 bg-white p-3 shadow-2xl">
                            <div class="rounded-[1.85rem] bg-gradient-to-b from-luvia-600 to-luvia-800 p-5 text-white">
                                <div class="mx-auto h-1.5 w-16 rounded-full bg-white/25"></div>
                                <p class="mt-8 text-xs font-bold uppercase tracking-[0.15em] text-luvia-200">Olá, bem-vindo</p>
                                <h3 class="mt-2 text-2xl font-black">Como a Luvia pode ajudar?</h3>
                                <div class="mt-7 rounded-3xl bg-white p-5 text-slate-950 shadow-xl">
                                    <div class="flex items-center gap-3">
                                        <span class="icon-chip"><x-feature-icon name="translate" /></span>
                                        <div><p class="font-black">Tradução</p><p class="text-xs text-slate-500">Fluxo em desenvolvimento</p></div>
                                    </div>
                                    <div class="mt-5 h-2 rounded-full bg-slate-100"><div class="h-full w-2/3 rounded-full bg-luvia-500"></div></div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-2 px-2 py-4 text-center text-[10px] font-bold text-slate-500">
                                <span class="text-luvia-600">Home</span><span>Luvas</span><span>Perfil</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <x-section-heading eyebrow="Aplicativo mobile" title="Uma experiência construída para acompanhar todo o ecossistema." description="O aplicativo já possui stack definida em React Native, Expo, TypeScript e Expo Router. Seus módulos reúnem tradução, conexão das luvas e conteúdo de apoio." />
                        <div class="mt-9 flex flex-wrap gap-2">
                            @foreach (['React Native', 'Expo', 'TypeScript', 'Expo Router'] as $technology)
                                <span class="rounded-full border border-luvia-200 bg-white px-4 py-2 text-sm font-bold text-luvia-800">{{ $technology }}</span>
                            @endforeach
                        </div>

                        <div class="mt-10 grid gap-3 sm:grid-cols-2">
                            @foreach ($featureCategories->get('Aplicativo', collect())->where('title', '!=', 'Aplicativo Mobile') as $feature)
                                <article class="flex items-start gap-4 rounded-2xl border border-luvia-100 bg-white p-4 shadow-sm">
                                    <span class="icon-chip !h-10 !w-10 !rounded-xl"><x-feature-icon :name="$feature->icon" /></span>
                                    <div>
                                        <h3 class="font-black text-slate-950">{{ $feature->title }}</h3>
                                        <p class="mt-1 text-xs leading-5 text-slate-500">{{ $feature->description }}</p>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section id="arquitetura" class="py-20 sm:py-28">
                <div class="section-shell">
                    <x-section-heading align="center" eyebrow="Arquitetura" title="Dois produtos, responsabilidades bem definidas." description="O Laravel não substitui a API principal. Este site é uma aplicação separada, criada para apresentar o TCC e cumprir a atividade acadêmica." />

                    <div class="mt-14 grid gap-6 lg:grid-cols-2">
                        <article class="overflow-hidden rounded-3xl bg-slate-950 p-7 text-white shadow-soft sm:p-9">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-[0.16em] text-luvia-300">Produto principal</p>
                                    <h3 class="mt-2 text-2xl font-black">Aplicativo e ecossistema Luvia</h3>
                                </div>
                                <span class="rounded-full bg-emerald-400/10 px-3 py-1 text-xs font-bold text-emerald-300 ring-1 ring-inset ring-emerald-400/20">API existente</span>
                            </div>
                            <div class="mt-8 grid gap-3 sm:grid-cols-3">
                                @foreach ([['Luvas', 'ESP32-S3 + sensores'], ['Aplicativo', 'React Native + Expo'], ['API', 'Node + Express + Prisma']] as [$title, $stack])
                                    <div class="rounded-2xl border border-white/10 bg-white/[0.06] p-4">
                                        <p class="font-black">{{ $title }}</p><p class="mt-2 text-xs leading-5 text-slate-400">{{ $stack }}</p>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-4 rounded-2xl border border-amber-400/20 bg-amber-400/10 p-4 text-sm leading-6 text-amber-100">
                                O protocolo BLE está projetado. A integração real entre cada luva e o aplicativo continua em desenvolvimento.
                            </div>
                        </article>

                        <article class="overflow-hidden rounded-3xl border border-luvia-200 bg-gradient-to-br from-luvia-50 to-white p-7 shadow-soft sm:p-9">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-[0.16em] text-luvia-600">Atividade acadêmica</p>
                                    <h3 class="mt-2 text-2xl font-black text-slate-950">Site de apresentação do TCC</h3>
                                </div>
                                <span class="rounded-full bg-luvia-600 px-3 py-1 text-xs font-bold text-white">Projeto separado</span>
                            </div>
                            <div class="mt-8 grid gap-3 sm:grid-cols-3">
                                @foreach ([['Interface', 'Blade + Tailwind'], ['Aplicação', 'Laravel 12 + Breeze'], ['Dados', 'SQLite + Eloquent']] as [$title, $stack])
                                    <div class="rounded-2xl border border-luvia-100 bg-white p-4">
                                        <p class="font-black text-slate-950">{{ $title }}</p><p class="mt-2 text-xs leading-5 text-slate-500">{{ $stack }}</p>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-4 rounded-2xl border border-luvia-100 bg-white p-4 text-sm leading-6 text-slate-600">
                                Este site possui autenticação própria e uma base informativa com <strong class="text-slate-950">{{ $featureCount }} registros</strong>. Ele não processa dados das luvas nem substitui o backend Node.js.
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section id="backend" class="bg-slate-50 py-20 sm:py-28">
                <div class="section-shell">
                    <x-section-heading eyebrow="Backend principal" title="Uma API real já conectada ao aplicativo." description="Node.js e Express estruturam a API; Prisma conecta a camada de dados ao PostgreSQL hospedado na Neon; JWT e refresh token cuidam da autenticação." />
                    <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach ($featureCategories->get('Backend', collect()) as $feature)
                            <article class="feature-card">
                                <div class="flex items-center justify-between">
                                    <span class="icon-chip"><x-feature-icon :name="$feature->icon" /></span>
                                    <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-[10px] font-black uppercase tracking-wider text-emerald-700">Implementado</span>
                                </div>
                                <h3 class="mt-5 text-lg font-black text-slate-950">{{ $feature->title }}</h3>
                                <p class="mt-3 text-sm leading-6 text-slate-600">{{ $feature->description }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="projeto" class="py-20 sm:py-28">
                <div class="section-shell">
                    <x-section-heading align="center" eyebrow="Projeto acadêmico" title="Espaço preparado para a evolução do TCC." description="Materiais ainda não fornecidos aparecem como pendentes, sem nomes, links ou imagens fictícias." />
                    <div class="mt-12 grid gap-6 lg:grid-cols-2">
                        <article class="surface-card flex min-h-72 flex-col items-center justify-center p-8 text-center">
                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400"><svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="m8 14 2.5-2.5L14 15l2-2 3 3M8 8h.01"/></svg></div>
                            <h3 class="mt-5 text-xl font-black text-slate-950">Protótipos e registros visuais</h3>
                            <p class="mt-3 max-w-md text-sm leading-6 text-slate-500">Link do Figma, screenshots reais do aplicativo, fotos das luvas e logo oficial serão incluídos quando os materiais forem fornecidos.</p>
                            <span class="mt-6 rounded-full bg-slate-100 px-3 py-1.5 text-xs font-bold text-slate-500">Material pendente</span>
                        </article>
                        <article class="surface-card flex min-h-72 flex-col items-center justify-center p-8 text-center">
                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400"><x-feature-icon name="user" class="h-6 w-6" /></div>
                            <h3 class="mt-5 text-xl font-black text-slate-950">Equipe e contexto acadêmico</h3>
                            <p class="mt-3 max-w-md text-sm leading-6 text-slate-500">Integrantes, atribuições, instituição, curso e orientação serão apresentados somente após a confirmação dos dados reais.</p>
                            <span class="mt-6 rounded-full bg-slate-100 px-3 py-1.5 text-xs font-bold text-slate-500">Informações pendentes</span>
                        </article>
                    </div>
                </div>
            </section>

            <section class="pb-20 sm:pb-28">
                <div class="section-shell">
                    <div class="relative overflow-hidden rounded-[2rem] bg-luvia-600 px-6 py-14 text-center text-white shadow-blue sm:px-12 sm:py-16">
                        <div class="absolute inset-0 soft-grid opacity-25"></div>
                        <div class="relative mx-auto max-w-3xl">
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-luvia-100">Área autenticada</p>
                            <h2 class="mt-4 text-3xl font-black tracking-[-0.04em] sm:text-5xl">Explore a visão técnica completa da Luvia.</h2>
                            <p class="mx-auto mt-5 max-w-2xl leading-7 text-luvia-100">Acesse o dashboard para visualizar arquitetura, módulos, hardware e os registros carregados do banco desta atividade.</p>
                            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
                                @guest
                                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-sm font-black text-luvia-700 transition hover:-translate-y-0.5">Criar conta gratuita</a>
                                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-full border border-white/30 px-6 py-3 text-sm font-black text-white transition hover:bg-white/10">Já tenho uma conta</a>
                                @else
                                    <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-sm font-black text-luvia-700 transition hover:-translate-y-0.5">Abrir dashboard</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="catalogo" class="section-shell py-14">
                <h2 class="mb-6 text-3xl font-black text-slate-950">Catálogo do TCC</h2>
                <x-project-catalog :features="$features" />
            </section>
        </main>

        <footer class="border-t border-slate-200 bg-white py-10">
            <div class="section-shell flex flex-col items-center justify-between gap-6 text-center sm:flex-row sm:text-left">
                <div><x-application-logo /><p class="mt-3 text-sm text-slate-500">Projeto assistivo para tradução de Libras.</p></div>
                <p class="max-w-md text-xs leading-5 text-slate-400">Site institucional desenvolvido em Laravel para apresentação acadêmica do TCC Luvia. Sem alegações de desempenho ainda não validadas.</p>
            </div>
        </footer>
    </body>
</html>
