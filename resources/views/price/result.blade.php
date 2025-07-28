<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-md">
        <h2 class="text-lg font-bold mb-2">Resultados para {{ $asset }}</h2>
        <p><strong>Fecha y hora:</strong> {{ $fecha }}</p>
        <div class="mt-4 border-t pt-4">
            <p><strong>Compra:</strong> {{ $compra }}</p>
            <p><strong>Venta:</strong> {{ $venta }}</p>
        </div>
        <a href="{{ route('price.form') }}" class="mt-4 inline-block text-blue-600 hover:underline">← Consultar otro</a>
    </div>
</body>
</html>
