<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet"  href="/css/styles.css">
        <title>{{ config('app.name', 'PERFIL') }}</title>

        <!-- Fonts -->



        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        

            <main>

                {{ $slot }}

            </main>
        </div>

    </body>
</html>

