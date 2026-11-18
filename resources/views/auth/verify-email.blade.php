<x-guest-layout>
    <div class="mb-7">
        <span class="eyebrow">Verificação de e-mail</span>
        <h1 class="mt-4 text-3xl font-black tracking-[-0.04em] text-slate-950">Confirme seu endereço</h1>
        <p class="mt-2 text-sm leading-6 text-slate-500">Enviamos um link de verificação para o e-mail usado no cadastro. Abra a mensagem para concluir esta etapa.</p>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-5 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-700">Um novo link de verificação foi enviado.</div>
    @endif

    <div class="space-y-3">
        <form method="POST" action="{{ route('verification.send') }}">@csrf<x-primary-button class="w-full">Reenviar verificação</x-primary-button></form>
        <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="w-full rounded-xl border border-slate-200 px-5 py-3 text-sm font-bold text-slate-600 transition hover:bg-slate-50">Sair da conta</button></form>
    </div>
</x-guest-layout>
