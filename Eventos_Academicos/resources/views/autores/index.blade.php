<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Autores') }}
            </h2>
            <div>
                <a href="{{route('autor.create')}}" class="dark:text-white hover:text-slate-200">Autor Nuevo</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Apellido Paterno
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Apellido Materno
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Afiliacion
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Accion
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($autores as $autor)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $autor->nombre_autor }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $autor->apellidopat_autor}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $autor->apellidomat_autor}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $autor->afiliacion->nombre_afiliacion ?? 'Null'}}
                            </td>

                            <td class="px-6 py-4">
                                <a href="{{route('autor.edit',$autor)}}" class="text-green-400 hover:text-green-600">Edit</a>
                                <form method="POST" class="text-red-400 hover:text-red-600" action="{{ route('autor.destroy',$autor) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('autor.destroy',$autor) }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        Eliminar
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                Ningun autor encontrado
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>