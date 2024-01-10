<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class AddBook extends Model
{
    use HasFactory;
    use Sluggable;
    public $timestamps = false; 
    // created updated_at supaya mati di db migration
    protected $fillable =[
        'book_code', 'Book_title', 'author', 'slug'
    ];
//     public function sluggable(): array
//     {
//         return[
//             'slug' => [
//                 'source' => 'title'
//             ]
//         ];
//     }
//    public function categories(): BelongsToMany
//    {
//     return $this->belongsToMany(Category::class,'book_category','book_id','category_id');
//    }

}
