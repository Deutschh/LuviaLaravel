<x-guest-layout>
    <div class="mb-7">
        <span class="eyebrow">Área protegida</span>
        <h1 class="mt-4 text-3xl font-black tracking-[-0.04em] text-slate-950">Confirme sua senha</h1>
        <p class="mt-2 text-sm leading-6 text-slate-500">Por segurança, confirme sua senha antes de continuar.</p>
    </div>
    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
        @csrf
        <div>
            <x-input-label for="password" value="Senha" />
            <x-text-input id="password" class="w-full" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <x-primary-button class="w-full">Confirmar e continuar</x-primary-button>
    </form>
</x-guest-layout>
