<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creacion de Categorias ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('categoria.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="nombre" :value="__('Nombre')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                :value="old('nombre')" required autofocus autocomplete="nombre" />
                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                        </div>

                        <!-- descripcion -->
                        <div class="mt-4">
                            <x-input-label for="descripcion" :value="__('Descripcion')" />
                            <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion"
                                :value="old('descripcion')" required autocomplete="descripcion" />
                            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                        </div>



                        <div class=" mt-4">
                            <x-primary-button class="w-full justify-center">
                                {{ __('Crear Categoria') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
