<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rentlog;
use App\Models\Book;

class RentController extends Controller
{
    public function drop(){
        $data = Book::all();
        return view('books-rent', compact('data'));
    }
    public function insert(Request $request){
        $book_title = $request->input('dropdown');
        $name = $request->input ('rent_name');
        
        $rent = Book::where('book_title',$book_title)->first();
        if ($rent->status ==='In Stock'){

            $rent->update([
                'status'=> "Out Of Stock"
            ]);
            $rent->renters()->create([
                'book_title' => $rent->book_title,
                'name' => $name,
                'rent_date' => now(),
                'return_date' => now()->addWeek(),
            ]); 
        }

        return redirect('/dashboard');

    }
}
