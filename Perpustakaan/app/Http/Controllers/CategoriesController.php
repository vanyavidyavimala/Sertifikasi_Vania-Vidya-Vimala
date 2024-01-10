<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    //untuk insert//
    public function kategori()
    {
        return view('books-add');
    }
    public function buku()
    {
        return view('categories');
    }
    public function add(Request $request)
    {
        $category = new Category();
        $category->book_code = $request->input('book_code');
        $category->book_title = $request->input('book_title');
        $category->author = $request->input('author');
        $category->status ="In Stock";

            $filename = time().'.'.$request->cover->extension();
            $request->cover->storeAs('public/category',$filename);
            $category->cover = $filename;

            $category->save();
        return redirect('/books')->with('category',$category);
    }
}
