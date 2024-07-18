<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourismServiceController;
use App\Http\Controllers\ServiceController;

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/tourism-services', [TourismServiceController::class, 'index']);
Route::get('/tourism-services/{id}', [TourismServiceController::class, 'show']);

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/services/{id}', [ServiceController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
