<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'genre_id'
    ];

    // one to many type data sets relation
    public function genre(){
        return $this->belongsTo(Genre::class); //if the book belongs to the genre (books are many but only has 1 type genre)
    }
}
