<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
     protected $fillable = [
    'category_id',
    'name',
    'image',
    'publisher',
    'author',
    'publication_year',
    'isbn'
  ];

   public function category()
//    deklarasi relasi 
  {
    return $this->belongsTo(Category::class);
  }
}
