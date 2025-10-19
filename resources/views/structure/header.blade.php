<!-- Header responsivo con navegación y carrito -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="text-2xl font-bold text-indio-oscuro">Mexicoin</div>

            <!-- Botón hamburguesa (mobile) -->
            <button id="toggleMenu" class="lg:hidden text-indio-oscuro focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Navegación -->
            <nav id="menu" class="hidden lg:flex lg:items-center lg:space-x-6 absolute lg:static top-16 left-0 w-full md:w-auto bg-white lg:bg-transparent shadow-md md:shadow-none z-40">
                <a href="{{ route('main') }}" class="block px-6 py-2 text-indio-gris hover:text-indio-verde transition">Inicio</a>
                <a href="{{ route('store') }}" class="block px-6 py-2 text-indio-gris hover:text-indio-verde transition">Tienda</a>
                <a href="{{ route('dashboard') }}" class="block px-6 py-2 text-indio-gris hover:text-indio-verde transition">Cuenta</a>
                <a href="{{ route('collections-gold') }}" class="block px-6 py-2 text-indio-gris hover:text-indio-verde transition">Oro</a>
                <a href="{{ route('collections-silver') }}" class="block px-6 py-2 text-indio-gris hover:text-indio-verde transition">Plata</a>
                <a href="{{ route('collections-numis') }}" class="block px-6 py-2 text-indio-gris hover:text-indio-verde transition">Numismática</a>
                <a href="{{ route('collections-bucks') }}" class="block px-6 py-2 text-indio-gris hover:text-indio-verde transition">Billetes</a>
            </nav>

            <!-- Carrito -->
            <button class="relative" id="openCart">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 text-indio-oscuro group-hover:text-indio-verde transition"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.293 2.293a1 1 0 00.707 1.707h12m-6 4a1 1 0 100-2 1 1 0 000 2zm-6 0a1 1 0 100-2 1 1 0 000 2z"/>
                </svg>
                <span class="absolute top-0 right-0 text-xs bg-red-600 text-white rounded-full px-1.5 -mt-1 -mr-2">
                    @if (Session::has('cart_count'))
                        {{ Session::get('cart_count') }}
                    @else
                        {{ 0 }}
                    @endif
                </span>
            </button>
        </div>
    </div>
</header>