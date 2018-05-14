@extends('layout')

@section('content')
  <h1>About Us</h1>

  <p>{{ $name }}: {{ $description }}</p>

  @if (count($technologies))
    <h3>Technologies I work:</h3>
    <ul>
      @foreach ($technologies as $technology)
        <li>{{ $technology }}</li>
      @endforeach
    </ul>
  @endif
@stop

@section('footer')
  <script type="text/javascript">alert('About Us Footer Section!');</script>
@stop