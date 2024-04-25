<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Asistente Nuevo') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('asistente.store') }}" enctype="multipart/form-data" class="p-4 bg-blue dark:bg-slate-800 rounded-md">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nombre_asistente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del asistente</label>
                        <input type="text" id="nombre_asistente" name="nombre_asistente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresar su nombre">
                        @error('nombre_asistente')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="apellidopat_asistente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apelldo Paterno</label>
                        <input type="text" id="apellidopat_asistente" name="apellidopat_asistente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresar su apellido paterno">
                        @error('apellidopat_asistente')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="apellidomat_asistente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apelldo Materno</label>
                        <input type="text" id="apellidomat_asistente" name="apellidomat_asistente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresar su apellido materno">
                        @error('apellidomat_asistente')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="autor_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione su afiliacion</label>
                        <select id="autor_id" name="autor_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Autor</option>
                            @foreach ($autor as $a)
                            <option value="{{ $a->id }}"> {{$a->nombre_autor}}</option>
                            @endforeach
                        </select>
                        @error('autor_id')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Crear</button>
                    </div>
            </form>
        </div>
    </div>
</x-app-layout>