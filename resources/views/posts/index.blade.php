@extends('layouts.app')

@section('content')

  <h1>Posts</h1>

  @if(count($posts) > 0)
    @foreach($posts as $post)
      <div class="card">
        <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
          <small>Written on n{{$post->created_at}} by {{$post->user->name}}</small>
        </div>
      </div>
    @endforeach
    {{$posts->links()}}
  @else
    <p>No posts found.</p>
  @endif

@endsection