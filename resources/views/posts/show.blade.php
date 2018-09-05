@extends('layouts.app')

@section('content')
  <a class="btn btn-light btn-sm mb-5rem" href="/posts">Go Back</a>
  <div>
    <h1>{{$post->title}}</h1>
    <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
    <br>
    <p>{!!$post->body!!}</p>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
  </div>
  @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-success btn-sm float-left">Edit</a>

        <form method="POST" action="/posts/{{$post->id}}">
          {{method_field('DELETE')}}
          @csrf
          <input type="hidden" name="_method" value="DELETE">
          <input type="submit" class="btn btn-danger btn-sm float-right" value="DELETE">
        </form>
      @endif
  @endif
@endsection