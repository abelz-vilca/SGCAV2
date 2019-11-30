<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGCAV1</title>
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- Fonts -->
    <link href="{{asset('css/csslaravel.css')}}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #ffdd90;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            background-image: url("{{asset('imagenes/inicio.jpg')}}");
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            margin: 25px 100px 75px 100px;
            /* top margin is 25px right margin is 50px bottom margin is 75px left margin is 100px */
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: whitesmoke;
            background-color: darkslategray;
            padding: 0 50px;
            font-size: 25px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .a {
            color: hotpink;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Inicio</a>
            @else
            <a href="{{ route('login') }}">Ingresar</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Registrarse</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
        </div>
    </div>
</body>

</html>