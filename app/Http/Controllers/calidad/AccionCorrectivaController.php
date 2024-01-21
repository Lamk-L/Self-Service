<?php

namespace App\Http\Controllers\calidad;

use App\Http\Controllers\Controller;
use App\Models\calidad\AccionCorrectiva;
use App\Models\calidad\NoConformidad;
use Illuminate\Http\Request;

class AccionCorrectivaController extends Controller
{
    public function index(Request $request){
        
        $AccionCorrectiva = AccionCorrectiva::where('Estado','=','1')->get();
        return view('calidad.accion_correctiva.index',compact('AccionCorrectiva'));
    }

    public function create()
    {
        $NOCONFORMIDAD = NoConformidad::where('Estado','=','1')->get();
        return view('calidad.accion_correctiva.create',compact('NOCONFORMIDAD'));
    }

    public function store (Request $request){
        $data = $request->validate([
            'IdNoConformidad'=>'required',
            'Descripcion'=>'required|max:50',
            'Resultado'=>'required|max:50',
        ],
        [
            'IdNoConformidad.required'=>'Ingrese No Conformidad',
            'Descripcion.required'=>'Ingrese el Descripcion',
            'Descripcion.max'=>'Máximo 50 caracteres para la Descripcion',
            'Resultado.required'=>'Ingrese el Resultado',
            'Resultado.max'=>'Máximo 50 caracteres para el Resultado',
        ]);
        $AccionCorrectiva = new AccionCorrectiva();
        $AccionCorrectiva->IdNoConformidad = $request->IdNoConformidad;
        $AccionCorrectiva->Descripcion = $request->Descripcion;
        $AccionCorrectiva->Resultado = $request->Resultado;
        $AccionCorrectiva->Estado = '1';
        $AccionCorrectiva->save();
        return redirect()->route('accioncorrectiva.index')->with('datos','Registro Guardado.');
        
    }

    public function edit($id)
    {
        $AccionCorrectiva=AccionCorrectiva::findOrFail($id);
        $NOCONFORMIDAD = NoConformidad::where('Estado','=','1')->get();
        return view('calidad.accion_correctiva.edit',compact('AccionCorrectiva','NOCONFORMIDAD'));
    }

    public function update(Request $request,$id){
        $data = $request->validate([
            'IdNoConformidad'=>'required',
            'Descripcion'=>'required|max:50',
            'Resultado'=>'required|max:50',
        ],
        [
            'IdNoConformidad.required'=>'Ingrese No Conformidad',
            'Descripcion.required'=>'Ingrese el Descripcion',
            'Descripcion.max'=>'Máximo 50 caracteres para la Descripcion',
            'Resultado.required'=>'Ingrese el Resultado',
            'Resultado.max'=>'Máximo 50 caracteres para el Resultado',
        ]);
        $AccionCorrectiva = AccionCorrectiva::findOrFail($id);
        $AccionCorrectiva->IdNoConformidad = $request->IdNoConformidad;
        $AccionCorrectiva->Descripcion = $request->Descripcion;
        $AccionCorrectiva->Resultado = $request->Resultado;
        $AccionCorrectiva->save();
        return redirect()->route('accioncorrectiva.index')->with('datos','Registro Actualizado.');
    }

    public function confirmar($id){
        $AccionCorrectiva = AccionCorrectiva::findOrFail($id);
        $NOCONFORMIDAD = NoConformidad::where('Estado','=','1')->get();
        return view('calidad.accion_correctiva.confirmar',compact('AccionCorrectiva','NOCONFORMIDAD'));
    }

    public function destroy($id){
        $AccionCorrectiva = AccionCorrectiva::findOrFail($id);
        $AccionCorrectiva->Estado = '0';
        $AccionCorrectiva->save();
        return redirect()->route('accioncorrectiva.index')->with('datos','Registro eliminado.');
    }
}
