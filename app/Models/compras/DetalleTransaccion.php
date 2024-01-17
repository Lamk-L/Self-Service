<?php

namespace App\Models\compras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTransaccion extends Model
{
    use HasFactory;
    protected $table = 'detalle_transaccion';
    public $timestamps=false;
    protected $fillable = ['IdTransaccion', 'IdProducto', 'Cantidad',
     'PrecioUnidad'];

    public function transaccion()
    {
        return $this->belongsTo(Transaccion::class, 'IdTransaccion');
    }
    
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'IdProducto');
    }
     
}
