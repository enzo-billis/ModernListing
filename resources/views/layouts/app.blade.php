<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('img/logopng.png')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Liste de course</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <style>
        body{
            background-color: #3abca7;
        }
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
            <br>
            @yield('form')
        </main>
    </div>

    <!-- Scripts -->

</body>
</html>
