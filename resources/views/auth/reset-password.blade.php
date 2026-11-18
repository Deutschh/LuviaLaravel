<x-guest-layout>
    <div class="mb-7">
        <span class="eyebrow">Novo acesso</span>
        <h1 class="mt-4 text-3xl font-black tracking-[-0.04em] text-slate-950">Crie uma nova senha</h1>
        <p class="mt-2 text-sm leading-6 text-slate-500">Escolha uma senha segura para concluir a recuperação da sua conta.</p>
    </div>
    <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div>
            <x-input-label for="email" value="E-mail" />
            <x-text-input id="email" class="w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="password" value="Nova senha" />
            <x-text-input id="password" class="w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="password_confirmation" value="Confirmar nova senha" />
            <x-text-input id="password_confirmation" class="w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <x-primary-button class="w-full">Salvar nova senha</x-primary-button>
    </form>
</x-guest-layout>
