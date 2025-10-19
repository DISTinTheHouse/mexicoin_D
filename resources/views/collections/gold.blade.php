<x-guest-layout>
    <div id="oro" class="flex flex-col w-full max-w-6xl mx-auto mt-12">
        <h2 class="text-3xl font-bold text-indio-oscuro text-center mb-10">Información acerca de la Serie libertad oro</h2>

        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ORO</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ACABADO</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DIÁMETRO (mm)</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">LEY</th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Libertad 1 onza</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Satín y espejo</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">34.5</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">.999</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Libertad 1/2 onza</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Satín y espejo</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">29</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">.999</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Libertad 1/4 onza</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Satín y espejo</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">23</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">.999</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Libertad 1/10 onza</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Satín y espejo</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">16</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">.999</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Libertad 1/20 onza</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Satín y espejo</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">13</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">.999</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Store side --}}
    <div class="w-9/12 mt-12 mx-auto overflow-hidden sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-indio-oscuro text-center mb-10">Comprar productos</h2>

        <div class="-mx-px border-l border-gray-300 grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-4">
        
            @foreach ($products as $p)
                @include('comps.store-productcard', ['producto' => $p])
            @endforeach
        </div>
        <div class="mt-8">
            {{ $products->links() }} <!-- Pagination links -->
        </div>
    </div>
</x-guest-layout>