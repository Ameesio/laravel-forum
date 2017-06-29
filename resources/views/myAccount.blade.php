@extends('layouts.app')

@section('titleLocation')
    My Posts
@endsection

@section('content')
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75); background-color: whitesmoke; padding-top: 10px;">
                    <span style="width: 100%; text-align: center; float: right; font-size: 50px; border-bottom: 1px solid black;">My Posts</span>
                    @foreach($posts as $post)
                        <div id="post{{ $post->id }}" style="margin-bottom: 50px; height: auto; padding-bottom: 10px; width: 100%;">
                                <a href="{{ route('deletePost', ['postId' => $post->id]) }}"><i class="fa fa-trash fa-2x" aria-hidden="true" style="color: red; cursor: pointer; float: right;"></i></a>
                            <h1 class="postTitle" style="font-size: 25px; color: steelblue;">{{ $post->title }}
                                <span style="font-size: 15px; color:red; font-weight: bold;">{{ $post->section }}</span>
                            </h1>
                            <div class="postContentHolder" style="overflow: hidden; text-overflow: ellipsis; height: 50px; width: auto;">
                                {!! $post->content !!}
                            </div>
                            <h3 class="postAuthor">{{ $post->user->name }}</h3>
                            <h5 class="postDate">{{ $post->created_at }}</h5>
                            <a class="btn btn-success" id="goTo{{ $post->id }}" href="{{ route('showPost', ['postId' => $post->id]) }}" style="float: right;= margin-top: 40px; width: 100%;">Read More</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
@endsection