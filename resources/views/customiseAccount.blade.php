@extends('layouts.app')

@section('titleLocation')
    Customise Account
@endsection

@section('content')
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75); background-color: whitesmoke;">
                <span style="width: 100%; text-align: center; float: right; font-size: 40px; border-bottom: 1px solid black;">Your Account Settings</span>
                <br>
                <br>
                <span style="float: right; text-align: center; width: 100%; font-size: 50px">{{ Auth::user()->name }}   @if(Auth::user()->permission == 'admin')
                        <span style="color: red; font-size: 20px;">Admin</span>
                    @elseif(Auth::user()->permission == 'moderator')
                        <span style="color: yellow; font-size: 20px;">Moderator</span>
                    @else
                        <span style="color: green; font-size: 20px;">Guest</span>
                    @endif
                </span>
            </div>
        </div>
    </div>
    </body>
@endsection