<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'JinyPHP')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @yield('header')

    @yield('main')

    @yield('footer')

    @stack('scripts')
</body>

</html>
