@extends('layouts.app')

@section('titleLocation')
    Homepagina
@endsection

@section('content')
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75); background-color: whitesmoke;">
                    <div class="posts" style="">
                        <div id="post1" style="border-bottom: 1px solid black; margin-bottom: 20px; height: 170px; padding-bottom: 10px;">
                            <h1 class="postTitle" style="font-size: 25px">This is a title <span style="font-size: 15px; color:greenyellow; font-weight: bold;">Politics</span></h1>
                            <div class="postContentHolder" style="overflow: hidden; text-overflow: ellipsis; height: 50px; width: auto;">
                                <h2 class="postContent" style="font-size: 15px;">bla bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bla </h2>
                            </div>
                            <button class="btn btn-primary" style="float: right; margin-top: 40px;">Read More</button>
                            <h3 class="postName">Mees Venema</h3>
                            <h5 class="postDate">21-06-2017</h5>
                        </div>


                        <div id="post2" style="border-bottom: 1px solid black; margin-bottom: 20px; height: 170px; padding-bottom: 10px;">
                            <h1 class="postTitle" style="font-size: 25px">This is a title <span style="font-size: 15px; color:greenyellow; font-weight: bold;">Politics</span></h1>
                            <div class="postContentHolder" style="overflow: hidden; text-overflow: ellipsis; height: 50px; width: auto;">
                                <h2 class="postContent" style="font-size: 15px;">bla bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bl bla  bla  bla  bla  bla  bla </h2>
                            </div>
                            <h3 class="postName">Mees Venema</h3>
                            <h5 class="postDate">21-06-2017</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

