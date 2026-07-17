<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehículos - Taller Automotriz</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Vehículos Registrados</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('vehiculos.create') }}"
           class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-6">
            + Registrar Vehículo
        </a>

        @forelse ($vehiculos as $vehiculo)
            <div class="bg-white shadow rounded-lg p-6 mb-4 border border-gray-200">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800">
                            {{ $vehiculo->marca }} {{ $vehiculo->modelo }}
                        </h2>
                        <p class="text-gray-600 mt-1">
                            <span class="font-medium">Placa:</span> {{ $vehiculo->placa }} |
                            <span class="font-medium">Año:</span> {{ $vehiculo->anio }} |
                            <span class="font-medium">Color:</span> {{ $vehiculo->color }}
                        </p>
                        <p class="text-gray-600">
                            <span class="font-medium">Propietario:</span> {{ $vehiculo->propietario }}
                        </p>
                        <p class="text-gray-400 text-sm mt-1">
                            Registrado: {{ $vehiculo->created_at->format('d/m/Y H:i') }}
                        </p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm">
                            Editar
                        </a>
                        <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST"
                              onsubmit="return confirm('¿Eliminar este vehículo?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="bg-white shadow rounded-lg p-8 text-center text-gray-500">
                No hay vehículos registrados.
            </div>
        @endforelse
    </div>
</body>
</html>
