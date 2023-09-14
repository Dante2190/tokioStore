<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de Proveedores ') }}
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
                        <a href="{{ url('proveedor/create') }}"
                            class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Crear Proveedor
                        </a>
                    </div>
                    <div class="bg-white shadow-md rounded my-6">
                        <table id="tabla-marcas" class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-700">
                                    <th class="px-4 py-2">#</th>
                                    <th class="px-4 py-2">Nombre</th>
                                    <th class="px-4 py-2">Direccion</th>
                                    <th class="px-4 py-2">Telefono</th>
                                    <th class="px-4 py-2">Email</th>
                                    <th class="px-4 py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-center">
                                <!-- Aquí comienza el loop para mostrar los registros -->
                                @foreach ($proveedors as $proveedor)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $proveedor->id }}</td>
                                        <td class="border px-4 py-2">{{ $proveedor->nombre }}</td>
                                        <td class="border px-4 py-2">{{ $proveedor->direccion }}</td>
                                        <td class="border px-4 py-2">{{ $proveedor->telefono }}</td>
                                        <td class="border px-4 py-2">{{ $proveedor->email }}</td>
                                        <td class="border px-4 py-2">
                                            <a class="text-blue-600 hover:text-blue-800 mr-2"
                                                href="{{ url('/proveedor/' . $proveedor->id . '/edit') }}">
                                                Editar
                                            </a>

                                            <form action="{{ url('/proveedor/' . $proveedor->id) }}" method="POST">
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
                    {{-- --}} <div class="my-6">
                        {{ $proveedors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    $(document).ready(function() {
        $('#tabla-marcas').DataTable({
            paging: true, // Habilita la paginación
            searching: true, // Habilita la búsqueda
            language: {
                // Personaliza los textos de la tabla
                paginate: {
                    first: 'Primero',
                    last: 'Último',
                    next: 'Siguiente',
                    previous: 'Anterior'
                },
                search: 'Buscar:',
                lengthMenu: 'Mostrar _MENU_ registros por página',
                info: 'Mostrando _START_ a _END_ de _TOTAL_ registros',
                infoEmpty: 'Mostrando 0 a 0 de 0 registros',
                infoFiltered: '(filtrado de _MAX_ registros en total)'
            },
            // Agrega estilos personalizados
           
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
            "columnDefs": [
                { "className": "text-center", "targets": "_all" },
                { "orderable": false, "targets": [3] }
            ]
        });

       
    });
</script>