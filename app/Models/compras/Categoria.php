<?php

namespace App\Models\compras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';
    protected $primaryKey = 'IdCategoria';
    public $timestamps=false;
    protected $fillable = ['Descripcion', 'Estado'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'IdCategoria');
    }

}
