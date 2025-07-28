<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Precios de Metales - BBVA</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        @keyframes marquee {
          0%   { transform: translateX(100%); }
          100% { transform: translateX(-100%); }
        }
        .animate-marquee {
          display: inline-block;
          min-width: 100%;
          animation: marquee 20s linear infinite;
        }

        .titulo-principal {
    color: #1C3144;
}

.texto-secundario {
    color: #596F62;
}

.precio {
    color: #7EA16B;
    font-weight: bold;
}

.btn-verde {
    background-color: #7EA16B;
    color: white;
    border-radius: 8px;
    padding: 0.5rem 1rem;
}

.btn-verde:hover {
    background-color: #6c905d;
}

.card {
    border: 1px solid #596F62;
    background-color: #F9F9F9;
    padding: 1rem;
    border-radius: 1rem;
}

        </style>
</head>
<body class="bg-gray-100 text-gray-800">

<!-- Barra superior fija con precios divididos por metal -->
<div class="bg-yellow-50 border-b border-yellow-200 sticky top-0 z-50 shadow-sm">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-3 text-sm text-yellow-900 font-medium max-w-5xl mx-auto">

        @foreach ($precios as $moneda)
            <div class="flex items-center justify-center bg-yellow-100 border border-yellow-300 rounded-xl py-2 px-4 shadow-sm space-x-3">
                @if($moneda['nombre'] === 'Oro')
                    <!-- Ícono de oro -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2 17h20v2H2zm3.33-6L2 15h20l-3.33-4zM9 5l-3 4h12l-3-4z"/>
                    </svg>
                @elseif($moneda['nombre'] === 'Plata')
                    <!-- Ícono de plata -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2L2 7l10 5 10-5-10-5zm0 7.5L2 15l10 5 10-5-10-5z"/>
                    </svg>
                @endif

                <div class="flex flex-col">
                    <span class="uppercase font-semibold">{{ $moneda['nombre'] }}</span>
                    <div>
                        <span class="text-green-700">Compra {{ $moneda['compra'] }}</span> |
                        <span class="text-red-700">Venta {{ $moneda['venta'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>


    <!-- Header -->
    <header class="bg-yellow-600 text-white p-4 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Casa de Metales</h1>
            <nav>
                <a href="#precios" class="mr-4 hover:underline">Precios</a>
                <a href="#promociones" class="mr-4 hover:underline">Promociones</a>
                <a href="#proceso" class="mr-4 hover:underline">Proceso de Venta</a>
                <a href="#contacto" class="hover:underline">Contacto</a>
            </nav>
        </div>
    </header>

    <!-- Precios -->
    <section id="precios" class="container mx-auto py-12 px-4">
        <h2 class="text-2xl font-bold mb-6">Precios en vivo desde BBVA</h2>
        <p class="mb-4 text-sm text-gray-600">Última actualización: {{ $fecha }}</p>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($precios as $moneda)
                <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                    <h3 class="text-lg font-bold mb-2">{{ $moneda['nombre'] }} Libertad</h3>
                    <p><strong>Compra:</strong> {{ $moneda['compra'] }}</p>
                    <p><strong>Venta:</strong> {{ $moneda['venta'] }}</p>
                    <img src="https://www.elindio.com.mx/images/libertad_{{ strtolower($moneda['nombre']) }}.jpg"
                         alt="Imagen {{ $moneda['nombre'] }}" class="mt-4 rounded w-full object-cover h-40">
                </div>
            @endforeach
        </div>
    </section>

    <!-- Promociones -->
    <section id="promociones" class="bg-white py-12 px-4">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-6">Promociones</h2>
            <ul class="list-disc ml-6 text-lg space-y-2">
                <li>Precios especiales para ventas mayores a 10 piezas.</li>
                <li>Bonificaciones en envíos para compras grandes.</li>
                <li>Promociones semanales en monedas específicas.</li>
            </ul>
        </div>
    </section>

    <!-- Proceso de Venta -->
    <section id="proceso" class="bg-gray-200 py-12 px-4">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-6">¿Cómo vender tus monedas?</h2>
            <ol class="list-decimal ml-6 space-y-3 text-lg">
                <li>Contáctanos para fijar el precio.</li>
                <li>Envía tus monedas aseguradas según nuestras instrucciones.</li>
                <li>Recibe el pago una vez verificadas.</li>
            </ol>
        </div>
    </section>

    <!-- Contacto y Sucursales -->
    <section id="contacto" class="bg-white py-12 px-4">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-6">Contacto y Sucursales</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="font-semibold">Monterrey</h3>
                    <p>Av. Ejemplo 123, Col. Centro</p>
                    <p>Tel: 81-1234-5678</p>
                </div>
                <div>
                    <h3 class="font-semibold">CDMX</h3>
                    <p>Insurgentes 456, Col. Roma</p>
                    <p>Tel: 55-9876-5432</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-yellow-600 text-white text-center p-4">
        © {{ date('Y') }} Casa de Metales. Todos los derechos reservados.
    </footer>
</body>
</html>
