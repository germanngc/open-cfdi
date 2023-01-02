<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $pageDescription ?? env('APP_NAME', 'Open CFDI') }}" />

        <title>{{ $pageTitle ?? 'Open CFDI' }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @vite('resources/css/app.css')
        @livewireStyles 
    </head>
    <body class="antialiased">
        <div class="container mx-auto">
            <div class="h-10"></div>
            <h1 class="font-bold my-10 text-lg">{{ $pageTitle ?? 'Open CFDI' }}</h1>

            {{ $slot }}
        </div>

        @livewireScripts 
    </body>
</html>
