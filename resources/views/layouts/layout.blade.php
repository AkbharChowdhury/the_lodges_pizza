<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}   @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/style.css">

{{--    @vite(['resources/css/app.scss', 'resources/js/app.js'])--}}
</head>
<body class="font-sans antialiased">
    @yield('content')
<footer>
    copyright {{ config('app.name') }}
</footer>

</body>
</html>

