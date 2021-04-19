@extends('layouts.app')

@section('content')
<div class="back-btn">
  <a class="btn" href="/posts">Go Back</a>
</div>
<h1>{{$post->title}}</h1>
<small>Written on : {{$post->created_at}}</small>
<hr>
<p>{{$post->body}}</p>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Edit</a>

{!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method' => 'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}

{!!Form::close()!!}
@endsection
