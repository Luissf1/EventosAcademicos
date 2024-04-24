<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Autor Nuevo') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('autor.store') }}" enctype="multipart/form-data" class="p-4 bg-blue dark:bg-slate-800 rounded-md">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nombre_autor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del autor</label>
                        <input type="text" id="nombre_autor" name="nombre_autor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresar su nombre">
                        @error('nombre_autor')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="apellidopat_autor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apelldo Paterno</label>
                        <input type="text" id="apellidopat_autor" name="apellidopat_autor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresar su apellido paterno">
                        @error('apellidopat_autor')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="apellidomat_autor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apelldo Materno</label>
                        <input type="text" id="apellidomat_autor" name="apellidomat_autor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresar su apellido materno">
                        @error('apellidomat_autor')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="afiliacion_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione su afiliacion</label>
                        <select id="afiliacion_id" name="afiliacion_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Tipo de afiliacion</option>
                            @foreach ($afiliacion as $a)
                            <option value="{{ $a->id }}"> {{$a->nombre_afiliacion }}</option>
                            @endforeach
                        </select>
                        @error('afiliacion_id')
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