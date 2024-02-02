@extends('welcome')
@section('titulo','Crear No Conformidad')
@section('contenido')
<br>
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid py-1 px-8 mx-auto lg:py-16">
   
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Registrar No conformidad
        </h4>
        <form method="POST" action="{{route('noconformidad.store')}}" class="pl-6">
            @csrf
            <div class="grid gap-4 sm:grid-cols-1 sm:gap-6">
              
                <div>
                    <label for="Descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción No Conformidad</label>
                    <input type="text" name="Descripcion" id="Descripcion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                </div>
                <div>
                    <label for="Fecha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha</label>
                    <input type="date" name="Fecha" id="Fecha" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                </div>
                
                <div>
                    <div class="flex justify-between mb-5">
                        
                        <button type="submit" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">Agregar No Conformidad</button>
                        
                        <button type="button" onclick="location.href='{{route('cancelarnc')}}'" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">Cancelar</button>
                      </div>
                </div>
            </div>
        </form>
    
    </div>
</main>
@endsection