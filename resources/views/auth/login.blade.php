<x-guest-layout>
    <div class="mb-7">
        <span class="eyebrow">Bem-vindo de volta</span>
        <h1 class="mt-4 text-3xl font-black tracking-[-0.04em] text-slate-950">Entre na sua conta</h1>
        <p class="mt-2 text-sm leading-6 text-slate-500">Acesse o dashboard técnico do projeto Luvia.</p>
    </div>

    <x-auth-session-status class="mb-5" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf
        <div>
            <x-input-label for="email" value="E-mail" />
            <x-text-input id="email" class="w-full" type="email" name="email" :value="old('email')" placeholder="voce@exemplo.com" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
            <div class="flex items-center justify-between gap-3">
                <x-input-label for="password" value="Senha" />
                <a class="text-xs font-bold text-luvia-700 hover:text-luvia-900" href="{{ route('password.request') }}">Esqueci minha senha</a>
            </div>
            <x-text-input id="password" class="w-full" type="password" name="password" placeholder="Digite sua senha" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <label for="remember_me" class="flex cursor-pointer items-center gap-3 text-sm font-medium text-slate-600">
            <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-luvia-600 focus:ring-luvia-500" name="remember">
            Manter conectado
        </label>
        <x-primary-button class="w-full">Entrar no dashboard</x-primary-button>
    </form>

    <p class="mt-7 text-center text-sm text-slate-500">Ainda não tem conta? <a href="{{ route('register') }}" class="font-black text-luvia-700 hover:text-luvia-900">Cadastre-se</a></p>
</x-guest-layout>
