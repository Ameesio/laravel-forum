@extends('layouts.app')

@section('titleLocation')
        Post van {{ $post->user->name }}
@endsection

@section('content')
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75); background-color: whitesmoke;">
                <div class="post" style="margin-top: 10px;">
                    <span class="postTitle" style="color: steelblue; font-size: 30px;">{{ $post->title }} <span style="color: blue; font-size: 20px;">{{ $post->section }}</span></span>
                    <br>
                    <br>
                    <br>
                    <span class="postContent">{!!  $post->content !!}</span>
                    <br>
                    <h3 class="postAuthor"><span style="color: steelblue">{{ $post->model }}</span> {{ $post->created_at }}</h3>

                    <a href="{{ route('showUser', ['userId' => $post->user->id]) }}" class="postAuthor" style="font-size: 30px; background-color: lightgrey; padding: 3px; border-radius: 5px; cursor: pointer;">{{ $post->user->name }}
                        <span class="postPermission" style="font-size: 20px;">
                            @if($post->user->permission == 'guest')
                                <span style="color: green;">Guest</span>
                            @elseif($post->user->permission == 'admin')
                                <span style="color: red;">Admin</span>
                            @endif
                        </span>
                    </a>
                </div>
                <br><br>
                <div class="comments" style="width: 100%; border-top: 1px solid black; padding-top: 10px;">
                    <form method="post" action="{{ route('postComment', ['postId' => $post->id]) }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="content">Comments:</label>
                            <textarea class="form-control" name="content" id="content" style="width: 100%; resize: none;"></textarea>
                            <button type="submit" class="btn btn-success" style="margin-top: 10px; width: 100%;">Comment  </button>
                        </div>
                        <div class="form-group">
                            <input name="post_id" class="form-control" type="text" value="{{ $post->id }}" style="display: none;" disabled>
                        </div>
                    </form>
                    @foreach($post->comment as $comment)
                        <div id="comment{{$comment->id}}" style="border: 1px solid black; border-radius: 5px; background-color: #FFF; margin-bottom: 20px;">
                            <span style="font-size: 20px; font-weight: bold; border-bottom: 1px dashed black; width: 100%; float: right; padding-left: 5px;">{{ $comment->user->name }}</span>
                            <div style="margin: 5px;">{!! $comment->content !!}</div>
                            <div class="controls" style="width: 100%; border-top: 1px dashed black; padding-left: 5px; padding-top: 5px;">
                                {{--<a href="{{ route('likeComment', ['postId' => $post->id, 'commentId' => $comment->id]) }}"><i class="fa fa-thumbs-up fa-2x" aria-hidden="true" style="margin-right: 5px; color: #449D44"></i></a>--}}
                                <a onclick="$('#like').text('1')"><i class="fa fa-thumbs-up fa-2x" aria-hidden="true" style="margin-right: 5px; color: #449D44"></i></a>
                                <span style="font-size: 20px;" id="like">0</span>
                                {{--<a href="{{ route('flagComment', ['postId' => $post->id, 'commentId' => $comment->id]) }}"><i class="fa fa-flag fa-2x" aria-hidden="true" style="color: #449D44"></i></a>--}}
                                <a onclick="$('#flag').text('1')"><i class="fa fa-flag fa-2x" aria-hidden="true" style="color: #449D44"></i></a>
                                <span style="font-size: 20px;" id="flag">0</span>
                                <span style="font-size: 20px;">{{ $comment->flags }}</span>
                                <span style="float: right; margin: 5px;">{{ $comment->created_at }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection