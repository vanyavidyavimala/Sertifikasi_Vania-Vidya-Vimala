<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rentbook extends Model
{
     // fetch data daftar peminjam//
    use HasFactory;
    public $timestamps = false;
    protected $table = 'renterlist';
    protected $guarded =[];
    protected $casts = [
        'rent_date'=> 'date',
        'return_date' => 'date',
    ];

}
