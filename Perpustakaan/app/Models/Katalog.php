<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'book_collections';
    protected $fillable = [
        'book_title',
        'author',
        'cover',
        'status'
    ];
}
