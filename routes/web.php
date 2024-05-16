<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BooksController::class,'getBooks'])->name('getBooks');

Route::get('/books/{id}', [BooksController::class,'getDetails'])->name('getDetails');

Route::get('/add', [BooksController::class,'addBook'])->name('addBook');

Route::get('{id}/edit', [BooksController::class,'editBook'])->name('editBook'); 