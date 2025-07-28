<!DOCTYPE html>
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

    <div class="min-h-full">
      <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
      <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
                      
        @include('users.mob-nav')
        @include('users.desk-nav')

        <div class="lg:pl-64 flex flex-col flex-1">
          {{ var_dump($prices) }}

          @include('admin.prod-tb')
        </div>
      </div>
    </div>

    @include('admin.prod-add')
    @include('admin.prod-edit')

    @livewireScripts
    @include('structure.scripts')
  </body> 
</html>
 