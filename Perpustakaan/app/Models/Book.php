<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'book_collections';
    protected $guarded =[];

    public function renters()
    {
        return $this->hasMany(Rentlog::class);
    }
}

