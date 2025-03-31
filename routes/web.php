<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Homepage Route (Optional)
Route::get('/', function () {
    return view('welcome');
});

// Books Route
Route::get('/books', [BookController::class, 'index'])->name('books.index');
