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
    <h1>Write a new article</h1>
    <hr/>

    {!! Form::open(['url' => 'articles/store']) !!}
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
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
      </div>

    {!! Form::close() !!}
  </div>

@stop
