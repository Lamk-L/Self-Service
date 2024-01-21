@extends('welcome')
@section('titulo','No Conformidad')

@section('contenido')
<br>
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <!-- With actions -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Lista de No Conformidades
        </h4>
        <div class="flex justify-between items-center text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <!-- Primer elemento: Botón 'Nuevo Grupo' -->
            <div class="px-4 py-3">
                <a href="{{ route('noconformidad.create') }}">
                    <button type="submit" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">Nueva No Conformidad</button>
                </a>
            </div>
        
            <!-- Segundo elemento: Botón 'Generar PDF' -->
            <div class="px-4 py-3">
                <a href="{{ route('noconformidad.create') }}">
                    <button type="submit" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">Generar PDF</button>
                </a>
            </div>
        
            <!-- Tercer elemento: Barra de búsqueda -->
            <div class="px-4 py-3">
                <form role="search" method="GET">
                    <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                        <!-- Contenedor del icono de búsqueda -->
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <button type="submit" class="text-green-500">
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Campo de entrada para la búsqueda -->
                        <input class="w-full pl-10 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                            name="buscarpor" type="search" placeholder="Buscar por Nombre" aria-label="Search" />
                    </div>
                </form>                        
            </div>
        </div>
        <br>                     
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3 text-center">CÓDIGO</th>
                        <th class="px-4 py-3 text-center">DESCRIPCIÓN</th>
                        <th class="px-4 py-3 text-center">FECHA</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($NoConformidad as $item)
                        <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-center text-sm">{{$item->IdNoConformidad}}</td>
                        <td class="px-4 py-3 text-center text-sm">{{$item->Descripcion}}</td>
                        <td class="px-4 py-3 text-center text-sm">{{$item->Fecha}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</main>
@endsection