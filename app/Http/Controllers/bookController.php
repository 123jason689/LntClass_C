<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Customer;
use App\Models\Genre;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function createBook(){
        return view('createBook', [
            'title' => 'Create Book',
            'genres' => Genre::all()
        ]);
    }

    public function storeBook(Request $request){
        $request->validate([
            'title'=>'required|min:3|max:20',
            'author'=>'required',
            'description'=>'required',
            'genre_id' => 'required'
        ]);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'genre_id' => $request->genre_id,
        ]);

        return redirect('/');
    }

    public function index(){
        $books = Book::all();
        return view('library',[
            'title' => "Library",
            'books' => $books
        ]);
    }

    public function showBook(Book $book){
        $customers = Customer::all();
        return view('showBook', [
            'title' => 'Show Book',
            'book' => $book,
            'customers' => $customers,
        ]);
    }

    public function delete(Book $book){
        $book->delete();

        return redirect('/library');
    }

    public function edit(Book $book){
        return view('editBook', [
            'title'=>'Edit Book',
            'book'=> $book
        ]);
    }

    public function update(Book $book, Request $request){
        $request->validate([
            'title'=>'required|min:3|max:20',
            'author'=>'required',
            'description'=>'required'
        ]);

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description
        ]);

        return redirect('/library');
    }

}