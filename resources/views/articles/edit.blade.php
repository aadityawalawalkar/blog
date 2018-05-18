@extends('layout')

@section('content')

  {{-- {{ var_dump($errors) }} --}}

  @include('errors.list')

  <div class="container-fluid">
    <h1>Edit: {{ $article->title }} </h1>
    <hr/>

    {{-- {!! Form::model($article, ['method' => 'PATCH', 'url' => 'articles/' . $article->id]) !!} --}}
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
{{--       <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::text('body', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('published_at', 'Publish Date:') !!}
        {!! Form::input('date', 'published_at', $article->published_at, ['class' => 'form-control']) !!}
      </div> --}}

      @include('articles._form', [ 'defaultDate' => $article->published_at, 'submitButtonTxt' => 'Update'])

    {!! Form::close() !!}
  </div>

@stop
