<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>@yield('title')</title>
    @livewireStyles
</head>
<body class="antialiased bg-gray-100" x-data="{ modal: false}">
    <x-navbar/>

    <div class="my-10 mb-20">
        @yield('content')
    </div>

    <x-modal/>

    <x-footer/>

@livewireScripts
</body>
</html>
