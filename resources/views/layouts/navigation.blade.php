<nav x-data="{ open: false }" class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/90 backdrop-blur-xl" aria-label="Navegação do dashboard">
    <div class="section-shell flex h-18 items-center justify-between py-3">
        <div class="flex items-center gap-8">
            <a href="{{ route('dashboard') }}" aria-label="Dashboard Luvia"><x-application-logo /></a>
            <div class="hidden items-center gap-2 md:flex">
                <a href="{{ route('dashboard') }}" class="rounded-full bg-luvia-50 px-4 py-2 text-sm font-bold text-luvia-700">Visão geral</a>
                <a href="{{ route('home') }}" class="rounded-full px-4 py-2 text-sm font-bold text-slate-600 transition hover:bg-slate-50 hover:text-luvia-700">Ver site público</a>
            </div>
        </div>

        <div class="hidden items-center gap-4 sm:flex">
            <div class="text-right">
                <p class="text-sm font-bold text-slate-900">{{ Auth::user()->name }}</p>
                <p class="text-xs text-slate-500">{{ Auth::user()->email }}</p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-2.5 text-sm font-bold text-slate-600 transition hover:border-red-200 hover:bg-red-50 hover:text-red-700">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 17l5-5-5-5m5 5H3m11-9h5a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-5"/></svg>
                    Sair
                </button>
            </form>
        </div>

        <button type="button" @click="open = !open" class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 text-slate-700 sm:hidden" :aria-expanded="open" aria-controls="dashboard-menu" aria-label="Abrir menu">
            <svg x-show="!open" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/></svg>
            <svg x-cloak x-show="open" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="m6 6 12 12M18 6 6 18"/></svg>
        </button>
    </div>

    <div id="dashboard-menu" x-cloak x-show="open" x-transition class="border-t border-slate-100 bg-white sm:hidden">
        <div class="section-shell py-4">
            <p class="px-3 text-sm font-bold text-slate-900">{{ Auth::user()->name }}</p>
            <p class="px-3 text-xs text-slate-500">{{ Auth::user()->email }}</p>
            <div class="mt-4 grid gap-1">
                <a href="{{ route('dashboard') }}" class="rounded-xl bg-luvia-50 px-3 py-3 text-sm font-bold text-luvia-700">Visão geral</a>
                <a href="{{ route('home') }}" class="rounded-xl px-3 py-3 text-sm font-bold text-slate-600 hover:bg-slate-50">Ver site público</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full rounded-xl px-3 py-3 text-left text-sm font-bold text-red-600 hover:bg-red-50">Sair da conta</button>
                </form>
            </div>
        </div>
    </div>
</nav>
