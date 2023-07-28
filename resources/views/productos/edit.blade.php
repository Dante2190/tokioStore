<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edicion de producto ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ url('/producto/'.$producto->id) }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{ method_field('PATCH') }}

                        <!-- Name -->
                        <div>
                            <x-input-label for="nombre" :value="__('Nombre')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                            value="{{ isset($producto->nombre)?$producto->nombre:'' }}" required autofocus autocomplete="nombre" />
                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="descripcion" :value="__('Descripcion')" />
                            <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion"
                            value="{{ isset($producto->descripcion)?$producto->descripcion:'' }}" required autocomplete="descripcion" />
                            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="talla" :value="__('Talla')" />
                            <x-text-input id="talla" class="block mt-1 w-full" type="text" name="talla"
                            value="{{ isset($producto->talla)?$producto->talla:'' }}" required autocomplete="talla" />
                            <x-input-error :messages="$errors->get('talla')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <label for="categoria_id" class="block mb-2">Categoría:</label>
                            <select name="categoria_id" class="w-full border border-gray-300 p-2 text-black" required>
                                <option value="">Seleccione una categoría</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }} " @if (isset($producto) && $producto->categoria_id == $categoria->id) selected @endif>{{ $categoria->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="departamento_id" class="block mb-2">Departamento:</label>
                            <select name="departamento_id" class="w-full border border-gray-300 p-2 text-black"
                                required>
                                <option value="">Seleccione un departamento</option>
                                @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}" @if (isset($producto) && $producto->departamento_id == $departamento->id) selected @endif>{{ $departamento->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="marca_id" class="block mb-2">Marca:</label>
                            <select name="marca_id" class="w-full border border-gray-300 p-2 text-black" required>
                                <option value="">Seleccione una marca</option>
                                @foreach ($marcas as $marca)
                                    <option value="{{ $marca->id }} " @if (isset($producto) && $producto->marca_id == $marca->id) selected @endif >{{ $marca->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="proveedor_id" class="block mb-2">Proveedor:</label>
                            <select name="proveedor_id" class="w-full border border-gray-300 p-2 text-black" required>
                                <option value="">Seleccione un proveedor</option>
                                @foreach ($proveedores as $proveedor)
                                    <option value="{{ $proveedor->id }}" @if (isset($producto) && $producto->proveedor_id == $proveedor->id) selected @endif>{{ $proveedor->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="precio" :value="__('Precio')" />
                            <x-text-input id="precio" class="block mt-1 w-full" type="text" name="precio"
                            value="{{ isset($producto->precio)?$producto->precio:'' }}" required autocomplete="precio" />
                            <x-input-error :messages="$errors->get('precio')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="stock" :value="__('Stock')" />
                            <x-text-input id="stock" class="block mt-1 w-full" type="text" name="stock"
                            value="{{ isset($producto->stock)?$producto->stock:'' }}" required autocomplete="stock" />
                            <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                        </div>




                        <div class=" mt-4">
                            <x-primary-button class="w-full justify-center">
                                {{ __('Editar Producto') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
