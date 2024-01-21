<?php

namespace App\Http\Controllers\calidad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\calidad\NoConformidad;

class NoConformidadController extends Controller
{
    public function index(Request $request){
    
        $NoConformidad = NoConformidad::where('estado','=','1')->get();
        return view('calidad.no_conformidad.index',compact('NoConformidad'));
    }

    public function create()
    {
        return view('calidad.no_conformidad.create');
    }

    public function store (Request $request){
        $data = $request->validate([
            'Descripcion'=>'required',
            'Fecha'=>'required',
        ],
        [
            'Descripcion.required'=>'Ingrese Descripcion',
            'Fecha.required'=>'Ingrese Fecha',
        ]);
        $NoConformidad = new NoConformidad();
        $NoConformidad->Descripcion = $request->Descripcion;
        $NoConformidad->Fecha = $request->Fecha;
        $NoConformidad->Estado = '1';
        $NoConformidad->save();
        return redirect()->route('NoConformidad.index')->with('datos','Registro Guardado.');   
    }

    public function edit($id)
    {
        $NoConformidad=NoConformidad::findOrFail($id);
        return view('calidad.no_conformidad.edit',compact('NoConformidad'));
    }

    public function update(Request $request,$id){
        $data = $request->validate([
            'Descripcion'=>'required',
            'Fecha'=>'required',
        ],
        [
            'Descripcion.required'=>'Ingrese Descripcion',
            'Fecha.required'=>'Ingrese Fecha',
        ]);
        $NoConformidad = NoConformidad::findOrFail($id);
        $NoConformidad->Descripcion = $request->Descripcion;
        $NoConformidad->Fecha = $request->Fecha;
        $NoConformidad->save();
        return redirect()->route('NoConformidad.index')->with('datos','Registro Actualizado.');
    }

    public function confirmar($id){
        $NoConformidad = NoConformidad::findOrFail($id);
        return view('calidad.no_conformidad.confirmar',compact('NoConformidad'));
    }

    public function destroy($id){
        $NoConformidad = NoConformidad::findOrFail($id);
        $NoConformidad->Estado = '0';
        $NoConformidad->save();
        return redirect()->route('NoConformidad.index')->with('datos','Registro eliminado.');
    }
}
