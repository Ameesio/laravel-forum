@extends('layouts.app')

@section('titleLocation')
    {{ $user->name }}'s Profile
@endsection

@section('content')
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75); background-color: whitesmoke;">
                <span style="font-size: 30px;">{{ $user->name }}</span>
                @if($user->permission == 'guest')
                    <span style="font-size: 20px; color: green">Guest</span>
                @elseif($user->permission == 'admin')
                    <span style="font-size: 20px; color: red">Admin</span>
                @endif
            </div>
        </div>
    </div>
@endsection