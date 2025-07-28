<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Precios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-md">
        <h1 class="text-xl font-bold mb-4">Consultar precio de Onza Libertad</h1>

        @if(session('error'))
            <div class="text-red-600 mb-3">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('price.get') }}">
            @csrf
            <label for="asset" class="block mb-2 font-medium">Selecciona el metal:</label>
            <select name="asset" id="asset" class="w-full border p-2 mb-4 rounded">
                <option value="oro">Oro</option>
                <option value="plata">Plata</option>
            </select>
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Obtener precio</button>
        </form>
    </div>
</body>
</html>
