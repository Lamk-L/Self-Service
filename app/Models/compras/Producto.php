<?php

namespace App\Models\compras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $primaryKey = 'IdProducto';
    public $timestamps=false;
    protected $fillable = ['Descripcion', 'IdSubGrupo', 'IdGrupo',
     'IdMarca', 'IdUnidadMedida', 'Modelo', 'Material', 'Medida', 'Color',
      'PrecioUnitario', 'StockDisponible', 'IdCategoria', 'Estado'];
    
    public function subgrupo()
    {
        return $this->belongsTo(Subgrupo::class, 'IdSubGrupo');
    }
    
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'IdGrupo');
    }
    
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'IdMarca');
    }
    
    public function unidadMedida()
    {
        return $this->belongsTo(UnidadMedida::class, 'IdUnidadMedida');
    }
    
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'IdCategoria');
    }
    
    public function detallesTransaccion()
    {
        return $this->hasMany(DetalleTransaccion::class, 'IdProducto');
    }
      
}
