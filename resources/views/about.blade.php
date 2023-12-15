@extends('layout.main')


@section('container')
<h1>About Page</h1>
<br>
<h4>Name: {{ $name }}</h4>
<p>Email: {{ $email }}</p>
<p>Address: {{ $address }}</p>
@endsection