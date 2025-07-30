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
    <div class="min-h-full">
        <x-ui::navbar theme="blue" menuAlign="right">

        </x-ui::navbar>

        <div class="py-10">
            @yield('layout')
        </div>

        @include('jiny-uikit::layouts.stacked.footer')

    </div>

    @stack('scripts')
</body>

</html>
