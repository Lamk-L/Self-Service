@extends('welcome')
@section('titulo','Editar Acción Correctiva')
@section('contenido')
<br>
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
   
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Editar Acción Correctiva
        </h4>
        <form method="POST" action="{{route('accioncorrectiva.update', $AccionCorrectiva->IdAccionCorrectiva)}}" class="pl-6">
            @method('put')
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div>
                    <label for="IdAccionCorrectiva" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Código Acción Correctiva</label>
                    <input type="text" name="IdAccionCorrectiva" id="IdAccionCorrectiva" value="{{$AccionCorrectiva->IdAccionCorrectiva}}" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"required>
                </div>
                <div>
                    <label for="IdNoConformidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Conformidad</label>
                    <select name="IdNoConformidad" id="IdNoConformidad" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        
                        @foreach($NOCONFORMIDAD as $itemnc)
                            <option value="{{$itemnc['IdNoConformidad']}}" {{$itemnc->IdNoConformidad == $AccionCorrectiva->IdNoConformidad ? 'selected':''}}>
                                {{$itemnc['Descripcion']}}
                            </option>
                        @endforeach   
                    </select>              
                </div>
                <div>
                    <label for="Descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Acción Correctiva</label>
                    <input type="text" name="Descripcion" id="Descripcion"  value="{{$AccionCorrectiva->Descripcion}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                </div>
                <div>
                    <label for="Resultado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resultado</label>
                    <input type="text" name="Resultado" id="Resultado"  value="{{$AccionCorrectiva->Resultado}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                </div>
        
                
            </div>
            <div>
                    <div class="flex justify-center space-x-4 mb-5 p-2.5">
                        <button type="submit" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">
                          <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20">
                            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" fill-rule="evenodd"></path>
                          </svg>
                          <span>Actualizar</span>
                        </button>
                        <button type="button" onclick="location.href='{{route('cancelarac')}}'" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">Cancelar</button>
                      </div>
                </div>
        </form>
    </div>
</main>
@endsection