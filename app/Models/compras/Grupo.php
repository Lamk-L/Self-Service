<?php

namespace App\Models\compras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = 'grupo';
    protected $primaryKey = 'IdGrupo';
    public $timestamps=false;
    protected $fillable = ['NomGrupo', 'Estado'];

    public function subgrupos()
    {
        return $this->hasMany(Subgrupo::class, 'IdGrupo');
    }

}
