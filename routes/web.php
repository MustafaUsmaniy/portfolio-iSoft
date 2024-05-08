<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/detail', [PageController::class, 'detail'])->name('detail');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
