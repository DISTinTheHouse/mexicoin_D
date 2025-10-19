@push('styles')
        <style>
            .carousel {margin: 0 auto;padding: 20px 0;overflow: hidden; }
            .carousel { > * { flex: 0 0 100%; } }
            .card { &:nth-child(2) { background: #707070; } &:nth-child(1) { background: #ddbc00; } }
            .group { display: flex; gap: 20px; /* Agrega padding a la derecha para crear un espacio entre la última y la primera tarjeta. */ padding-right: 20px; }
            .group { will-change: transform; /* Deberíamos ser amables con el navegador: hazle saber qué vamos a animar. */ animation: scrolling 10s linear infinite; }
            .animate-marquee { animation: marquee 20s linear infinite; display: flex; white-space: nowrap; }
            @keyframes scrolling { 0% { transform: translateX(0); } 100% { transform: translateX(-100%); } }
        </style>
        <style>
            @keyframes marquee { 0% { transform: translateX(100%); } 100% { transform: translateX(-100%); } }
            
        </style>
    @endpush

    {{-- Live precios S --}}
    <div class="flex md:hidden carousel basic w-full mx-0">    
        <div class="group">
            @foreach ($precios as $moneda)
                @if ($moneda['nombre'] === 'Oro')
                    <div class="card h-fit w-full p-2 text-sm justify-center px-4 rounded-xl text-black text-center">
                        {{ $moneda['nombre'] }} <br>
                        Compra: {{ $moneda['compra'] }} <br>
                        Venta: {{ $moneda['venta'] }}
                    </div>
                @else
                    <div class="card h-fit w-full p-2 text-sm justify-center px-4 rounded-xl text-white text-center">
                        {{ $moneda['nombre'] }} <br>
                        Compra: {{ $moneda['compra'] }} <br>
                        Venta: {{ $moneda['venta'] }}
                    </div>
                @endif
            @endforeach
        </div>
        <div aria-hidden class="group">
            @foreach ($precios as $moneda)
                @if ($moneda['nombre'] === 'Oro')
                    <div class="card h-fit w-full p-2 text-sm justify-center px-4 rounded-xl text-black text-center">
                        {{ $moneda['nombre'] }} <br>
                        Compra: {{ $moneda['compra'] }} <br>
                        Venta: {{ $moneda['venta'] }}
                    </div>
                @else
                    <div class="card h-fit w-full p-2 text-sm justify-center px-4 rounded-xl text-white text-center">
                        {{ $moneda['nombre'] }} <br>
                        Compra: {{ $moneda['compra'] }} <br>
                        Venta: {{ $moneda['venta'] }}
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Live precios M-L-XL --}}
    <div class="hidden md:flex carousel basic w-full mx-0">    
        <div class="group">
            @foreach ($precios as $moneda)
                @if ($moneda['nombre'] === 'Oro')
                    <div class="card h-fit w-10/12 p-2 text-xl xl:text-2xl justify-center px-4 rounded-xl text-black text-center">
                        {{ $moneda['nombre'] }} -  Compra: {{ $moneda['compra'] }} <br class="lg:hidden">
                        Venta: {{ $moneda['venta'] }}
                    </div>
                @else
                    <div class="card h-fit w-10/12 p-2 text-xl xl:text-2xl justify-center px-4 rounded-xl text-white text-center">
                        {{ $moneda['nombre'] }} -  Compra: {{ $moneda['compra'] }} <br class="lg:hidden">
                        Venta: {{ $moneda['venta'] }}
                    </div>
                @endif
            @endforeach
        </div>
        <div aria-hidden class="group">
            @foreach ($precios as $moneda)
                @if ($moneda['nombre'] === 'Oro')
                    <div class="card h-fit w-10/12 p-2 text-xl xl:text-2xl justify-center px-4 rounded-xl text-black text-center">
                        {{ $moneda['nombre'] }} -  Compra: {{ $moneda['compra'] }} <br class="lg:hidden">
                        Venta: {{ $moneda['venta'] }}
                    </div>
                @else
                    <div class="card h-fit w-10/12 p-2 text-xl xl:text-2xl justify-center px-4 rounded-xl text-white text-center">
                        {{ $moneda['nombre'] }} -  Compra: {{ $moneda['compra'] }} <br class="lg:hidden">
                        Venta: {{ $moneda['venta'] }}
                    </div>
                @endif
            @endforeach
        </div>
    </div>