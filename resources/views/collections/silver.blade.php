<x-guest-layout>
    {{-- Sección: Información de la Serie Libertad Plata --}}
    <div id="plata" class="flex flex-col w-full max-w-6xl mx-auto mt-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#1C3144] tracking-tight">
                Serie Libertad <span class="text-gray-400">Plata</span>
            </h2>
            <div class="mt-3 h-1 w-24 bg-gradient-to-r from-gray-300 to-gray-500 mx-auto rounded-full shadow-lg"></div>
        </div>

        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow-lg overflow-hidden border border-gray-200 sm:rounded-2xl">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gradient-to-r from-gray-100 to-gray-200">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Plata</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Acabado</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Diámetro (mm)</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Ley</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">Libertad 1 onza</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Satín y espejo</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">36</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">.999</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">Libertad 1/2 onza</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Satín y espejo</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">30</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">.999</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">Libertad 1/4 onza</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Satín y espejo</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">25</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">.999</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">Libertad 1/10 onza</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Satín y espejo</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">20</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">.999</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">Libertad 1/20 onza</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Satín y espejo</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">16</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">.999</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Sección: Comprar productos --}}
    <div class="w-9/12 mt-20 mx-auto overflow-hidden sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#1C3144] tracking-tight">
                Comprar <span class="text-gray-400">Productos</span>
            </h2>
            <div class="mt-3 h-1 w-24 bg-gradient-to-r from-gray-300 to-gray-500 mx-auto rounded-full shadow-lg"></div>
        </div>

        <div class="-mx-px border-l border-gray-300 grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($products as $p)
                @include('comps.store-productcard', ['producto' => $p])
            @endforeach
        </div>

        <div class="mt-10">
            {{ $products->links() }}
        </div>
    </div>
</x-guest-layout>
