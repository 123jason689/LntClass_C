@extends('layout.main')



@section('container')

<h1>Book Detail</h1>
<h3>Book Title: {{ $book->title }}</h3>
<h4>Author: {{ $book->author }}</h4>
<h4>Genre: {{ $book->genre->name }}</h4>
<p>Description: {{ $book['description'] }}</p>

<form action="/delete-book/{{ $book->id }}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit" class="btn btn-danger mt-4" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
</form>

<a href="/edit-book/{{ $book->id }}"><button type="submit" class="btn btn-warning mt-3">Edit</button></a>

<br>
<br>

<h2>Bought By:</h2>
<ul>
    @foreach($book->customers as $customer)
        <li>{{ $customer->name }}</li>
    @endforeach
</ul>
    
@endsection