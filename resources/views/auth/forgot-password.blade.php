<x-guest-layout>
    <div class="mb-7">
        <span class="eyebrow">Recuperação de acesso</span>
        <h1 class="mt-4 text-3xl font-black tracking-[-0.04em] text-slate-950">Redefina sua senha</h1>
        <p class="mt-2 text-sm leading-6 text-slate-500">Informe o e-mail da conta. Enviaremos um link seguro para criar uma nova senha.</p>
    </div>

    <x-auth-session-status class="mb-5" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf
        <div>
            <x-input-label for="email" value="E-mail" />
            <x-text-input id="email" class="w-full" type="email" name="email" :value="old('email')" placeholder="voce@exemplo.com" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <x-primary-button class="w-full">Enviar link de recuperação</x-primary-button>
    </form>

    <p class="mt-7 text-center text-sm"><a href="{{ route('login') }}" class="font-black text-luvia-700 hover:text-luvia-900">← Voltar para o login</a></p>
</x-guest-layout>
