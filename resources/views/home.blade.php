<!-- resources/views/home.blade.php -->

<x-guest-layout>

<!-- Barra superior de precios -->
<div class="bg-indio-oscuro text-white shadow-md">
    <div class="grid grid-cols-1 sm:grid-cols-2 divide-x divide-white">
        @foreach ($precios as $moneda)
            <div class="overflow-hidden">
                <div class="flex items-center animate-marquee space-x-6 py-2 px-4 min-w-max">
                    <div class="flex items-center space-x-2 bg-white text-indio-oscuro border border-indio-verde rounded-full px-4 py-1 shadow-sm">
                        @if($moneda['nombre'] === 'Oro')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M2 17h20v2H2zm3.33-6L2 15h20l-3.33-4zM9 5l-3 4h12l-3-4z"/>
                            </svg>
                        @elseif($moneda['nombre'] === 'Plata')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L2 7l10 5 10-5-10-5zm0 7.5L2 15l10 5 10-5-10-5z"/>
                            </svg>
                        @endif

                        <span class="uppercase font-semibold">{{ $moneda['nombre'] }}</span>
                        <span class="text-indio-verde">Compra {{ $moneda['compra'] }}</span>
                        <span>|</span>
                        <span class="text-red-600">Venta {{ $moneda['venta'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Hero Section -->
<section class="bg-white text-center py-16">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-4xl sm:text-5xl font-bold text-indio-oscuro mb-6">Compra y Venta de Monedas</h1>
        <p class="text-lg text-indio-gris mb-8">Precios en tiempo real directo desde BBVA. Transparencia, confianza y seguridad en tus inversiones.</p>
        <a href="#contacto" class="bg-indio-verde text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition">Contáctanos</a>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-indio-oscuro text-center mb-10">Buscar por Tipo de Producto</h2>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['nombre' => 'Oro', 'imagen' => 'https://www.banxico.org.mx/multimedia/rev_1kg_oro.png', 'filtro' => 'oro'],
                ['nombre' => 'Plata', 'imagen' => 'https://www.banxico.org.mx/multimedia/anvLibPlata5oz.png', 'filtro' => 'plata'],
                ['nombre' => 'Colecciones', 'imagen' => 'https://www.banxico.org.mx/multimedia/rev_1kg_oro.png', 'filtro' => 'especiales'],
                ['nombre' => 'Billetes', 'imagen' => 'https://m.media-amazon.com/images/I/71xTuJez-EL.jpg', 'filtro' => 'billetes'],
            ] as $item)
                <div class="cursor-pointer bg-gray-100 hover:bg-gray-200 rounded-xl overflow-hidden shadow hover:shadow-lg transition" onclick="filtrarProductos('{{ $item['filtro'] }}')">
                    <img src="{{ $item['imagen'] }}" alt="{{ $item['nombre'] }}" class="h-56s w-full object-cover">
                    <div class="text-center py-4">
                        <h3 class="text-lg font-semibold text-indio-oscuro">{{ $item['nombre'] }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{--  --}}
{{--  --}}

@php
            $destacados = [
                ['nombre' => 'Libertad Plata 1 onza', 'imagen' => 'https://www.banxico.org.mx/multimedia/rev_1kg_oro.png', 'precio' => 850.00,],
                ['nombre' => 'Calendario Azteca', 'imagen' => 'https://www.banxico.org.mx/multimedia/CalAzteca1kg_reverso.png','precio' => 850.00,],
                ['nombre' => 'Hidalgo Oro 10 pesos', 'imagen' => 'https://www.banxico.org.mx/multimedia/10p_rev_2012_06_14.png','precio' => 850.00,],
                ['nombre' => 'Libertad Plata 1 onza', 'imagen' => 'https://www.banxico.org.mx/multimedia/anvLibPlata5oz.png', 'precio' => 850.00,],
                ['nombre' => 'Calendario Azteca', 'imagen' => 'https://www.banxico.org.mx/multimedia/CalAzteca1kg_reverso.png','precio' => 850.00,],
                ['nombre' => 'Hidalgo Oro 10 pesos', 'imagen' => 'https://www.banxico.org.mx/multimedia/10p_rev_2012_06_14.png','precio' => 850.00,],
                // más productos...
            ];
        @endphp

<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-indio-oscuro mb-8 text-center">Productos Destacados</h2>

        <div class="relative">
            <!-- Botones -->
            <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white shadow p-2 rounded-full hover:bg-gray-200">
                ⬅️
            </button>
            <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white shadow p-2 rounded-full hover:bg-gray-200">
                ➡️
            </button>

            <!-- Carrusel -->
            <div id="carouselContainer" class="overflow-hidden">
                <div id="carouselTrack" class="flex transition-transform duration-500 ease-in-out space-x-4">
                    @foreach ($destacados as $producto)
                        <div class="min-w-[80%] sm:min-w-[50%] lg:min-w-[33.3333%] bg-white rounded-xl shadow hover:shadow-lg transition">
                            <img src="{{ $producto['imagen'] }}" alt="{{ $producto['nombre'] }}" class="w-full h-56s object-cover rounded-t-xl">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-indio-oscuro">{{ $producto['nombre'] }}</h3>
                                <p class="text-indio-verde font-bold text-md">${{ $producto['precio'] }}</p>
                                <button class="mt-3 w-full bg-indio-verde text-white py-2 rounded hover:bg-green-700 transition">Agregar al carrito</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@php
            $destacados_oro = [
                ['nombre' => 'Centenario', 'imagen' => 'https://www.banxico.org.mx/multimedia/rev_1kg_oro.png', 'precio' => 850.00,],
                ['nombre' => 'Azteca', 'imagen' => 'https://www.banxico.org.mx/multimedia/rev_1kg_oro.png','precio' => 850.00,],
                ['nombre' => 'Hidalgo 10 pesos', 'imagen' => 'https://www.banxico.org.mx/multimedia/rev_1kg_oro.png','precio' => 850.00,],
                ['nombre' => 'Hidalgo 5 pesos', 'imagen' => 'https://www.banxico.org.mx/multimedia/rev_1kg_oro.png', 'precio' => 850.00,],
                ['nombre' => 'Hidalgo 2.5 pesos', 'imagen' => 'https://www.banxico.org.mx/multimedia/rev_1kg_oro.png','precio' => 850.00,],
                ['nombre' => 'Hidalgo 2 pesos', 'imagen' => 'https://www.banxico.org.mx/multimedia/rev_1kg_oro.png','precio' => 850.00,],
                // más productos...
            ];
        @endphp

<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-indio-oscuro mb-8 text-center">Familia Centenario oro</h2>

        <div class="relative">
            <!-- Botones -->
            <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white shadow p-2 rounded-full hover:bg-gray-200">
                ⬅️
            </button>
            <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white shadow p-2 rounded-full hover:bg-gray-200">
                ➡️
            </button>

            <!-- Carrusel -->
            <div id="carouselContainer" class="overflow-hidden">
                <div id="carouselTrack" class="flex transition-transform duration-500 ease-in-out space-x-4">
                    @foreach ($destacados_oro as $producto)
                        <div class="min-w-[80%] sm:min-w-[50%] lg:min-w-[33.3333%] bg-white rounded-xl shadow hover:shadow-lg transition">
                            <img src="{{ $producto['imagen'] }}" alt="{{ $producto['nombre'] }}" class="w-full h-56s object-cover rounded-t-xl">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-indio-oscuro">{{ $producto['nombre'] }}</h3>
                                <p class="text-indio-verde font-bold text-md">${{ $producto['precio'] }}</p>
                                <button class="mt-3 w-full bg-indio-verde text-white py-2 rounded hover:bg-green-700 transition">Agregar al carrito</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@php
            $destacados_lib = [
                ['nombre' => 'Libertad 1 onza', 'imagen' => 'https://www.banxico.org.mx/multimedia/LibOro1Anv.png', 'precio' => 850.00,],
                ['nombre' => 'Libertad 1/2 onza', 'imagen' => 'https://www.banxico.org.mx/multimedia/LibOro1Anv.png','precio' => 850.00,],
                ['nombre' => 'Libertad 1/4 onza', 'imagen' => 'https://www.banxico.org.mx/multimedia/LibOro1Anv.png','precio' => 850.00,],
                ['nombre' => 'Libertad 1/10 onza', 'imagen' => 'https://www.banxico.org.mx/multimedia/LibOro1Anv.png', 'precio' => 850.00,],
                ['nombre' => 'Libertad 1/20 onza', 'imagen' => 'https://www.banxico.org.mx/multimedia/LibOro1Anv.png','precio' => 850.00,],
                // más productos...
            ];
        @endphp

<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-indio-oscuro mb-8 text-center">Familia Libertad Oro</h2>

        <div class="relative">
            <!-- Botones -->
            <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white shadow p-2 rounded-full hover:bg-gray-200">
                ⬅️
            </button>
            <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white shadow p-2 rounded-full hover:bg-gray-200">
                ➡️
            </button>

            <!-- Carrusel -->
            <div id="carouselContainer" class="overflow-hidden">
                <div id="carouselTrack" class="flex transition-transform duration-500 ease-in-out space-x-4">
                    @foreach ($destacados_lib as $producto)
                        <div class="min-w-[80%] sm:min-w-[50%] lg:min-w-[33.3333%] bg-white rounded-xl shadow hover:shadow-lg transition">
                            <img src="{{ $producto['imagen'] }}" alt="{{ $producto['nombre'] }}" class="w-full h-56s object-cover rounded-t-xl">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-indio-oscuro">{{ $producto['nombre'] }}</h3>
                                <p class="text-indio-verde font-bold text-md">${{ $producto['precio'] }}</p>
                                <button class="mt-3 w-full bg-indio-verde text-white py-2 rounded hover:bg-green-700 transition">Agregar al carrito</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{--  --}}
{{--  --}}

<!-- Sección de productos con filtro -->
<section class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-indio-oscuro text-center mb-10">Nuestros Productos</h2>

        <!-- Filtro -->
        <div class="flex justify-center mb-8 space-x-4">
            <button class="filtro-producto px-4 py-2 rounded bg-indio-verde text-white hover:bg-green-700" data-categoria="todos">Todos</button>
            <button class="filtro-producto px-4 py-2 rounded bg-indio-verde text-white hover:bg-green-700" data-categoria="oro">Oro</button>
            <button class="filtro-producto px-4 py-2 rounded bg-indio-verde text-white hover:bg-green-700" data-categoria="plata">Plata</button>
            <button class="filtro-producto px-4 py-2 rounded bg-indio-verde text-white hover:bg-green-700" data-categoria="especiales">Ediciones Especiales</button>
        </div>
        
        <div id="grid-productos" class="grid md:grid-cols-3 gap-8">

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
                ['nombre' => 'Bicentenario de la independencia', 'categoria' => 'especiales'],
                ['nombre' => 'Calendario azteca (1Kg)', 'categoria' => 'especiales'],
                ['nombre' => 'Libertad plata (1Kg)', 'categoria' => 'plata'],
                ['nombre' => 'Calendario (50 pesos Oro)', 'categoria' => 'oro'],
                ['nombre' => 'Hidalgo (10 pesos Oro)', 'categoria' => 'oro'],
                ['nombre' => '1/2 Hidalgo (5 pesos Oro)', 'categoria' => 'oro'],
                ['nombre' => '1/4 Hidalgo (2.5 pesos Oro)', 'categoria' => 'oro'],
                ['nombre' => '1/5 Hidalgo (2 pesos Oro)', 'categoria' => 'oro'],
                ['nombre' => 'Libertad Oro 1 onza', 'categoria' => 'oro'],
                ['nombre' => 'Libertad Oro 1/2 onza', 'categoria' => 'oro'],
                ['nombre' => 'Libertad Oro 1/4 onza', 'categoria' => 'oro'],
                ['nombre' => 'Libertad Oro 1/10 onza', 'categoria' => 'oro'],
                ['nombre' => 'Libertad Oro 1/20 onza', 'categoria' => 'oro'],
                ['nombre' => 'Libertad Plata 5 onzas', 'categoria' => 'plata'],
                ['nombre' => 'Libertad Plata 2 onzas', 'categoria' => 'plata'],
                ['nombre' => 'Libertad Plata 1 onza', 'categoria' => 'plata'],
                ['nombre' => 'Libertad Plata 1/2 onza', 'categoria' => 'plata'],
                ['nombre' => 'Libertad Plata 1/4 onza', 'categoria' => 'plata'],
                ['nombre' => 'Libertad Plata 1/10 onza', 'categoria' => 'plata'],
                ['nombre' => 'Libertad Plata 1/20 onza', 'categoria' => 'plata'],
            ] as $producto)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition producto" data-categoria="{{ $producto['categoria'] }}">
                    <img src="{{ $imagenesProductos[$producto['nombre']] ?? 'https://via.placeholder.com/400x300?text=Imagen+no+disponible' }}" alt="{{ $producto['nombre'] }}" class="w-full h-60s object-cover">

                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-indio-oscuro">{{ $producto['nombre'] }}</h3>
                        <p class="text-indio-gris text-sm">Consulta disponibilidad en sucursal.</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Sección de proceso de venta -->
<section class="bg-white py-12">
    <div class="max-w-5xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-indio-oscuro text-center mb-8">¿Cómo funciona?</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="text-4xl mb-4">1️⃣</div>
                <h3 class="text-xl font-semibold text-indio-oscuro">Consulta precios</h3>
                <p class="text-indio-gris mt-2">Actualizados minuto a minuto desde BBVA.</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-4">2️⃣</div>
                <h3 class="text-xl font-semibold text-indio-oscuro">Acude a sucursal</h3>
                <p class="text-indio-gris mt-2">Te esperamos en cualquiera de nuestras ubicaciones.</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-4">3️⃣</div>
                <h3 class="text-xl font-semibold text-indio-oscuro">Compra o vende</h3>
                <p class="text-indio-gris mt-2">Recibe tu pago o tu producto de forma segura.</p>
            </div>
        </div>
    </div>
</section>

<!-- Sección de contacto y sucursales -->
<section id="contacto" class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-indio-oscuro text-center mb-6">Contáctanos</h2>
        <p class="text-center text-indio-gris mb-10">Estamos disponibles para atenderte en nuestras sucursales o por teléfono.</p>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-100 p-6 rounded-xl shadow">
                <h3 class="text-xl font-semibold text-indio-oscuro">Sucursal Monterrey</h3>
                <p class="text-indio-gris">Av. Principal 123, Monterrey, NL</p>
                <p class="text-indio-gris">Tel: (81) 1234 5678</p>
            </div>
            <div class="bg-gray-100 p-6 rounded-xl shadow">
                <h3 class="text-xl font-semibold text-indio-oscuro">Sucursal CDMX</h3>
                <p class="text-indio-gris">Calle Reforma 456, CDMX</p>
                <p class="text-indio-gris">Tel: (55) 9876 5432</p>
            </div>
        </div>
    </div>
</section>
    
    @push('styles')
    <style>
    @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }
    .animate-marquee {
        animation: marquee 20s linear infinite;
        display: flex;
        white-space: nowrap;
    }
    </style>
    @endpush
    
    @push('scripts')
<script>
document.querySelectorAll('.filtro-producto').forEach(btn => {
    btn.addEventListener('click', () => {
        const categoria = btn.getAttribute('data-categoria');
        document.querySelectorAll('.producto').forEach(prod => {
            if (categoria === 'todos' || prod.dataset.categoria === categoria) {
                prod.classList.remove('hidden');
            } else {
                prod.classList.add('hidden');
            }
        });
    });
});

const track = document.getElementById('carouselTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 0;

    const updateCarousel = () => {
        const slideWidth = track.children[0].offsetWidth + 16; // 16px gap
        track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    };

    const nextSlide = () => {
        currentIndex = (currentIndex + 1) % track.children.length;
        updateCarousel();
    };

    const prevSlide = () => {
        currentIndex = (currentIndex - 1 + track.children.length) % track.children.length;
        updateCarousel();
    };

    nextBtn.addEventListener('click', () => {
        nextSlide();
        resetInterval();
    });

    prevBtn.addEventListener('click', () => {
        prevSlide();
        resetInterval();
    });

    window.addEventListener('resize', updateCarousel);

    let autoSlideInterval = setInterval(nextSlide, 4000);

    const resetInterval = () => {
        clearInterval(autoSlideInterval);
        autoSlideInterval = setInterval(nextSlide, 4000);
    };
</script>
@endpush

</x-guest-layout>
