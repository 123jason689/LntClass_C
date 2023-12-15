<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function createBook(){
        return view('createBook', [
            'title' => 'Create Book'
        ]);
    }

    public function storeBook(Request $request){
        $request->validate([
            'title'=>'required|min:3|max:20',
            'author'=>'required',
            'description'=>'required'
        ]);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description
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
        return view('showBook', [
            'title' => 'Show Book',
            'book' => $book
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