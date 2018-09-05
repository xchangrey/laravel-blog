@extends('layouts.app')

@section('content')
        <section class="jumbotron text-center">
            <h1 class="jumbotron-heading">{{$title}}</h1>
            <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse facilis ad nam voluptatibus inventore beatae labore in fugiat nesciunt, eaque ullam reprehenderit fugit, libero eveniet atque praesentium neque odio minima!</p>
            @guest
                <p>
                  <a href="{{ route('login') }}"  class="btn btn-primary"> {{ __('Login') }} </a>
                  <a href="{{ route('register') }}" class="btn btn-success">{{ __('Register') }}</a>
                </p>
            @endguest
        </section>
@endsection
