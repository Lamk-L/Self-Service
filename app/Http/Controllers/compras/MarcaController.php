<?php

namespace App\Http\Controllers\compras;

use App\Http\Controllers\Controller;
use App\Models\compras\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    const PAGINATION = 20;

    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $marcas = Marca::where('Estado', '=', '1')
                       ->where('NomMarca', 'like', '%' . $buscarpor . '%')
                       ->paginate(self::PAGINATION);

        return view('compras.productos.marca.index', compact('marcas', 'buscarpor'));
    }

    public function create()
    {
        return view('compras.productos.marca.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'NomMarca' => 'required|unique:marca|max:20',
            // Agregar más reglas de validación si es necesario
        ]);

        $marca = new Marca();
        $marca->NomMarca = $request->NomMarca;
        $marca->Estado = '1';
        $marca->save();

        return redirect()->route('marca.index')->with('datos', 'Registro Nuevo Guardado ...!');
    }

    public function edit($id)
    {
        $marca = Marca::findOrFail($id);
        return view('compras.productos.marca.edit', compact('marca'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'NomMarca' => 'required|unique:marca,NomMarca,' . $id . '|max:20',
            // Agregar más reglas de validación si es necesario
        ]);

        $marca = Marca::findOrFail($id);
        $marca->NomMarca = $request->NomMarca;
        $marca->save();

        return redirect()->route('marca.index')->with('datos', 'Registro Actualizado ...!');
    }

    public function confirmar($id)
    {
        $marca = Marca::findOrFail($id);
        return view('compras.productos.marca.confirmar', compact('marca'));
    }

    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->Estado = '0';
        $marca->save();

        return redirect()->route('marca.index')->with('datos', 'Registro Eliminado ...!');
    }
}
