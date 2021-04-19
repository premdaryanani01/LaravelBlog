@extends('layouts.app')

@section('content')

<h1>Posts</h1>

  @if(count($posts)>1)
    @foreach($posts as $post)
      <div class="card p-3">
        <h4>
        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
        </h4>
        <small>Written on : {{$post->created_at}}</small>
      </div>
    @endforeach
  @else



  @endif

@endsection