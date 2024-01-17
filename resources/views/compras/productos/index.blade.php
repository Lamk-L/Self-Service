@extends('welcome')

@section('contenido')
<br>
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Lista de Productos
        </h4>
        <div class="flex justify-between items-center text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <div class="px-4 py-3">
                <center>
                <a href="{{ route('producto.create') }}">
                    <button type="submit" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">Nuevo Producto</button>
                </a>
                </center>
            </div>
            <div class="px-4 py-3">
                <center>
                <a href="#">
                    <button type="submit" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">Generar PDF</button>
                </a>
                </center>
            </div>
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
                        <th class="px-4 py-3 text-center">N</th>
                        <th class="px-4 py-3 text-center">CATEGORIA</th>
                        <th class="px-4 py-3 text-center">PRODUCTO</th>
                        <th class="px-4 py-3 text-center">PRECIO UNITARIO</th>
                        <th class="px-4 py-3 text-center">STOCK DISPONIBLE</th>
                        <th class="px-4 py-3 text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($productos as $item)
                        <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-center text-sm">{{$item->IdProducto}}</td>
                        <td class="px-4 py-3 text-center text-sm">{{$item->categoria->Descripcion}}</td>
                        <td class="px-4 py-3 text-center text-sm">{{$item->Descripcion}}</td>
                        <td class="px-4 py-3 text-center text-sm">{{$item->PrecioUnitario}}</td>
                        <td class="px-4 py-3 text-center text-sm">{{$item->StockDisponible}}</td>
                        <td class="px-4 py-3 flex justify-center">
                            <div class="flex items-center space-x-4 text-sm">
                                <a href="{{ route('producto.edit', $item->IdProducto) }}">
                                    <button
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit"
                                    >
                                        <svg
                                        class="w-5 h-5"
                                        aria-hidden="true"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        >
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                        ></path>
                                        </svg>
                                    </button>
                                </a>
                                <a href="{{ route('producto.confirmar', $item->IdProducto) }}">
                                    <button
                                    class="flex items-
                                    
                                    justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Delete"
                                    >
                                        <svg
                                        class="w-5 h-5"
                                        aria-hidden="true"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        >
                                        <path
                                            fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"
                                        ></path>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <span class="flex items-center col-span-3">
                    </span>
                    <span class="col-span-2"></span>
                    <!-- Pagination -->
                    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        {{ $productos->links('pagination::tailwind') }}
                    </nav>
                    </span>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection