<!-- banner -->
    <div class="bg-cover bg-no-repeat p-0 flex lg:hidden" style="background-image: url('{{ asset('assets/banners/angelpro.PNG') }}');">
        <div class="py-16 px-4 md:p-20 lg:p-36 w-full h-full flex flex-col justify-center bg-black/30">
            <h1 class="text-3xl lg:text-6xl text-gray-200 font-medium mb-4 capitalize">
                Las mejores colecciones <br> para ti
            </h1>
            <p></p>
            <div class="mt-12">
                <a href="#" class=" bg-emerald-700 border-primary text-white px-8 py-3 font-medium 
                    rounded-md hover:bg-blue-700">Comprar ahora</a>
            </div>
        </div>
    </div>

    <div class="bg-cover bg-no-repeat p-0 hidden lg:flex" style="background-image: url('{{ asset('assets/banners/banner 19-9.png') }}');">
        <div class="py-16 px-4 md:p-20 lg:p-36 w-full h-full flex flex-col justify-center bg-black/30">
            <h1 class="text-3xl lg:text-6xl text-gray-200 font-medium mb-4 capitalize">
                Las mejores colecciones <br> para ti
            </h1>
            <p></p>
            <div class="mt-12">
                <a href="{{ route('store') }}" class=" bg-emerald-700 border-primary text-white px-8 py-3 font-medium 
                    rounded-md hover:bg-blue-700">Comprar ahora</a>
            </div>
        </div>
    </div>
    <!-- ./banner -->