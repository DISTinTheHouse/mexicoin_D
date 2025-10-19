<x-guest-layout>
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