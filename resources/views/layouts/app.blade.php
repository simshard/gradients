<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gradients') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/spectrum.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       @include('layouts.navbar2')
        <main class="py-4">
            @yield('content')
        </main>
    </div>



</body>
</html>
