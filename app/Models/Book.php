<?php

namespace App\Models;

use App\Models\Customer;
use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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


    public function customers(){
        return $this->belongsToMany(Customer::class);
    }
}
