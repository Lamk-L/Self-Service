<?php

namespace App\Http\Controllers\compras;

use App\Http\Controllers\Controller;
use App\Models\compras\UnidadMedida;
use Illuminate\Http\Request;

class UnidadMedidaController extends Controller
{
    const PAGINATION = 20;

    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $unidadmedida = UnidadMedida::where('Estado', '=', '1')
                                      ->where('NomUnidadMedida', 'like', '%' . $buscarpor . '%')
                                      ->paginate(self::PAGINATION);

        return view('compras.productos.unidadmedida.index', compact('unidadmedida', 'buscarpor'));
    }

    public function create()
    {
        return view('compras.productos.unidadmedida.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'NomUnidadMedida' => 'required|unique:unidadmedida|max:20',
            // Agregar más reglas de validación si es necesario
        ]);

        $unidadMedida = new UnidadMedida();
        $unidadMedida->NomUnidadMedida = $request->NomUnidadMedida;
        $unidadMedida->Estado = '1';
        $unidadMedida->save();

        return redirect()->route('unidadmedida.index')->with('datos', 'Registro Nuevo Guardado ...!');
    }

    public function edit($id)
    {
        $unidadMedida = UnidadMedida::findOrFail($id);
        return view('compras.productos.unidadmedida.edit', compact('unidadMedida'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'NomUnidadMedida' => 'required|unique:unidadmedida,NomUnidadMedida,' . $id . '|max:20',
            // Agregar más reglas de validación si es necesario
        ]);

        $unidadMedida = UnidadMedida::findOrFail($id);
        $unidadMedida->NomUnidadMedida = $request->NomUnidadMedida;
        $unidadMedida->save();

        return redirect()->route('unidadmedida.index')->with('datos', 'Registro Actualizado ...!');
    }

    public function confirmar($id)
    {
        $unidadMedida = UnidadMedida::findOrFail($id);
        return view('compras.productos.unidadmedida.confirmar', compact('unidadMedida'));
    }

    public function destroy($id)
    {
        $unidadMedida = UnidadMedida::findOrFail($id);
        $unidadMedida->Estado = '0';
        $unidadMedida->save();

        return redirect()->route('unidadmedida.index')->with('datos', 'Registro Eliminado ...!');
    }
}
