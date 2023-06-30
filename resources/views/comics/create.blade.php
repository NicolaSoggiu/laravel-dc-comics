@extends("layouts.base")

@section('contents')

<h2 class="text-center">New Comic : </h2>

<form class="p-5" method="POST" action="{{ route("comics.store") }}">
  @csrf

    <div class="mb-3">
        <label for="thumb" class="form-label">Img</label>
        <input type="text" class="form-control" id="thumb" name="thumb">
      </div>

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series">
      </div>
    
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date">
      </div>

      <button class="btn btn-primary">Save</button>
</form>

@endsection