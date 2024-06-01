<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Posts\CreatePost;
use Livewire\Livewire;

Route::get('/counter', Counter::class);
Route::get('/post', CreatePost::class)->name('post');

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('custom/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get('/custom/livewire/livewire.js', $handle);
});

require __DIR__ . '/auth.php';
