@extends('layout')

@section('content')
  <h1>Articles</h1>
  <hr>

  @foreach ($articles as $article)
<!--     <article>
      <h2>
        <a href="article/{{ $article->id }}">{{ $article->title }}</a>
      </h2>
      <div class="body">{{ $article->body }}</div>
    </article> -->

<!--     <article>
      <h2>
        <a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a>
      </h2>
      <div class="body">{{ $article->body }}</div>
    </article> -->

    <article>
      <h2>
        <a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a>
      </h2>
      <div class="row">
        {{-- <span class="body col-lg-4">{{ $article->body }}</span> --}}
        <span class="published_at col-lg-2">{{ $article->published_at }}</span>
        <a class="col-lg-2" href="{{ action('ArticlesController@edit', $article->id) }}">Edit</a>
      </div>
    </article>
    <hr/>
  @endforeach
@stop