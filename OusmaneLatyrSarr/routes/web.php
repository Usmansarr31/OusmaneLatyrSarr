<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Affichage de la liste des livres
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Formulaire pour ajouter un livre
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// Enregistrement du livre
Route::post('/books', [BookController::class, 'store'])->name('books.store');

Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');

// Dans routes/web.php
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');


// Suppression d'un livre   
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
