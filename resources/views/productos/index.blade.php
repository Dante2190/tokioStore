<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de productos ') }}
        </h2>
    </x-slot>
    <!-- Ejemplo de alertas con Tailwind CSS -->
    <div class="my-4">
        <!-- Alerta de éxito -->
        @if (session('success'))
            <div id="alert"
                class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-green-500 text-white font-bold py-2 px-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Alerta de error -->
        @if (session('error'))
            <div id="alert" class="bg-red-500 text-white font-bold py-2 px-4 rounded">
                {{ session('error') }}
            </div>
        @endif
        <!-- Script para ocultar la alerta después de 5 segundos -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const alertElement = document.getElementById('alert');

                if (alertElement) {
                    setTimeout(function() {
                        alertElement.classList.add('fadeOut');
                    }, 5000); // 5000 milisegundos = 5 segundos

                    setTimeout(function() {
                            alertElement.style.display = 'none';
                        },
                        5500
                    ); // 5500 milisegundos = 5.5 segundos (para ocultar completamente la alerta después de la transición)
                }
            });
        </script>
        <!-- Otras alertas -->
        <!-- Agrega aquí otros bloques similares para mostrar diferentes tipos de alertas -->
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 items-end">
                    <div class="flex justify-end">
                        <a href="{{ url('producto/create') }}"
                            class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Crear Producto
                        </a>
                    </div>
                    {{-- <div class="bg-white shadow-md rounded my-6">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-700">
                                    <th class="px-4 py-2">#</th>
                                    <th class="px-4 py-2">Nombre</th>
                                    <th class="px-4 py-2">Descripción</th>
                                    <th class="px-4 py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-center">
                                <!-- Aquí comienza el loop para mostrar los registros -->
                                @foreach ($marcas as $marca)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $marca->id }}</td>
                                        <td class="border px-4 py-2">{{ $marca->nombre }}</td>
                                        <td class="border px-4 py-2">{{ $marca->descripcion }}</td>
                                        <td class="border px-4 py-2">
                                            <a class="text-blue-600 hover:text-blue-800 mr-2"
                                                href="{{ url('/marca/' . $marca->id . '/edit') }}">
                                                Editar
                                            </a>

                                            <form action="{{ url('/marca/' . $marca->id) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <input type="submit" class="text-red-600 hover:text-red-800"
                                                    value="Eliminar">
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                                <!-- Aquí termina el loop -->
                            </tbody>
                        </table>
                    </div>
                    <div class="my-6">
                        {{ $marcas->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
