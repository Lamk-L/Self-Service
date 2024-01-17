<?php

namespace App\Models\compras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    use HasFactory;
    protected $table = 'unidadmedida';
    protected $primaryKey = 'IdUnidadMedida';
    public $timestamps=false;
    protected $fillable = ['NomUnidadMedida', 'Estado'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'IdUnidadMedida');
    }

}
