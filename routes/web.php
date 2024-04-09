<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Corrigido a rota Livewire para Partner
use App\Livewire\Partners;

Route::get('partner', Partners::class)->name('partner');

require __DIR__.'/auth.php';
