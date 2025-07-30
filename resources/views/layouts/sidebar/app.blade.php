<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'JinyPHP')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->

    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</head>

<body>

    @php
        $path = module_dir('jiny-uikit');
    @endphp
    <x-ui::sidebar-menu theme="dark"
        menuPath="{{ $path }}/resources/menus/sidebar-with-dropdown.json">

    </x-ui::sidebar-menu>

    @yield('layout')

    @stack('scripts')
</body>

</html>
