@extends('layouts.base')

@section('contents')


<h1 class="text-center text-danger p-3">Comics :</h1>

<a class="btn btn-primary my-3" href="{{ route("comics.create") }}">New</a>

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Sale date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($comics as $comic)
        <tr>
            <th scope="row">{{ $comic->title }}</th>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route("comics.show", ["comic" => $comic->id]) }}">View</a>
                <a class="btn btn-warning" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>

  <button class="btn btn-primary my-4">
    <a class="text-light text-decoration-none" href="{{ route("home")}}">Back to Home</a>
</button>

  @endsection