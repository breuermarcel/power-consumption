<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" translate="no" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Power Consumption</title>

    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/images/logo.ico') }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div id="app">
    @include('power-consumption::components.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    @include('power-consumption::components.footer')
</div>
</body>
</html>
