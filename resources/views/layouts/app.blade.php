<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" style="height: 100%; width: 100%; padding: 0px; margin: 0px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A laravel Forum">
    <meta name="author" content="Mees Venema">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gilera Forum | @yield('titleLocation')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts -->
    <script src="https://unpkg.com/vue"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <style>
        html {
            font-family: 'Tahoma';
        }
    </style>
</head>
<body style="height: 100%; width: 100%; margin: 0px; padding: 0px;">
<div id="app" style=" margin: 0px; padding: 0px;">
    <nav class="navbar navbar-inverse navbar-static-top" style=" margin: 0px; padding: 0px;">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span>Gilera Forum | @yield('titleLocation')</span>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ route("kleineVragen") }}" style="color: purple">Kleine Vragen</a></li>
                    <li><a href="{{ route("groteVragen") }}" style="color: orangered">Grote Vragen</a></li>
                    <li><a href="{{ route("onderdelen") }}" style="color: yellow">Onderdelen</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: powderblue">
                            Gileras<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('modelPagina', ['modelNaam' => 'Zulu']) }}">Zulu</a>
                                <a href="{{ route('modelPagina', ['modelNaam' => 'GSM']) }}">GSM</a>
                                <a href="{{ route('modelPagina', ['modelNaam' => 'Runner']) }}">Runner</a>
                                <a href="{{ route('modelPagina', ['modelNaam' => 'Citta']) }}">Citta</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <ul class="nav navbar-nav navbar-right">
                    </ul>
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('myAccount') }}">My Posts</a>
                                </li>
                                <li>
                                    <a href="{{ route('createPost') }}">Create Post</a>
                                </li>
                                <li>
                                    <a href="{{ route('customiseAccount') }}">Customise Account</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
