<?php

use App\Http\Livewire\Admin\Video;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard');
});

Route::get('/video',Video::class)->name('video');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
