<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($id){
        $book = book::with('bookshelfs')->where('id',$id)->firstOrFail();
        return view('book.show', compact('book'));
    }
}
