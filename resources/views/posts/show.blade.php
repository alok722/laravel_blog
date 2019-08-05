@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1 style="text-align: center; text-decoration: underline;">{{$post->title}}</h1><br>
    <img class="img-responsive" style="height: 100vh; width: auto; margin-left: auto; margin-right: auto;display: block;" src="/storage/cover_image/{{$post->cover_image}}">
    <br><br>
    <div>
        <h4>{!!$post->body!!}</h4>
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b> </small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection