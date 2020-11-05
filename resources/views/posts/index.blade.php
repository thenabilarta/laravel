@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/posts" method="post">
    @csrf
    <textarea name="tweet" id="tweet" cols="60" rows="10" placeholder="Insert your tweet here..."
      class="form-control"></textarea>
    <button type="submit" class="btn btn-primary my-3">Tweet</button>

    @error('tweet')
    <strong>{{ $message }}</strong>
    @enderror

  </form>

  @foreach( $post as $p )
  <div>
    <h3>{{ $p->user->username }}</h3>
    <p>{{ $p->tweet }}</p>
    <hr>
  </div>
  @endforeach

</div>
@endsection