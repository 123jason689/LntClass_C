@extends('layout.main')

@section('container')
<h1>Genres</h1>
<br>

@foreach($genres as $genre)
<a href="/show-genre/{{ $genre->id }}" class="mt-4"> <h3>-  {{ $genre->name }}</h3></a>

@endforeach

@endsection