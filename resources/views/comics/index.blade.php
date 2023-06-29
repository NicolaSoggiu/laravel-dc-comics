@extends('layouts.base')

@section('contents')


<h1>Fumetti</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
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
                <a class="btn btn-primary" href="">View</a>
                <a class="btn btn-warning" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>

  @endsection