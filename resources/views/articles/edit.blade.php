@extends('layout')

@section('content')

  {{-- {{ var_dump($errors) }} --}}

  @if ($errors->any())

    <ul class="alert alert-danger">

      @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

      @endforeach

    </ul>

  @endif

  <div class="container-fluid">
    <h1>Edit: {{ $article->title }} </h1>
    <hr/>

    {{-- {!! Form::model($article, ['method' => 'PATCH', 'url' => 'articles/' . $article->id]) !!} --}}
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
      <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::text('body', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('published_at', 'Publish Date:') !!}
        {{-- {!! Form::input('date', 'published_at', Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control']) !!} --}}
        {!! Form::input('date', 'published_at', $article->published_at, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
      </div>

    {!! Form::close() !!}
  </div>

@stop
