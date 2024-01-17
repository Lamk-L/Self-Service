<?php

namespace App\Models\compras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubGrupo extends Model
{
    use HasFactory;
    protected $table = 'subgrupo';
    protected $primaryKey = 'IdSubGrupo';
    public $timestamps=false;
    protected $fillable = ['IdGrupo', 'NomSubGrupo', 'Estado'];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'IdGrupo');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'IdSubGrupo');
    }

}
