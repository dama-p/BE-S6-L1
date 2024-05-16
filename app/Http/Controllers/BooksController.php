<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function getBooks()
    {
        return view('booklist');
    }
    public function getDetails($id)
    {
        return view('details');
    }

    public function addBook()
    {
        return view('add');
    }

    public function editBook($id)
    {
        return view('edit');
    }
}
