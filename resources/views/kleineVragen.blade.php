@extends('layouts.app')

@section('titleLocation')
    Kleine Vragen
@endsection

@section('content')
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75); background-color: whitesmoke;">
                <div class="posts" style="">
                    @foreach($posts as $post)
                        <div id="post{{ $post->id }}" style="margin-bottom: 50px; height: auto; padding-bottom: 10px; width: 100%;">
                            <h1 class="postTitle" style="font-size: 25px; color: steelblue;">{{ $post->title }}
                                <span style="font-size: 15px; color:purple; font-weight: bold;">Kleine Vragen</span>
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
    </div>
    </body>
@endsection

