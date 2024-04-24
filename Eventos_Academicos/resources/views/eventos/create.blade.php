<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Evento Nuevo') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('evento.store') }}" 
             enctype="multipart/form-data" class="p-4 bg-blue dark:bg-slate-800 rounded-md">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nombre_evento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de evento</label>
                        <input type="text" id="nombre_evento" name="nombre_evento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Laravel event">
                        @error('nombre_evento')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="enlace"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enlace</label>
                        <input type="text" id="enlace_evento" name="enlace_evento"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Laravel event">
                        @error('enlace')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="fecha_evento"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha Evento</label>
                        <input type="date" id="fecha_evento" name="fecha_evento"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Laravel event">
                        @error('fecha_evento')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="tipo_evento_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione un tipo de evento</label>
                        <select id="tipo_evento_id" name="tipo_evento_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Tipo de Evento</option>
                            @foreach ($tipoevento as $tipo)
                                <option value="{{ $tipo->id }}"> {{$tipo->nombre_tipoevento }}</option>
                            @endforeach
                        </select>
                        @error('country_id')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                <div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Crear</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>