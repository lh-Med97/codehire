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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/animations.js'])
    </head>
    <body class="font-sans antialiased" x-data="animations">
        <div class="min-h-screen bg-gray-100" 
             x-show="show" 
             x-transition:enter="page-enter-active"
             x-transition:enter-start="page-enter">
            
            <!-- Navigation -->
            <nav class="animate-slide-in-left">
                @include('layouts.navigation')
            </nav>

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow animate-fade-in delay-100">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="animate-fade-in delay-200">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="animate-slide-in-left delay-300">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <p class="text-center text-gray-500">
                        {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
                    </p>
                </div>
            </footer>
        </div>
    </body>
</html>
