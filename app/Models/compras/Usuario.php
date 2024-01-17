<?php

namespace App\Models\compras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'IdUsuario';
    public $timestamps=false;
    protected $fillable = ['dni', 'rol', 'nombres', 'apellidos', 'email',
     'contraseña', 'Estado'];
    
    public function transacciones()
    {
        return $this->hasMany(Transaccion::class, 'IdUsuario');
    }
}
