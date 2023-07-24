<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('edicion de marcas ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ url('/proveedor/' . $proveedor->id) }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{ method_field('PATCH') }}

                        <!-- Name -->
                        <div>
                            <x-input-label for="nombre" :value="__('Nombre')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                value="{{ isset($proveedor->nombre) ? $proveedor->nombre : '' }}" required autofocus
                                autocomplete="nombre" />
                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                        </div>

                        <!-- Descripcion -->
                        <div class="mt-4">
                            <x-input-label for="direccion" :value="__('direccion')" />
                            <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion"
                                value="{{ isset($proveedor->direccion) ? $proveedor->direccion : '' }}" required
                                autocomplete="direccion" />
                            <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                        </div>


                        <div class="mt-4">
                            <x-input-label for="telefono" :value="__('telefono')" />
                            <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono"
                                value="{{ isset($proveedor->telefono) ? $proveedor->telefono : '' }}" required
                                autocomplete="telefono" />
                            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email"
                                value="{{ isset($proveedor->email) ? $proveedor->email : '' }}" required
                                autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>




                        <div class=" mt-4">
                            <x-primary-button class="w-full justify-center">
                                {{ __('Editar Marca') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
