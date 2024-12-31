<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
         <!-- css personalizado -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-800" style="background-image: url('/images/emma.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
            <header class="overflow-hidden shadow-sm transparent-bg">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                    <!-- Contenido de la cabecera alineado a la izquierda -->
                    <div>
                        {{ $header }}
                    </div>

                    <!-- Botón de retroceso alineado a la derecha -->
                    <button onclick="history.back()" class="flex items-center px-4 py-2 text-white border border-white rounded hover:bg-white hover:text-gray-800 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                        Volver
                    </button>
                </div>
            </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
                
            </main>
        </div>
    </body>
</html>
