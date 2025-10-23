<x-guest-layout>

  @if (Session::has('error'))
    @php $error = Session::get('error', 'opps'); @endphp
    <div id="errAlert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-9/12 mx-auto mt-6" role="alert">
      <strong class="font-bold">Error!</strong>
      <span class="block sm:inline">{{ $error }}</span>
    </div>
  @endif

  <div class="bg-white">
    <div class="w-9/12 mt-12 mx-auto overflow-hidden sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-indio-oscuro text-center mb-10">Comprar productos</h2>

      <div class="-mx-px border-l border-gray-300 grid grid-cols-1 md:grid-cols-2 sm:mx-0 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($products as $p)
          @include('comps.store-productcard', ['producto' => $p])
        @endforeach
      </div>
      <div class="mt-8">
          {{ $products->links() }} <!-- Pagination links -->
      </div>
    </div>
  </div>
  
</x-guest-layout>