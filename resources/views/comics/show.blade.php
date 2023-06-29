@extends('layouts.base')

@section('contents')


<h1>{{ $comic->title }}</h1>
<p>{{ $comic->description }}</p>
<img src="{{ $comic->thumb }}" alt="">
<p>{{ $comic->price }}</p>
<h4>{{ $comic->series }}</h4>
<h4>{{ $comic->sale_date }}</h4>
<h4>{{ $comic->type }}</h4>


@endsection