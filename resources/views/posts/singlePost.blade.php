@extends('layouts.app')

@section('content')
  <a href="/posts">
    <i class="fas fa-angle-left fa-2x"></i>
  </a>
  <div class="container">
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <p>{{$post->body}}</p>
  </div>
    
@endsection