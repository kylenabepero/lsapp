@extends('layouts.app')

@section('content')
    <a href="/lsapp/public/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit Post</a>
    {!!Form::open(['action'=>['App\Http\Controllers\PostController@destroy',$post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
    
    {!!Form::close()!!}

    @endsection
 
