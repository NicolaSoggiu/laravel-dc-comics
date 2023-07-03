@extends('layouts.base')

@section('contents')


<h1 class="text-center text-danger p-3">Comics :</h1>

@if (session("delete_success"))
  @php $comic = session("delete_success") @endphp
  <div class="alert alert-danger">
    The comic "{{$comic->title}}" has been deleted
    <form action="{{ route("comics.restore", ["comic" => $comic]) }}" method="POST" class="d-inline-block">
      @csrf
      <button class="btn btn-warning">Restore</button>
    </form>
  </div>
@endif

@if (session("restore_success"))
  @php $comic = session("restore_success") @endphp
  <div class="alert alert-success">
    The comic "{{$comic->title}}" has been restored
  </div>
@endif


<a class="btn btn-primary my-3" href="{{ route("comics.create") }}">New</a>
<a class="btn btn-primary my-3" href="{{ route("comics.trashed") }}">Basket</a>

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
                <a class="btn btn-warning" href="{{ route("comics.edit", ["comic" => $comic->id]) }}">Edit</a>
                <form 
                class="d-inline-block" 
                action="{{ route("comics.destroy", ["comic" => $comic->id]) }}" 
                method="POST">
                  @csrf
                  @method("delete")
                  <button class="btn btn-danger">Delete</button>
                </form>  
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>

  <button class="btn btn-primary my-4">
    <a class="text-light text-decoration-none" href="{{ route("home")}}">Back to Home</a>
</button>

  @endsection