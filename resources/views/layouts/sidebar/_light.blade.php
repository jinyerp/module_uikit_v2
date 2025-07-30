@extends('jiny-uikit::layouts.sidebar.app')

@section('layout')
    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
    <!--
      This example requires updating your template:

      ```
      <html class="h-full bg-white">
      <body class="h-full">
      ```
    -->
    <x-ui::sidebar-menu theme="light">

    </x-ui::sidebar-menu>


    @yield('main')
@endsection
