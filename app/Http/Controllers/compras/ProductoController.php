<?php

namespace App\Http\Controllers\compras;

use App\Http\Controllers\Controller;
use App\Models\compras\Categoria;
use App\Models\compras\Grupo;
use App\Models\compras\Marca;
use App\Models\compras\Producto;
use App\Models\compras\SubGrupo;
use App\Models\compras\UnidadMedida;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    const PAGINATION = 20;

    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $productos = Producto::where('Estado', '=', '1')
                            ->where('Descripcion', 'like', '%' . $buscarpor . '%')
                            ->paginate(self::PAGINATION);

        return view('compras.productos.index', compact('productos', 'buscarpor'));
    }

    public function create()
    {
        $grupos = Grupo::where('Estado', '=', '1')->get();
        $subgrupos = SubGrupo::where('Estado', '=', '1')->get();
        $marcas = Marca::where('Estado', '=', '1')->get();
        $unidadesMedida = UnidadMedida::where('Estado', '=', '1')->get();
        $categorias = Categoria::where('Estado', '=', '1')->get();

        return view('compras.productos.create', compact('grupos', 'subgrupos', 'marcas', 'unidadesMedida', 'categorias'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            // Validar los campos aquí
        ], [
            // Mensajes de validación aquí
        ]);

        $producto = new Producto();
        // Asignar los valores de los campos aquí
        $producto->Descripcion = $request->Descripcion;
        $producto->IdGrupo = $request->IdGrupo;
        $producto->IdSubGrupo = $request->IdSubGrupo;
        $producto->Modelo = $request->Modelo;
        $producto->Material = $request->Material;
        $producto->IdMarca = $request->IdMarca;
        $producto->IdUnidadMedida = $request->IdUnidadMedida;
        $producto->Medida = $request->Medida;
        $producto->Color = $request->Color;
        $producto->PrecioUnitario = $request->PrecioUnitario;
        $producto->StockDisponible = $request->StockDisponible;
        $producto->idcategoria = $request->idcategoria;
        $producto->Estado = '1';
        $producto->save();

        return redirect()->route('producto.index')->with('datos', 'Registro Nuevo Guardado ...!');
    }

    public function show($id)
    {
        // Puede implementar la vista de detalle si es necesario
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $grupos = Grupo::where('Estado', '=', '1')->get();
        $subgrupos = SubGrupo::where('Estado', '=', '1')->get();
        $marcas = Marca::where('Estado', '=', '1')->get();
        $unidadesMedida = UnidadMedida::where('Estado', '=', '1')->get();
        $categorias = Categoria::where('Estado', '=', '1')->get();

        return view('compras.productos.edit', compact('producto', 'grupos', 'subgrupos', 'marcas', 'unidadesMedida', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate([
            // Validar los campos aquí
        ], [
            // Mensajes de validación aquí
        ]);

        $producto = Producto::findOrFail($id);
        // Actualizar los valores de los campos aquí
        $producto->Descripcion = $request->Descripcion;
        $producto->IdGrupo = $request->IdGrupo;
        $producto->IdSubGrupo = $request->IdSubGrupo;
        $producto->Modelo = $request->Modelo;
        $producto->Material = $request->Material;
        $producto->IdMarca = $request->IdMarca;
        $producto->IdUnidadMedida = $request->IdUnidadMedida;
        $producto->Medida = $request->Medida;
        $producto->Color = $request->Color;
        $producto->PrecioUnitario = $request->PrecioUnitario;
        $producto->StockDisponible = $request->StockDisponible;
        $producto->idcategoria = $request->idcategoria;
        $producto->save();

        return redirect()->route('producto.index')->with('datos', 'Registro Actualizado ...!');
    }

    public function confirmar($id)
    {
        $producto = Producto::findOrFail($id);
        $grupos = Grupo::where('Estado', '=', '1')->get();
        $subgrupos = SubGrupo::where('Estado', '=', '1')->get();
        $marcas = Marca::where('Estado', '=', '1')->get();
        $unidadesMedida = UnidadMedida::where('Estado', '=', '1')->get();
        $categorias = Categoria::where('Estado', '=', '1')->get();

        return view('compras.productos.confirmar', compact('producto', 'grupos', 'subgrupos', 'marcas', 'unidadesMedida', 'categorias'));
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->Estado = '0';
        $producto->save();

        return redirect()->route('producto.index')->with('datos', 'Registro Eliminado ...!');
    }
}
