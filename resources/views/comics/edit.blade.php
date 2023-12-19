@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <h1>PAGE EDIT</h1>
    <form action="{{ route('comics.update', $comic) }}" method="POST" >

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $comic->title }}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description">{{ $comic->description }}</textarea>
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Image (url)</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Url image" value="{{ $comic->thumb}}">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{ $comic->price }}">
      </div>
     
      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Series" value="{{ $comic->series }}">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date</label>
        <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Sale date" value="{{ $comic->sale_date }}">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="{{ $comic->type }}">
      </div>

      <div class="">
        <input type="submit" class="btn btn-primary" value="Edit">
      </div>

    </form>
  </div>
</section>

@endsection