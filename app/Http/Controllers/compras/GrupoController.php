<?php

namespace App\Http\Controllers\compras;

use App\Http\Controllers\Controller;
use App\Models\compras\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    const PAGINATION = 10;

    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $grupos = Grupo::where('Estado', '=', '1')
                       ->where('NomGrupo', 'like', '%' . $buscarpor . '%')
                       ->paginate(self::PAGINATION);

        return view('compras.productos.grupo.index', compact('grupos', 'buscarpor'));
    }

    public function create()
    {
        return view('compras.productos.grupo.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'NomGrupo' => 'required|max:20',
            // Otros campos y validaciones si son necesarios
        ]);

        $grupo = new Grupo();
        $grupo->NomGrupo = $request->NomGrupo;
        $grupo->Estado = '1';
        $grupo->save();

        return redirect()->route('grupo.index')->with('datos', 'Registro Nuevo Guardado ...!');
    }

    public function edit($id)
    {
        $grupo = Grupo::findOrFail($id);
        return view('compras.productos.grupo.edit', compact('grupo'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'NomGrupo' => 'required|max:20',
            // Otros campos y validaciones si son necesarios
        ]);

        $grupo = Grupo::findOrFail($id);
        $grupo->NomGrupo = $request->NomGrupo;
        $grupo->save();

        return redirect()->route('grupo.index')->with('datos', 'Registro Actualizado ...!');
    }

    public function confirmar($id)
    {
        $grupo = Grupo::findOrFail($id);
        return view('compras.productos.grupo.confirmar', compact('grupo'));
    }

    public function destroy($id)
    {
        $grupo = Grupo::findOrFail($id);
        $grupo->Estado = '0';
        $grupo->save();

        return redirect()->route('grupo.index')->with('datos', 'Registro Eliminado ...!');
    }
}
