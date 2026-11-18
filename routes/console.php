<?php

use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('luvia:catalog-editor {email} {--revoke}', function () {
    $user = User::query()->where('email', $this->argument('email'))->first();

    if (! $user) {
        $this->error('Conta não encontrada.');
        return 1;
    }

    $user->can_manage_catalog = ! $this->option('revoke');
    $user->save();

    $this->info($user->can_manage_catalog ? 'Permissão concedida.' : 'Permissão revogada.');
    return 0;
})->purpose('Concede ou revoga a permissão de edição do catálogo Luvia.');
