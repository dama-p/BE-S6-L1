<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BooksController::class,'index'])->name('index');

Route::get('/books/{id}', [BooksController::class,'show'])->name('show');

Route::get('books/add', [BooksController::class,'create'])->name('create');

Route::get('books/{id}/edit', [BooksController::class,'edit'])->name('edit'); 