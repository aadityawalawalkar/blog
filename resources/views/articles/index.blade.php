@extends('layout')

@section('content')
  <h1>Articles</h1>

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
      <div class="body">{{ $article->body }}</div>
      <div class="published_at">{{ $article->published_at }}</div>
    </article>
  @endforeach
@stop