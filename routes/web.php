<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Artikel;
use App\Http\Controllers\Admin;


Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [Home::class, 'index']);
Route::get('/aslinyaTiga', [Home::class, 'tiga_orang']);
Route::get('/siapaAku', [Home::class, 'siapaAku'])->middleware('auth', 'verified');

Route::get('/tulisArtikel', [Home::class, 'tulisArtikel'])->middleware('auth', 'verified');
Route::post('/saveArtikel', [Artikel::class,'save'])->middleware('auth','verified');
Route::get('/artikel/{id}', [Artikel::class,'detail']);
Route::get('/artikel/edit/{id}', [Artikel::class, 'edit'])->middleware('auth','verified');
Route::post('/artikel/update/{id}', [Artikel::class, 'update'])->middleware('auth','verified');
Route::get('/artikel', [Home::class, 'artikel']);
Route::get('/artikel/delete/{id}', [Artikel::class, 'delete'])->middleware('auth','verified');


