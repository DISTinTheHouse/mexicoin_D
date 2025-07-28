<x-guest-layout>
    <!-- Sección de Contacto -->
<section id="contacto" class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-indio-oscuro text-center mb-6">Contáctanos</h2>
        <p class="text-center text-indio-gris mb-10">Estamos disponibles para atenderte en nuestras sucursales o por teléfono. También puedes enviarnos un mensaje utilizando el siguiente formulario.</p>

        <!-- Información de contacto -->
        <div class="grid md:grid-cols-2 gap-12 mb-12">
            <!-- Sucursal Monterrey -->
            <div class="bg-gray-100 p-6 rounded-xl shadow">
                <h3 class="text-xl font-semibold text-indio-oscuro mb-4">Sucursal Monterrey</h3>
                <p class="text-indio-gris">Av. Principal 123, Monterrey, NL</p>
                <p class="text-indio-gris">Tel: (81) 1234 5678</p>
                <p class="text-indio-gris">Email: contacto@empresa.com</p>
            </div>

            <!-- Sucursal CDMX -->
            <div class="bg-gray-100 p-6 rounded-xl shadow">
                <h3 class="text-xl font-semibold text-indio-oscuro mb-4">Sucursal CDMX</h3>
                <p class="text-indio-gris">Calle Reforma 456, CDMX</p>
                <p class="text-indio-gris">Tel: (55) 9876 5432</p>
                <p class="text-indio-gris">Email: contacto@empresa.com</p>
            </div>
        </div>

        <!-- Formulario de contacto -->
        <div class="bg-gray-100 p-8 rounded-xl shadow">
            <h3 class="text-xl font-semibold text-indio-oscuro mb-6">Envíanos un mensaje</h3>
            <form action="" method="POST">
                @csrf
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Nombre -->
                    <div class="mb-4">
                        <label for="nombre" class="block text-indio-oscuro font-medium mb-2">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="w-full p-3 border border-gray-300 rounded-md" required>
                    </div>

                    <!-- Correo electrónico -->
                    <div class="mb-4">
                        <label for="email" class="block text-indio-oscuro font-medium mb-2">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md" required>
                    </div>
                </div>

                <!-- Mensaje -->
                <div class="mb-4">
                    <label for="mensaje" class="block text-indio-oscuro font-medium mb-2">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="6" class="w-full p-3 border border-gray-300 rounded-md" required></textarea>
                </div>

                <!-- Botón de envío -->
                <div class="text-center">
                    <button type="submit" class="bg-indio-verde text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition">Enviar Mensaje</button>
                </div>
            </form>
        </div>
    </div>
</section>
</x-guest-layout>