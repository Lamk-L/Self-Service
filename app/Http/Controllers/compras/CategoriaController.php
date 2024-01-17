<?php

namespace App\Http\Controllers\compras;

use App\Http\Controllers\Controller;
use App\Models\compras\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    const PAGINATION = 10;

    public function index(Request $request)
    {
        $buscar = $request->get('buscar');
        $categorias = Categoria::where('estado', '=', '1')
                                ->where('descripcion', 'like', '%' . $buscar . '%')
                                ->paginate(self::PAGINATION);

        return view('compras.productos.categorias.index', compact('categorias', 'buscar'));
    }

    public function create()
    {
        return view('compras.productos.categorias.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'descripcion' => 'required|max:30'
        ], [
            'descripcion.required' => 'Ingrese descripción de categoria',
            'descripcion.max' => 'Máximo 30 caracteres para la descripción',
        ]);

        $categoria = new Categoria();
        $categoria->descripcion = $request->descripcion;
        $categoria->estado = '1';
        $categoria->save();

        return redirect()->route('categorias.index')->with('datos', 'Registro Nuevo Guardado ...!');
    }

    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('compras.productos.categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'descripcion' => 'required|max:30'
        ], [
            'descripcion.required' => 'Ingrese descripción de categoria',
            'descripcion.max' => 'Máximo 30 caracteres para la descripción',
        ]);

        $categoria = Categoria::findOrFail($id);
        $categoria->descripcion = $request->descripcion;
        $categoria->save();

        return redirect()->route('categorias.index')->with('datos', 'Registro Actualizado ...!');
    }

    public function confirmar($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('compras.productos.categorias.confirmar', compact('categoria'));
    }

    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->estado = '0';
        $categoria->save();

        return redirect()->route('categorias.index')->with('datos', 'Registro Eliminado ...!');
    }

    public function eliminar($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->estado = '0';
        $categoria->save();
        return response()->json($categoria);
    }
}
