<?php

use App\Http\Controllers\PageController;
use App\Http\Middleware\Language;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/detail', [PageController::class, 'detail'])->name('detail');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/lang/{lang}', function ($lang) {
    session(['lang' => $lang]);

    return back();
});
