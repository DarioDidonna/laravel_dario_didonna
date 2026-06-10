<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/song/create', [SongController::class, 'create'])->name('song.create');

Route::post('/song/store', [SongController::class, 'store'])->name('song.store');

Route::get('/song/index', [SongController::class, 'index'])->name('song.index');