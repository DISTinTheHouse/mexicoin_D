<!-- Panel de carrito oculto -->
<div id="cartPanel" class="fixed right-0 top-0 h-full w-80 bg-white shadow-lg border-l z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
    <div class="flex justify-between items-center p-4 border-b">
        <h3 class="text-lg font-semibold text-indio-oscuro">Tu carrito</h3>
        <button id="closeCart" class="text-gray-500 hover:text-red-500">
            ✕
        </button>
    </div>
    <div class="p-4 space-y-4">
        <div class="p-4 space-y-4">
            <!-- Producto simulado 1 -->
            <div class="flex items-center space-x-4">
                <img src="https://www.banxico.org.mx/multimedia/anvLibPlata5oz.png" alt="Libertad Plata" class="w-16 h-16 object-cover rounded">
                <div class="flex-1">
                    <h4 class="text-sm font-semibold text-indio-oscuro">Libertad Plata 1oz</h4>
                    <p class="text-xs text-indio-gris">Cantidad: 1</p>
                </div>
                <span class="text-sm font-bold text-green-600">$850</span>
            </div>

            <!-- Producto simulado 2 -->
            <div class="flex items-center space-x-4">
                <img src="https://www.banxico.org.mx/multimedia/LibOro1Anv.png" alt="Libertad Oro" class="w-16 h-16 object-cover rounded">
                <div class="flex-1">
                    <h4 class="text-sm font-semibold text-indio-oscuro">Libertad Oro 1/4oz</h4>
                    <p class="text-xs text-indio-gris">Cantidad: 2</p>
                </div>
                <span class="text-sm font-bold text-green-600">$5,700</span>
            </div>

            <!-- Total -->
            <div class="border-t pt-4">
                <div class="flex justify-between text-indio-oscuro font-semibold">
                    <span>Total:</span>
                    <span>$6,550</span>
                </div>
                <a href="{{ route('checkout') }}" class="mt-4 block text-center w-full bg-indio-verde text-white py-2 rounded hover:bg-green-700 transition">Proceder al pago</a>

            </div>
        </div>  
    </div>
</div>

<!-- Fondo oscurecido cuando el carrito está abierto -->
<div id="cartOverlay" class="fixed inset-0 bg-black bg-opacity-30 z-40 hidden"></div>