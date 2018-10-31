@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
      <ul class="list-group">
        @foreach ($posts as $post)
          <li class="list-group-item">
            <a href="/posts/{{$post->id}}" class="btn btn-outline-info">
              <h3>{{$post->title}}</h3>
              <small>Written on {{$post->created_at}}</small>
            </a>
          </li>
        @endforeach
      </ul>
    @else
        <p>No Posts Found</p>
    @endif
    
    <a href="/posts/create">
      <i class="fas fa-plus-circle fa-3x floating"></i>
    </a>
@endsection