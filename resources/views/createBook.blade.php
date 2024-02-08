@extends('layout.main')


@section('container')


<form action = "/store-book" method = "POST" enctype="multipart/form-data">
    @csrf
    <h1>Create A Book</h1>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Book Title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "title" value="{{ old('title') }}">
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Author</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "author" value="{{ old('author') }}">
      @error('author')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Genre</label>
      <select id="disabledSelect" class="form-select" name="genre_id">
          @foreach($genres as $genre)
            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
          @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Description</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "description" value="{{ old('description') }}">
      @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Book Cover</label>
        <input class="form-control" type="file" id="formFile" name="image" value="{{ old('image') }}">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
