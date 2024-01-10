<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     // fetch data book collection//
    use HasFactory;
    public $timestamps = false;
    public $guarded = [];
    protected $table ='book_collections';
}
