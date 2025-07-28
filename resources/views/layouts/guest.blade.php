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
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>

        @include('structure.header')
        @include('store.cart-side')

        <!-- Fondo oscurecido cuando el carrito está abierto -->
        <div id="cartOverlay" class="fixed inset-0 bg-black bg-opacity-30 z-40 hidden"></div>


        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts

        <script>
            const openCart = document.getElementById('openCart');
            const closeCart = document.getElementById('closeCart');
            const cartPanel = document.getElementById('cartPanel');
            const cartOverlay = document.getElementById('cartOverlay');
        
            openCart.addEventListener('click', () => {
                cartPanel.classList.remove('translate-x-full');
                cartOverlay.classList.remove('hidden');
            });
        
            closeCart.addEventListener('click', () => {
                cartPanel.classList.add('translate-x-full');
                cartOverlay.classList.add('hidden');
            });
        
            cartOverlay.addEventListener('click', () => {
                cartPanel.classList.add('translate-x-full');
                cartOverlay.classList.add('hidden');
            });
        </script>

        <script>
            const toggleMenu = document.getElementById('toggleMenu');
            const menu = document.getElementById('menu');
        
            toggleMenu.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        </script>
        <!-- Include pushed scripts -->
        @stack('scripts')
        @livewireScripts
        @include('structure.scripts')
    </body>
</html>
