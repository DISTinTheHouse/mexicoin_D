{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mexicoin') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
  </head>

  <body class="h-full bg-gray-100">

    @include('structure.header')
    @include('structure.cart')

    
  </body> 
</html> --}}
 

<x-app-layout>
    <div class="min-h-full">
      <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
      <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
                      
        @include('users.mob-nav')
        @include('users.desk-nav')
    
        <div class="lg:pl-64 flex flex-col flex-1">
          <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:border-none">
            @include('users.sidebar-btn')

            <div class="flex-1 px-4 flex justify-between sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
              {{-- @include('users.srch-bar') --}}
              @include('users.notif-drop')
            </div>
          </div>
      
          <main class="flex-1 pb-8">
            @include('users.prof-header')
    
            <div class="mt-8">
              @include('users.cards-prev')
    
              <h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">Compras recientes</h2>
    
              @include('users.recent-act-mob')
              @include('users.recent-act-desk')
            </div>
          </main>
        </div>
      </div>
  
      @livewireScripts
      @include('structure.scripts')
    </div>
</x-app-layout>