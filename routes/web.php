<?php

use App\Http\Controllers\ProjectFeatureController;
use App\Http\Controllers\ProjectPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectPageController::class, 'welcome'])->name('home');
Route::get('/dashboard', [ProjectPageController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth', 'can:manage-catalog'])->group(function () {
    Route::resource('project-features', ProjectFeatureController::class)->except('show');
});

require __DIR__.'/auth.php';

Route::fallback(fn () => response()->view('errors.404', [], 404));
