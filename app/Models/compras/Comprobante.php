<?php

namespace App\Models\compras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;
    protected $table = 'comprobante';
    protected $primaryKey = 'IdComprobante';
    public $timestamps=false;
    protected $fillable = ['IdTransaccion', 'Detalle'];

    public function transaccion()
    {
        return $this->belongsTo(Transaccion::class, 'IdTransaccion');
    }

}
