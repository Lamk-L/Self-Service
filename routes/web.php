<?php

use App\Http\Controllers\compras\GrupoController;
use App\Http\Controllers\compras\MarcaController;
use App\Http\Controllers\compras\ProductoController;
use App\Http\Controllers\compras\SubGrupoController;
use App\Http\Controllers\compras\UnidadMedidaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* COMPRA */
/* Productos - Grupo */
Route::resource('grupo',GrupoController::class);
Route::get('grupo/{id}/confirmar',[GrupoController::class,'confirmar'])->name('grupo.confirmar');
Route::get('cancelarcg',function(){
    return redirect()->route('grupo.index')->with('datos','Acción Cancelada ...!');
})->name('cancelarcg');
/* Productos - SubGrupo */
Route::resource('subgrupo',SubGrupoController::class);
Route::get('subgrupo/{id}/confirmar',[SubGrupoController::class,'confirmar'])->name('subgrupo.confirmar');
Route::get('cancelarcsg',function(){
    return redirect()->route('subgrupo.index')->with('datos','Acción Cancelada ...!');
})->name('cancelarcsg');
/* Productos - Marca */
Route::resource('marca',MarcaController::class);
Route::get('marca/{id}/confirmar',[MarcaController::class,'confirmar'])->name('marca.confirmar');
Route::get('cancelarcpm',function(){
    return redirect()->route('marca.index')->with('datos','Acción Cancelada ...!');
})->name('cancelarcpm');
/* Productos - UnidadMedida */
Route::resource('unidadmedida',UnidadMedidaController::class);
Route::get('unidadmedida/{id}/confirmar',[UnidadMedidaController::class,'confirmar'])->name('unidadmedida.confirmar');
Route::get('cancelarcpum',function(){
    return redirect()->route('unidadmedida.index')->with('datos','Acción Cancelada ...!');
})->name('cancelarcpum');
/* Productos */
Route::resource('producto',ProductoController::class);
Route::get('producto/{id}/confirmar',[ProductoController::class,'confirmar'])->name('producto.confirmar');
Route::get('cancelarcp',function(){
    return redirect()->route('producto.index')->with('datos','Acción Cancelada ...!');
})->name('cancelarcp');