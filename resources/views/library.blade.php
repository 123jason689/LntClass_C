@extends('layout.main')

@section('container')
<h1>Library</h1>
<br>

@foreach($books as $book)
<a href="/show-book/{{ $book->id }}"> <h3>Book Title: {{ $book->title }}</h3></a>
<h4>Author: {{ $book->author }}</h4>
<p>Description: {{ $book['description'] }}</p>
<br>
<br>
@endforeach

@endsection