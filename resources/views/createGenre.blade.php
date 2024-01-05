@extends('layout.main')


@section('container')


<form action = "/store-genre" method = "POST">
    @csrf
    <h1>Create A Genre</h1>
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Genre Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "genre_name" value="{{ old('genre_name') }}">
      @error('genre_name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection