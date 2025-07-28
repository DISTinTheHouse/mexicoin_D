<x-guest-layout>

    <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
    <div class="w-9/12 mt-12 mx-auto overflow-hidden sm:px-6 lg:px-8">

        <h2 class="text-3xl font-bold text-indio-oscuro text-center mb-10">Nuestros productos</h2>

        <div class="-mx-px border-l border-gray-300 grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-4">
      @php
      $imagenesProductos = [
          'Bicentenario de la independencia' => 'https://www.banxico.org.mx/multimedia/rev_1kg_oro.png',
          'Calendario azteca (1Kg)' => 'https://www.banxico.org.mx/multimedia/CalAzteca1kg_reverso.png',
          'Libertad plata (1Kg)' => 'https://www.banxico.org.mx/multimedia/1kg_espejo_anv_peq.jpg',
          'Calendario (50 pesos Oro)' => 'https://www.banxico.org.mx/multimedia/50p_rev_2012_06_14.jpg',
          'Hidalgo (10 pesos Oro)' => 'https://www.banxico.org.mx/multimedia/10p_rev_2012_06_14.png',
          '1/2 Hidalgo (5 pesos Oro)' => 'https://www.banxico.org.mx/multimedia/5p_rev_2012_06_14.png',
          '1/4 Hidalgo (2.5 pesos Oro)' => 'https://www.banxico.org.mx/multimedia/2_5p_rev_2012_06_14.png',
          '1/5 Hidalgo (2 pesos Oro)' => 'https://www.banxico.org.mx/multimedia/2p_rev_2012_06_14.png',
          'Libertad Oro 1 onza' => 'https://www.banxico.org.mx/multimedia/LibOro1Anv.png',
          'Libertad Oro 1/2 onza' => 'https://www.banxico.org.mx/multimedia/LibOro12Anv.png',
          'Libertad Oro 1/4 onza' => 'https://www.banxico.org.mx/multimedia/LibOro12Anv.png',
          'Libertad Oro 1/10 onza' => 'https://www.banxico.org.mx/multimedia/LibOro12Anv.png',
          'Libertad Oro 1/20 onza' => 'https://www.banxico.org.mx/multimedia/LibOro12Anv.png',
          'Libertad Plata 5 onzas' => 'https://www.banxico.org.mx/multimedia/anvLibPlata5oz.png',
          'Libertad Plata 2 onzas' => 'https://www.banxico.org.mx/multimedia/anvLibPlata5oz.png',
          'Libertad Plata 1 onza' => 'https://www.banxico.org.mx/multimedia/anvLibPlata5oz.png',
          'Libertad Plata 1/2 onza' => 'https://www.banxico.org.mx/multimedia/anv_lib2.png',
          'Libertad Plata 1/4 onza' => 'https://www.banxico.org.mx/multimedia/anv_lib2.png',
          'Libertad Plata 1/10 onza' => 'https://www.banxico.org.mx/multimedia/anv_lib2.png',
          'Libertad Plata 1/20 onza' => 'https://www.banxico.org.mx/multimedia/anv_lib2.png',
      ];
  @endphp

  @foreach ([
      ['nombre' => 'Bicentenario de la independencia', 'categoria' => 'especiales', 'precio' => rand(82600, 140000)],
      ['nombre' => 'Calendario azteca (1Kg)', 'categoria' => 'especiales', 'precio' => rand(82600, 140000)],
      ['nombre' => 'Libertad plata (1Kg)', 'categoria' => 'plata', 'precio' => rand(45000, 82600)],
      ['nombre' => 'Calendario (50 pesos Oro)', 'categoria' => 'oro', 'precio' => rand(82600, 140000)],
      ['nombre' => 'Hidalgo (10 pesos Oro)', 'categoria' => 'oro', 'precio' => rand(82600, 100000)],
      ['nombre' => '1/2 Hidalgo (5 pesos Oro)', 'categoria' => 'oro', 'precio' => rand(40000, 82600)],
      ['nombre' => '1/4 Hidalgo (2.5 pesos Oro)', 'categoria' => 'oro', 'precio' => rand(40000, 82600)],
      ['nombre' => '1/5 Hidalgo (2 pesos Oro)', 'categoria' => 'oro', 'precio' => rand(40000, 82600)],
      ['nombre' => 'Libertad Oro 1 onza', 'categoria' => 'oro', 'precio' => 82600],
      ['nombre' => 'Libertad Oro 1/2 onza', 'categoria' => 'oro', 'precio' => 62600],
      ['nombre' => 'Libertad Oro 1/4 onza', 'categoria' => 'oro', 'precio' => 30000],
      ['nombre' => 'Libertad Oro 1/10 onza', 'categoria' => 'oro', 'precio' => 22800],
      ['nombre' => 'Libertad Oro 1/20 onza', 'categoria' => 'oro', 'precio' => 13000],
      ['nombre' => 'Libertad Plata 5 onzas', 'categoria' => 'plata', 'precio' => 6400],
      ['nombre' => 'Libertad Plata 2 onzas', 'categoria' => 'plata', 'precio' => 1900],
      ['nombre' => 'Libertad Plata 1 onza', 'categoria' => 'plata', 'precio' => 1100],
      ['nombre' => 'Libertad Plata 1/2 onza', 'categoria' => 'plata', 'precio' => 1060],
      ['nombre' => 'Libertad Plata 1/4 onza', 'categoria' => 'plata', 'precio' => 990],
      ['nombre' => 'Libertad Plata 1/10 onza', 'categoria' => 'plata', 'precio' => 950],
      ['nombre' => 'Libertad Plata 1/20 onza', 'categoria' => 'plata', 'precio' => 890],
  ] as $producto)
      
        <div class="group relative p-4 border-r border-b border-gray-300 sm:p-6">
            <div class="rounded-lg overflow-hidden bg-gray-300 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                <img src="{{$imagenesProductos[$producto['nombre']]}}" alt="TODO" class="w-full h-full object-center object-cover">
            </div>
            <div class="pt-10 pb-4 text-center">
                <h3 class="text-lg font-medium text-gray-900">
                    <a href="#" class="w-full">
                        {{ $producto['nombre'] }}
                    </a>
                </h3>
            <div class="mt-3 flex flex-col items-center">
              <p class="sr-only">5 out of 5 stars</p>
              <div class="flex items-center">
                <!-- Heroicon name: solid/star -->
                <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
  
                <!-- Heroicon name: solid/star -->
                <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
  
                <!-- Heroicon name: solid/star -->
                <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
  
                <!-- Heroicon name: solid/star -->
                <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
  
                <!-- Heroicon name: solid/star -->
                <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
              <p class="mt-1 text-sm text-gray-500">{{ rand(13, 130) }} opiniones</p>
            </div>
            <p class="text-lg font-medium text-green-800">${{ $producto['precio'] }}</p>
            <div class="mt-4 w-full flex">
                <a href="" class="mr-auto inline-block bg-indio-oscuro text-white px-4 py-2 rounded-md hover:bg-indio-gris focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Detalles</a>
                <a href="" class="ml-auto inline-block bg-indio-verde text-white px-4 py-2 rounded-md hover:bg-indio-gris focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Añadir al carrito</a>
            </div>
          </div>
        </div>
    @endforeach
  
</x-guest-layout>