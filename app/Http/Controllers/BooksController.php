<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return view('booklist');
    }
    public function show($id)
    {
        return view('details');
    }

    public function create()
    {
        return view('add');
    }

    public function edit($id)
    {
        return view('edit');
    }
}
