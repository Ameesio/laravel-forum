@extends('layouts.app')

@section('titleLocation')
    Create Post
@endsection

@section('content')
    <head>
        <script>
            tinymce.init({
                selector: '#postContent',
                toolbar: false
            });
        </script>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75); background-color: whitesmoke; padding-top: 10px;">
                <form method="post" action="{{ route('newPost') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="section">Section:</label>
                        <select name="section" id="section" class="form-control">
                            <option value="kleineVragen">Kleine Vragen</option>
                            <option value="groteVragen">Grote Vragen</option>
                            <option value="onderdelen">Onderdelen</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gilera">Gilera Model:</label>
                        <select name="gilera" id="gilera" class="form-control">
                            <option value="gsm">GSM</option>
                            <option value="zulu">Zulu</option>
                            <option value="citta">Citta</option>
                            <option value="runner">Runner</option>
                            <option value="overige">Overige</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="content" name="content" class="form-control" style="resize: none; height: 300px;"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="form-control btn btn-success" style="margin-bottom: 10px;">Create</button>
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection