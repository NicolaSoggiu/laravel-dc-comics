@extends('layouts.base')

@section('contents')

<div class="pt-3">

<img src="{{ $comic->thumb }}" alt="">
<h1 class="pt-5">{{ $comic->title }}</h1>
<p>{{ $comic->description }}</p>
<h5>Price : {{ $comic->price }}</h5>
<h5>Series : {{ $comic->series }}</h5>
<h5>Type : {{ $comic->type }}</h5>
<h5>Sale Date : {{ $comic->sale_date }}</h5>

<button class="btn btn-primary my-4">
    <a class="text-light text-decoration-none" href="http://127.0.0.1:8000/comics">Back to catalogue</a>
</button>

 @endsection