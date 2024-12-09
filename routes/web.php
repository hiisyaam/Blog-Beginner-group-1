<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
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
<<<<<<< HEAD
Route::get('/tulisArtikel', [Home::class, 'tulisArtikel'])->middleware('auth', 'verified');
=======
Route::get('/artikel', [Home::class, 'artikel']);
>>>>>>> babfb93dbe8a077cf93de563663ebd12e5a7fe53
