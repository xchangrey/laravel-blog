@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>



                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->
                    <a href="/posts/create" class="btn btn-primary btn-sm my-4">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-success btn-sm float-right">Edit</a></td>
                                <td>  
                                    <form method="POST" action="/posts/{{$post->id}}">
                                        {{method_field('DELETE')}}
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" class="btn btn-danger btn-sm float-right" value="DELETE">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                      <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
