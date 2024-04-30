<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Editar inscripcion') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('inscripcion.update',$inscripcion) }}" enctype="multipart/form-data" class="p-4 bg-white dark:bg-slate-800 rounded-md">
                @csrf
                @method('PUT')
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="fecha_inscripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha Evento</label>
                        <input type="date" id="fecha_inscripcion" name="fecha_inscripcion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('fecha_inscripcion', $inscripcion->fecha_inscripcion)}}">
                        @error('fecha_inscripcion')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="espacios_disponibles" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Espacios disponibles</label>
                        <input type="text" id="espacios_disponibles" name="espacios_disponibles" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('espacios_disponibles', $inscripcion->espacios_disponibles)}}">
                        @error('espacios_disponibles')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="evento_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione un evento</label>
                        <select id="evento_id" name="evento_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Evento</option>
                            @foreach ($eventos as $evento)
                            <option value="{{ $evento->id }}" @selected($evento ->id === $inscripcion->evento_id)> {{$evento->nombre_evento }}</option>
                            @endforeach
                        </select>
                        @error('evento_id')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</button>
                    </div>
            </form>
        </div>
    </div>
</x-app-layout>