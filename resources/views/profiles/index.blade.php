@extends('layouts.app')

@section('content')
<div class="container">
  Name: {{ Auth::user()->name }}
  <br>
  Username: {{ Auth::user()->username }}
  <br>
  Email: {{ Auth::user()->email }}
  <hr>
  Profile
  <br>
  Title: {{ $user->profile->title }}
  <br>
  Description: {{ $user->profile->description ?? "Not Available" }}
</div>
@endsection