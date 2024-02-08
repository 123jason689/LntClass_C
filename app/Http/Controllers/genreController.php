<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class genreController extends Controller
{
    public function createGenre(){

        // $this->authorize('is_admin');

        return view("createGenre", [
            'title' => 'Create Genre'
        ]);
    }

    public function storeGenre(Request $request){
        $request->validate([
            'genre_name' => 'required|min:2|max:10'
        ]);

        Genre::create([
            'name' => $request->genre_name
        ]);

        return redirect('/');
    }

    public function index(){
        $genres = Genre::all();
        return view('/genres', [
            'title' => 'Genres',
            'genres' => $genres
        ]);
    }

    public function showGenre(Genre $genre){
        return view('showGenre', [
            'title' => 'Show Genre',
            'genre' => $genre,
        ]);
    }
}
