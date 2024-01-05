@extends('layout.main')



@section('container')

<h1>Genre {{ $genre->name }}</h1>
@foreach($genre->books as $book)
    <br>
    <h2>Book Title: {{ $book->title }}</h2>
    <h3>Author: {{ $book->author }}</h3>

@endforeach

@endsection