<?php

namespace App\Models\compras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $table = 'marca';
    protected $primaryKey = 'IdMarca';
    public $timestamps=false;
    protected $fillable = ['NomMarca', 'Estado'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'IdMarca');
    }

}
