<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rentlog;
use App\Models\Book;

class RentlogController extends Controller
{
    //fetch data peminjam//
    public function pinjam()
    {
        $data = Rentlog::with('book')->get();

        return view('rentlog',compact('data'));
    }
    public function instock($judul){
        $rent = Book::where('book_title',$judul)->first();
        if(!$rent){
            return redirect()->back()->with('error','Update Failed');
        }
        if ($rent->status ==='Out Of Stock'){
        $rent->update([
            'status'=> "In Stock"
        ]);
        return redirect('/rentlog');
        }
        return redirect('/rentlog');
    }
    
}
