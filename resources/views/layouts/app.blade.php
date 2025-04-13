<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hexlet Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body>
        <div>
            <div>
                @yield('content')
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
