<?php

namespace App\Models\calidad;

use App\Models\calidad\AccionCorrectiva;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoConformidad extends Model
{
    use HasFactory;
    protected $table = 'no_conformidad';
    protected $primaryKey='IdNoConformidad';
    public $timestamps = false;
    protected $fillable = ['Descripcion','Fecha','Estado'];
    public function accioncorrectiva(){
        return $this->hasMany(AccionCorrectiva::class,'IdAccionCorrectiva','IdAccionCorrectiva');
    }
}
