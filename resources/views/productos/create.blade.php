<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creacion de producto ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('producto.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="nombre" :value="__('Nombre')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                :value="old('nombre')" required autofocus autocomplete="nombre" />
                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="descripcion" :value="__('Descripcion')" />
                            <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion"
                                :value="old('descripcion')" required autocomplete="descripcion" />
                            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="talla" :value="__('Talla')" />
                            <x-text-input id="talla" class="block mt-1 w-full" type="text" name="talla"
                                :value="old('talla')" required autocomplete="talla" />
                            <x-input-error :messages="$errors->get('talla')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <label for="categoria_id" class="block mb-2">Categoría:</label>
                            <select name="categoria_id" class="w-full border border-gray-300 p-2 text-black" required>
                                <option value="">Seleccione una categoría</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="departamento_id" class="block mb-2">Departamento:</label>
                            <select name="departamento_id" class="w-full border border-gray-300 p-2 text-black"
                                required>
                                <option value="">Seleccione un departamento</option>
                                @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="marca_id" class="block mb-2">Marca:</label>
                            <select name="marca_id" class="w-full border border-gray-300 p-2 text-black" required>
                                <option value="">Seleccione una marca</option>
                                @foreach ($marcas as $marca)
                                    <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="proveedor_id" class="block mb-2">Proveedor:</label>
                            <select name="proveedor_id" class="w-full border border-gray-300 p-2 text-black" required>
                                <option value="">Seleccione un proveedor</option>
                                @foreach ($proveedores as $proveedor)
                                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="precio" :value="__('Precio')" />
                            <x-text-input id="precio" class="block mt-1 w-full" type="text" name="precio"
                                :value="old('precio')" required autocomplete="precio" />
                            <x-input-error :messages="$errors->get('precio')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="stock" :value="__('Stock')" />
                            <x-text-input id="stock" class="block mt-1 w-full" type="text" name="stock"
                                :value="old('stock')" required autocomplete="stock" />
                            <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                        </div>




                        <div class=" mt-4">
                            <x-primary-button class="w-full justify-center">
                                {{ __('Crear producto') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
