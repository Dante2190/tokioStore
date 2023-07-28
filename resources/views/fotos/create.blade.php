<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creacion de Fotos ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('foto.store') }} " enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="foto" :value="__('Foto')" />
                            <x-text-input id="foto" class="block mt-1 w-full" type="file" accept="image/png,image/jpeg" name="foto" :value="old('foto')" required autofocus autocomplete="foto" />
                            <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <label for="producto_id" class="block mb-2">Producto:</label>
                            <select name="producto_id" class="w-full border border-gray-300 p-2 text-black" required>
                                <option value="">Seleccione un producto</option>
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class=" mt-8">
                            <x-primary-button class="w-full justify-center">
                                {{ __('Crear Foto') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
