<!-- footer -->
<footer class="bg-white pt-16 pb-12 border-t border-gray-100">
    <div class="container grid grid-cols-1 ">
        <div class="col-span-1 space-y-4">
            <img src="{{ asset('assets/logo/logo-angel-ts.PNG') }}" alt="logo" class="w-full lg:w-2/12 rounded-xl">
            {{-- <div class="text-2xl font-bold text-indio-oscuro">Mexicoin</div> --}}
            {{-- <div class="mr-2"><p class="text-gray-500"></p></div> --}}
        </div>

        <div class="col-span-2 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="grid grid-cols-2 gap-4 md:gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Productos</h3>
                    <div class="mt-4 space-y-4">
                        <a href="{{ route('main') }}" class="text-base text-gray-500 hover:text-gray-900 block">Inicio</a>
                        <a href="{{ route('store') }}" class="text-base text-gray-500 hover:text-gray-900 block">Tienda</a>
                        <a href="{{ route('dashboard') }}" class="text-base text-gray-500 hover:text-gray-900 block">Cuenta</a>
                        <a href="{{ route('collections-gold') }}" class="text-base text-gray-500 hover:text-gray-900 block">Oro</a>
                        <a href="{{ route('collections-silver') }}" class="text-base text-gray-500 hover:text-gray-900 block">Plata</a>
                        <a href="{{ route('collections-numis') }}" class="text-base text-gray-500 hover:text-gray-900 block">Numismática</a>
                        <a href="{{ route('collections-bucks') }}" class="text-base text-gray-500 hover:text-gray-900 block">Billetes</a>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Soporte</h3>
                    <div class="mt-4 space-y-4">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Contáctanos</a>
                        <!-- <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Documentation</a> -->
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Guías de cuidado</a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Pagos y envíos</a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-2 lg:gap-4 mt-4 md:mt-0">
                {{-- <div>
                    <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Información</h3>
                    <div class="mt-4 space-y-4">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Oro</a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Plata</a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Valores de bolsa</a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Productos de colección</a>
                    </div>
                </div> --}}

                <div>
                    <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Acerca de</h3>
                    <div class="mt-4 space-y-4">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Transferencias</a>
                        <a target="_blank" rel="noopener noreferrer" href="https://www.paypal.com/mx/home" class="text-base text-gray-500 hover:text-gray-900 block">PayPal</a>
                        <a target="_blank" rel="noopener noreferrer" href="https://www.mercadopago.com.mx/" class="text-base text-gray-500 hover:text-gray-900 block">Mercadopago</a>
                        <a target="_blank" rel="noopener noreferrer" href="https://www.clip.mx/" class="text-base text-gray-500 hover:text-gray-900 block">Clip</a>
                    </div>
                </div>

                @include('comps.index-feats')
            </div>
        </div>
    </div>
</footer>

@include('comps.wp-float')
<!-- ./footer -->

<!-- copyright -->
<div class="bg-gray-800 py-4">
    <div class="container-row flex flex-col md:flex-row items-center justify-between py-2 px-4">
        <p class="text-white">Mexicoin &copy; - Todos los derechos reservados</p>
        <p class="text-white">Hecho con dedicación por CSTLABS</p>
        <p class="text-white">Guadalajara, MX</p>
        <div>
            <img src="{{ asset('assets/methods.png') }}" alt="methods" class="h-5">
        </div>
    </div>
</div>