<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Eventos') }}
            </h2>
            <div>
                <a href="{{route('evento.create')}}" class="dark:text-white hover:text-slate-200">Evento Nuevo</a>
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
                                Evento
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Enlace
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tipo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($eventos as $evento)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $evento->nombre_evento }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $evento->enlace_evento }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $evento->fecha_evento}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $evento->tipoevento->nombre_tipoevento?? 'Null'}}
                            </td>

                            <td class="px-6 py-4">
                                <a href="{{route('evento.edit',$evento)}}" class="text-green-400 hover:text-green-600">Edit</a>
                                <form method="POST" class="text-red-400 hover:text-red-600" action="{{ route('evento.destroy',$evento) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('evento.destroy',$evento) }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        Eliminar
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                Ningun evento encontrado
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>