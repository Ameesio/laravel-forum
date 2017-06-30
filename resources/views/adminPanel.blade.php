@extends('layouts.app')

@section('titleLocation')
    Adminpanel
@endsection

@section('content')
    @if(Auth::user()->permission == 'admin')
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75); background-color: whitesmoke;">
                @foreach($posts as $post)
                    <div id="post{{$post->id}}">
                        <span id="postTitle">{{ $post->title }}</span>
                        <div id="postContent" style="height: 20px; overflow: hidden">
                            <span>{!! $post->content !!}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-6" style="box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75); background-color: whitesmoke;">
                @foreach($users as $user)
                    <div id="user{{$user->id}}">
                        <span id="userId">{{ $user->id }}</span>
                        <span id="userName">{{ $user->name }}</span>
                        <span id="userPermission">{{ $user->permission }}</span>
                        <span id="userJoinedAt" style="float: right;">{{ $user->created_at }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </body>
    @else
        <span>You are not an admin.</span>
    @endif
@endsection