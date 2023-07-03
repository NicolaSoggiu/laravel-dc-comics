@extends('layouts.base')

@section('contents')


<h1 class="text-center text-danger p-3">Comics deleted :</h1>

{{-- @dd($trashedComics); --}}
@if (session("delete_success"))
  @php $comic = session("delete_success") @endphp
  <div class="alert alert-danger">
    The comic "{{$comic->title}}" has been deleted
  </div>
@endif

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
        @foreach($trashedComics as $comic)
        <tr>
            <th scope="row">{{ $comic->title }}</th>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>
                <form 
                class="d-inline-block" 
                action="{{ route("comics.restore", ["comic" => $comic->id]) }}" 
                method="POST">
                  @csrf
                  <button class="btn btn-success">Restore</button>
                </form>
                <form 
                class="d-inline-block" 
                action="{{ route("comics.harddelete", ["comic" => $comic->id]) }}" 
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

  @endsection