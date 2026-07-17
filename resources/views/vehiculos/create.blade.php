<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Vehículo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">
    <div class="max-w-lg mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Registrar Vehículo</h1>

        <a href="{{ route('vehiculos.index') }}"
           class="text-blue-600 hover:underline mb-6 inline-block">&larr; Volver</a>

        <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
            <form action="{{ route('vehiculos.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="marca" class="block text-gray-700 font-medium mb-1">Marca</label>
                    <input type="text" name="marca" id="marca" value="{{ old('marca') }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('marca')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="modelo" class="block text-gray-700 font-medium mb-1">Modelo</label>
                    <input type="text" name="modelo" id="modelo" value="{{ old('modelo') }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('modelo')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="anio" class="block text-gray-700 font-medium mb-1">Año</label>
                    <input type="number" name="anio" id="anio" value="{{ old('anio') }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('anio')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="placa" class="block text-gray-700 font-medium mb-1">Placa</label>
                    <input type="text" name="placa" id="placa" value="{{ old('placa') }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('placa')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="color" class="block text-gray-700 font-medium mb-1">Color</label>
                    <input type="text" name="color" id="color" value="{{ old('color') }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('color')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="propietario" class="block text-gray-700 font-medium mb-1">Propietario</label>
                    <input type="text" name="propietario" id="propietario" value="{{ old('propietario') }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('propietario')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Guardar
                </button>
            </form>
        </div>
    </div>
</body>
</html>
