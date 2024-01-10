<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function buku()
    {
       $book = Book::all();
       return view('books',compact('book'));  
    }
    public function add()
    {
        $categories = Category::all();
        return view('books-add',compact("categories"));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_code' => 'required|unique:books|max:255',
            'title'=> 'required|max:255'
        ]);
    }
    
    public function edit($id)
{
    $book = Book::find($id);

    if (!$book) {
        return redirect('/books')->with('error', 'Book not found');
    }

    return view('books-edit')->with('book',$book);
}

    //function update dan delete buku
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
    
        if (!$book) {
            return redirect('/books')->with('error', 'Book not found');
        }

        $validatedData = $request->validate([
            'book_code' => 'required',
            'book_title' => 'required',
            'author' => 'required',
        ]);
    
        $book->update($validatedData);
    
        return redirect('/books')->with('success', 'Book updated successfully');
    }
public function deletebooks($id)
{
    $books = Book::find($id);
    if ($books){
        $books->delete();
    }
    return redirect('/books');
}

}
