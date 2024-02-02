@extends('welcome')
@section('titulo','Eliminar No conformidad')
@section('contenido')
<br>
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
   
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            ¿Desea eliminar la no conformidad?
        </h4>
        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div>
                <label for="IdNoConformidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Código Accion Correctiva</label>
                <input type="text" name="IdNoConformidad" id="IdNoConformidad" value="{{$NoConformidad->IdNoConformidad}}" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"required>
            </div>
            
            <div>
                <label for="Descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                <input type="text" name="Descripcion" id="Descripcion"  value="{{$NoConformidad->Descripcion}}" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
            </div>
          
            <div>
                <label for="Fecha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha</label>
                <input type="date" name="Fecha" id="Fecha"  value="{{$NoConformidad->Fecha}}" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
            </div>
            
        </div>
        <div>
                <form method="POST" action="{{route('noconformidad.update', $NoConformidad->IdNoConformidad)}}" class="pl-6">
                @method('delete')
                @csrf
                <div class="flex justify-center space-x-4 mb-5 py-4">
                    <button type="submit" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                      <span>Si</span>
                    </button>
                    <button type="button" onclick="location.href='{{route('cancelarnc')}}'" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">No</button>
                  </div>
                </form>
            </div>
    </div>
</main>
@endsection