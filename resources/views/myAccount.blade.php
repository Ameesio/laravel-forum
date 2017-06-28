@extends('layouts.app')

@section('titleLocation')
    My Account
@endsection

@section('content')
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75); background-color: whitesmoke; padding-top: 10px;">
                    @foreach($posts as $post)
                        <div id="post{{ $post->id }}" style="border-bottom: 1px solid black; margin-bottom: 20px; height: 170px; padding-bottom: 10px;">
                            <h1 class="postTitle" style="font-size: 25px">{{ $post->title }} <span style="font-size: 15px; color:greenyellow; font-weight: bold;">{{ $post->section }}</span></h1>
                            <div class="postContentHolder" style="overflow: hidden; text-overflow: ellipsis; height: 50px; width: auto;">
                                {!! $post->content !!}
                            </div>
                            <button class="btn btn-primary" id="goTo{{ $post->id }}" style="float: right; margin-top: 40px;">Read More</button>
                            <h3 class="postAuthor">{{ $post->author }}</h3>
                            <h5 class="postDate">{{ $post->created_at }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
@endsection