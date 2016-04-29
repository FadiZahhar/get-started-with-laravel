<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Application</title>

    </head>
    <body>

        <h2>Laravel Application</h2>

        <hr>

        <a href="#">Home</a> |
        <a href="#">Contact</a> |
        <a href="#">About</a> |
        Welcome back {!! $name !!}!

        <hr>

        @yield('content')

    </body>
</html>
