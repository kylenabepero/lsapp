@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach ($posts as $post)
                <li class="list-group-item">
                    <a href="/lsapp/public/posts/{{$post->id}}"> <h3> {{$post->title}}</h3> </a> 
                    <small><br> written on {{$post->created_at}}</small>
                </li>
                
            
        @endforeach
        {{ $posts->links() }}
    @else
        <p>no posts count</p>
    @endif
@endsection
 