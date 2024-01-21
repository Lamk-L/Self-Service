<?php

namespace App\Models\calidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\calidad\NoConformidad;

class AccionCorrectiva extends Model
{
    use HasFactory;
    protected $table = 'accion_correctiva';
    protected $primaryKey='IdAccionCorrectiva';
    public $timestamps = false;
    protected $fillable = ['IdNoConformidad','Descripcion','Resultado','Estado'];
    
    public function NoConformidad(){
        return $this->hasOne(NoConformidad::class,'IdNoConformidad','IdNoConformidad');
    }
}
