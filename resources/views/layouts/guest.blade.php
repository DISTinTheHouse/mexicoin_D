<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/logo/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/logo/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/logo/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/logo/site.webmanifest') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        @stack('styles')
    </head>
    
    <body class="w-full">
        @include('structure.header')
        @include('store.cart-side')

        <!-- Fondo oscurecido cuando el carrito está abierto -->
        <div id="cartOverlay" class="fixed inset-0 bg-black/30 z-40 hidden"></div>


        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @include('structure.footer')
        
        <!-- Include pushed scripts -->
        @stack('scripts')

        @livewireScripts
        @include('structure.scripts')
    </body>
</html>
