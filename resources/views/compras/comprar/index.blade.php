@extends('welcome')

@section('contenido')
<br>
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Agrega Productos a tu compra
        </h4>
        
        <div class="flex justify-between items-center text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <div class="px-4 py-3">
                <center>
                <a href="{{ route('producto.create') }}">
                    <button type="submit" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">Agregar Producto</button>
                </a>
                </center>
            </div>
            <div class="px-4 py-3">
                <center>
                <a href="{{ route('producto.create') }}">
                    <button type="submit" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker">Confirmar Compra</button>
                </a>
                </center>
            </div>
        </div>
        <br>
        
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3 text-center">CÓDIGO</th>
                        <th class="px-4 py-3 text-center">PRODUCTO</th>
                        <th class="px-4 py-3 text-center">CANTIDAD</th>
                        <th class="px-4 py-3 text-center">P. UNIT (S/.)</th>
                        <th class="px-4 py-3 text-center">TOTAL (S/.)</th>
                        <th class="px-4 py-3 text-center">ACCIÓN</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-center text-sm">4</td>
                        <td class="px-4 py-3 text-center text-sm">Té Negro Lipton</td>
                        <td class="px-4 py-3 text-center text-sm">
                            <div class="py-2 px-3 bg-gray-100 rounded-lg dark:bg-slate-700" data-hs-input-number>
                                <div class="w-full flex justify-between items-center gap-x-5">
                                  <div class="grow">
                                    <input class="w-full p-0 bg-gray-50 border-0 text-center text-sm focus:ring-0" type="text" value="1" data-hs-input-number-input>
                                  </div>
                                  <div class="flex justify-end items-center gap-x-1.5">
                                    <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-input-number-decrement>
                                      <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                    </button>
                                    <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-input-number-increment>
                                      <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                    </button>
                                  </div>
                                </div>
                              </div>
                        </td>
                        
                        <td class="px-4 py-3 text-center text-sm">12</td>
                        <td class="px-4 py-3 text-center text-sm">24</td>
                        <td class="px-4 py-3 flex justify-center">
                            <div class="flex items-center space-x-4 text-sm">
                                <a href="#">
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
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-center text-sm">2</td>
                            <td class="px-4 py-3 text-center text-sm">Queso Fresco Laive</td>
                            <td class="px-4 py-3 text-center text-sm">
                                <div class="py-2 px-3 bg-gray-100 rounded-lg dark:bg-slate-700" data-hs-input-number>
                                    <div class="w-full flex justify-between items-center gap-x-5">
                                      <div class="grow">
                                        <input class="w-full p-0 bg-gray-50 border-0 text-center text-sm focus:ring-0" type="text" value="1" data-hs-input-number-input>
                                      </div>
                                      <div class="flex justify-end items-center gap-x-1.5">
                                        <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-input-number-decrement>
                                          <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                        </button>
                                        <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-input-number-increment>
                                          <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                            </td>
                            
                            <td class="px-4 py-3 text-center text-sm">14</td>
                            <td class="px-4 py-3 text-center text-sm">14</td>
                            <td class="px-4 py-3 flex justify-center">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="#">
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
                        <tr class="text-gray-700 dark:text-gray-400 ">
                            <td colspan="4" class="px-4 py-3 text-center text-sm font-bold">
                                Total a pagar (S/.)
                            </td>
                            <td class="px-4 py-3 text-right text-sm">
                                <span class="block md:inline-block md:ml-2">38</span>
                            </td>
                            </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
            

        
    </div>
</main>
@endsection