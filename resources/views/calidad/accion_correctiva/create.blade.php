@extends('welcome')
@section('titulo','Registrar Acción Correctiva')
@section('contenido')
<br>
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
   
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Crear Acción Correctiva
        </h4>
        <form method="POST" action="{{route('accioncorrectiva.store')}}" class="pl-6">
            @csrf
            <div class="grid gap-4 sm:grid-cols-1 sm:gap-6">
                <div>
                    <label for="IdNoConformidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Conformidad</label>
                    <select class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            id="IdNoConformidad" name="IdNoConformidad">
                            @foreach ($NOCONFORMIDAD as $itemNoConformidad)
                            <option value="{{ $itemNoConformidad->IdNoConformidad }}">{{ $itemNoConformidad->Descripcion }}</option>
                            @endforeach
                        </select>
                </div>
                <div>
                    <label for="Descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Acción Correctiva</label>
                    <input type="text" name="Descripcion" id="Descripcion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                </div>
                <div>
                    <label for="Resultado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resultado</label>
                    <input type="text" name="Resultado" id="Resultado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                </div>
                
                <div>
                    <div class="flex justify-between mb-5">
                        <button type="submit" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">
                          <span>Agregar Acción</span>
                        </button>
                        <button type="button" onclick="location.href='{{route('cancelarac')}}'" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">Cancelar</button>
                      </div>
                </div>
            </div>
        </form>        
    </div>
</main>
@endsection