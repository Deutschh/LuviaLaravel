<x-guest-layout>
    <div class="mb-7">
        <span class="eyebrow">Novo acesso</span>
        <h1 class="mt-4 text-3xl font-black tracking-[-0.04em] text-slate-950">Crie sua conta</h1>
        <p class="mt-2 text-sm leading-6 text-slate-500">Cadastre-se para conhecer a visão técnica completa da Luvia.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf
        <div>
            <x-input-label for="name" value="Nome" />
            <x-text-input id="name" class="w-full" type="text" name="name" :value="old('name')" placeholder="Seu nome" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="email" value="E-mail" />
            <x-text-input id="email" class="w-full" type="email" name="email" :value="old('email')" placeholder="voce@exemplo.com" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="password" value="Senha" />
            <x-text-input id="password" class="w-full" type="password" name="password" placeholder="Mínimo de 8 caracteres" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="password_confirmation" value="Confirmar senha" />
            <x-text-input id="password_confirmation" class="w-full" type="password" name="password_confirmation" placeholder="Digite a senha novamente" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <x-primary-button class="w-full">Criar conta</x-primary-button>
    </form>

    <p class="mt-7 text-center text-sm text-slate-500">Já possui uma conta? <a href="{{ route('login') }}" class="font-black text-luvia-700 hover:text-luvia-900">Entrar</a></p>
</x-guest-layout>
