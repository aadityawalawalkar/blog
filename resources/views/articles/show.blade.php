@extends('layout')

@section('content')
  <div class="container-fluid">
    <h1>{{ $article->title }}</h1>
    <article>
      {{ $article->body }}
      <br>{{ $article->published_at }}
    </article>
  </div>
@stop