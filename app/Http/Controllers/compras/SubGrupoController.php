<?php

namespace App\Http\Controllers\compras;

use App\Http\Controllers\Controller;
use App\Models\compras\Grupo;
use App\Models\compras\SubGrupo;
use Illuminate\Http\Request;

class SubGrupoController extends Controller
{
    const PAGINATION = 20;

    public function index(Request $request)
    {
        $busqueda = $request->get('busqueda');
        $subgrupos = SubGrupo::where('Estado', '=', '1')
                             ->where('NomSubGrupo', 'like', '%' . $busqueda . '%')
                             ->paginate(self::PAGINATION);

        return view('compras.productos.subgrupo.index', compact('subgrupos', 'busqueda'));
    }

    public function create()
    {
        $grupos = Grupo::where('Estado', '=', '1')->get();
        return view('compras.productos.subgrupo.create', compact('grupos'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'IdGrupo' => 'required',
            'NomSubGrupo' => 'required|unique:subgrupo,NomSubGrupo,NULL,id,IdGrupo,' . $request->IdGrupo,
        ]);

        $subgrupo = new SubGrupo();
        $subgrupo->IdGrupo = $request->IdGrupo;
        $subgrupo->NomSubGrupo = $request->NomSubGrupo;
        $subgrupo->Estado = '1';
        $subgrupo->save();

        return redirect()->route('subgrupo.index')->with('datos', 'Registro Nuevo Guardado ...!');
    }

    public function edit($id)
    {
        $subgrupo = SubGrupo::findOrFail($id);
        $grupos = Grupo::where('Estado', '=', '1')->get();
        return view('compras.productos.subgrupo.edit', compact('subgrupo', 'grupos'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'IdGrupo' => 'required',
            'NomSubGrupo' => 'required|unique:subgrupo,NomSubGrupo,NULL,id,IdGrupo,' . $request->IdGrupo,
        ]);

        $subgrupo = SubGrupo::findOrFail($id);
        $subgrupo->IdGrupo = $request->IdGrupo;
        $subgrupo->NomSubGrupo = $request->NomSubGrupo;
        $subgrupo->save();

        return redirect()->route('subgrupo.index')->with('datos', 'Registro Actualizado ...!');
    }

    public function confirmar($id)
    {
        $subgrupo = SubGrupo::findOrFail($id);
        $grupos = Grupo::where('Estado', '=', '1')->get();
        return view('compras.productos.subgrupo.confirmar', compact('subgrupo', 'grupos'));
    }

    public function destroy($id)
    {
        $subgrupo = SubGrupo::findOrFail($id);
        $subgrupo->Estado = '0';
        $subgrupo->save();

        return redirect()->route('subgrupo.index')->with('datos', 'Registro Eliminado ...!');
    }

    public function obtenerSubGrupos($idGrupo)
    {
        $subgrupos = SubGrupo::where('IdGrupo', $idGrupo)->get();
        return response()->json($subgrupos);
    }
}
