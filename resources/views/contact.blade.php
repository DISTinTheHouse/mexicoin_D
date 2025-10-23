<x-guest-layout>
<section class="bg-white py-16 px-6 md:px-16">
    <div class="max-w-5xl mx-auto text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-[#1C3144] mb-4">Contáctanos</h1>
        <p class="text-gray-600 mb-10 max-w-2xl mx-auto">
            Si tienes dudas sobre tu pedido, colecciones o cualquier consulta relacionada con nuestras monedas y billetes,
            completa el siguiente formulario y te responderemos a la brevedad.
        </p>
    </div>

    <div class="max-w-3xl mx-auto bg-gray-50 rounded-2xl shadow-md p-8">
        @if (session('success'))
            <div class="bg-green-100 text-green-700 border border-green-300 rounded-lg p-4 mb-6">
                {{ session('success') }}
            </div>
        @endif

        <form action="" method="POST" class="space-y-6">
            @csrf
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-left font-semibold text-[#1C3144] mb-1">Nombre completo</label>
                    <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#7EA16B]" required>
                </div>
                <div>
                    <label for="email" class="block text-left font-semibold text-[#1C3144] mb-1">Correo electrónico</label>
                    <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#7EA16B]" required>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="phone" class="block text-left font-semibold text-[#1C3144] mb-1">Teléfono (opcional)</label>
                    <input type="text" name="phone" id="phone" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#7EA16B]">
                </div>
                <div>
                    <label for="subject" class="block text-left font-semibold text-[#1C3144] mb-1">Asunto</label>
                    <input type="text" name="subject" id="subject" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#7EA16B]" required>
                </div>
            </div>

            <div>
                <label for="message" class="block text-left font-semibold text-[#1C3144] mb-1">Mensaje</label>
                <textarea name="message" id="message" rows="5" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#7EA16B]" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-[#7EA16B] text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-[#596F62] transition">
                    Enviar mensaje
                </button>
            </div>
        </form>
    </div>

    {{-- Información adicional --}}
    <div class="max-w-4xl mx-auto mt-16 grid md:grid-cols-3 gap-6 text-center">
        <div class="p-6 border rounded-xl shadow-sm hover:shadow-md transition">
            <h3 class="text-[#1C3144] font-semibold mb-2">Correo</h3>
            <p class="text-gray-600"><a href="mailto:contacto@inversionesnumismaticas.com" class="hover:underline">contacto@mexicoin.com.mx</a></p>
        </div>
        <div class="p-6 border rounded-xl shadow-sm hover:shadow-md transition">
            <h3 class="text-[#1C3144] font-semibold mb-2">Teléfono</h3>
            <p class="text-gray-600">+52 55 1234 5678</p>
        </div>
        <div class="p-6 border rounded-xl shadow-sm hover:shadow-md transition">
            <h3 class="text-[#1C3144] font-semibold mb-2">Horario</h3>
            <p class="text-gray-600">Lunes a Viernes<br>9:00 AM – 6:00 PM</p>
        </div>
    </div>
</section>

</x-guest-layout>