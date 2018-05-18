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
  {!! Form::input('date', 'published_at', $defaultDate, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::submit($submitButtonTxt, ['class' => 'btn btn-primary form-control']) !!}
</div>