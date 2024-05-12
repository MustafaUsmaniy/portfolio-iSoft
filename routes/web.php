<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/detail', [PageController::class, 'detail'])->name('detail');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/lang/{lang}', function($lang){
    session(['lang'=>$lang]);

    return back();
});

Route::get('morphic1', function () {
    return view('morphic-window1.blade.php');
})->name('morphic');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
