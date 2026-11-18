<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#0A6DFF">
        <title>Acesso — Luvia</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <main class="grid min-h-screen bg-white lg:grid-cols-[.92fr_1.08fr]">
            <section class="relative hidden overflow-hidden bg-slate-950 p-12 text-white lg:flex lg:flex-col lg:justify-between" aria-label="Sobre a Luvia">
                <div class="absolute inset-0 soft-grid opacity-20"></div>
                <div class="absolute -left-28 top-1/3 h-80 w-80 rounded-full bg-luvia-600/40 blur-3xl"></div>
                <div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-cyan-400/20 blur-3xl"></div>
                <a href="{{ route('home') }}" class="relative w-fit rounded-xl bg-white px-3 py-2"><x-application-logo /></a>
                <div class="relative max-w-lg">
                    <span class="inline-flex rounded-full border border-white/15 bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-[0.15em] text-luvia-200">Área do projeto</span>
                    <h1 class="mt-6 text-5xl font-black leading-[1.05] tracking-[-0.05em]">Conheça a tecnologia por trás da Luvia.</h1>
                    <p class="mt-5 text-lg leading-8 text-slate-300">Acesse a visão técnica do hardware, aplicativo e backend que formam o ecossistema assistivo.</p>
                    <div class="mt-9 grid grid-cols-3 gap-3">
                        <div class="rounded-2xl border border-white/10 bg-white/[0.06] p-4"><p class="text-xs font-bold text-slate-400">Luvas</p><p class="mt-1 font-black">ESP32-S3</p></div>
                        <div class="rounded-2xl border border-white/10 bg-white/[0.06] p-4"><p class="text-xs font-bold text-slate-400">Mobile</p><p class="mt-1 font-black">Expo</p></div>
                        <div class="rounded-2xl border border-white/10 bg-white/[0.06] p-4"><p class="text-xs font-bold text-slate-400">API</p><p class="mt-1 font-black">Node.js</p></div>
                    </div>
                </div>
                <p class="relative text-xs leading-5 text-slate-500">Site acadêmico desenvolvido em Laravel. A API principal da Luvia é um produto separado.</p>
            </section>

            <section class="relative flex items-center justify-center bg-gradient-to-b from-luvia-50/70 to-white px-5 py-10 sm:px-10">
                <div class="absolute inset-0 soft-grid opacity-60 [mask-image:linear-gradient(to_bottom,black,transparent)]"></div>
                <div class="relative w-full max-w-md">
                    <a href="{{ route('home') }}" class="mb-8 inline-flex rounded-xl bg-white px-3 py-2 shadow-sm lg:hidden"><x-application-logo /></a>
                    <div class="surface-card p-6 sm:p-8">{{ $slot }}</div>
                    <p class="mt-6 text-center text-xs text-slate-400"><a href="{{ route('home') }}" class="font-bold text-slate-500 hover:text-luvia-700">← Voltar para a apresentação</a></p>
                </div>
            </section>
        </main>
    </body>
</html>
