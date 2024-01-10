<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;

class KatalogController extends Controller
{
    //function untuk page katalog//
    public function buku()
    {
        $value = Katalog::all();
        // dd($value);
        return view('categories',compact('value'));
    }
}
