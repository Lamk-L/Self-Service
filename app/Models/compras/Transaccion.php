<?php

namespace App\Models\compras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;
    protected $table = 'transaccion';
    protected $primaryKey = 'IdTransaccion';
    public $timestamps=false;
    protected $fillable = ['IdUsuario', 'FechaHora', 'Total'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'IdUsuario');
    }

    public function detallesTransaccion()
    {
        return $this->hasMany(DetalleTransaccion::class, 'IdTransaccion');
    }

    public function comprobante()
    {
        return $this->hasOne(Comprobante::class, 'IdTransaccion');
    }

}
