<x-guest-layout>

    <section class="bg-white py-16">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-indio-oscuro mb-6 text-center">Finalizar Compra</h2>
            <p class="text-indio-gris text-center mb-10">Completa tu información y revisa tu pedido.</p>
    
            <!-- Resumen del pedido -->
            <div class="bg-white shadow-md rounded-xl border border-gray-200 mb-10">
                <h3 class="text-xl font-semibold bg-indio-oscuro text-white px-6 py-4 rounded-t-xl">Resumen del pedido</h3>
                <div class="p-6 space-y-4">
                    <!-- Simulando productos del carrito -->
                    @php
                        $carrito = [
                            ['nombre' => 'Libertad Plata 1 onza', 'cantidad' => 2, 'precio' => 750],
                            ['nombre' => 'Hidalgo (10 pesos Oro)', 'cantidad' => 1, 'precio' => 9500],
                        ];
                        $total = 0;
                    @endphp
    
                    @foreach ($carrito as $item)
                        @php $subtotal = $item['cantidad'] * $item['precio']; $total += $subtotal; @endphp
                        <div class="flex justify-between border-b pb-2">
                            <div>
                                <p class="text-indio-oscuro font-semibold">{{ $item['nombre'] }}</p>
                                <p class="text-sm text-indio-gris">Cantidad: {{ $item['cantidad'] }}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-indio-gris">Precio: ${{ number_format($item['precio'], 2) }}</p>
                                <p class="text-indio-verde font-semibold">Subtotal: ${{ number_format($subtotal, 2) }}</p>
                            </div>
                        </div>
                    @endforeach
    
                    <div class="flex justify-between pt-4 border-t font-bold text-lg text-indio-oscuro">
                        <span>Total:</span>
                        <span>${{ number_format($total, 2) }}</span>
                    </div>
                </div>
            </div>
    
            <!-- Formulario de envío -->
            <form class="bg-gray-50 p-6 rounded-xl shadow space-y-6">
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-indio-oscuro text-sm font-medium mb-1">Nombre completo</label>
                        <input type="text" class="w-full border border-gray-300 rounded p-2" required>
                    </div>
                    <div>
                        <label class="block text-indio-oscuro text-sm font-medium mb-1">Correo electrónico</label>
                        <input type="email" class="w-full border border-gray-300 rounded p-2" required>
                    </div>
                </div>
                <div>
                    <label class="block text-indio-oscuro text-sm font-medium mb-1">Dirección de entrega</label>
                    <input type="text" class="w-full border border-gray-300 rounded p-2" required>
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-indio-oscuro text-sm font-medium mb-1">Ciudad</label>
                        <input type="text" class="w-full border border-gray-300 rounded p-2" required>
                    </div>
                    <div>
                        <label class="block text-indio-oscuro text-sm font-medium mb-1">Código Postal</label>
                        <input type="text" class="w-full border border-gray-300 rounded p-2" required>
                    </div>
                </div>
    
                <button type="submit" class="bg-indio-verde text-white px-6 py-3 rounded font-semibold hover:bg-green-700 transition w-full">Confirmar Pedido</button>
            </form>
        </div>
    </section>
    

</x-guest-layout>