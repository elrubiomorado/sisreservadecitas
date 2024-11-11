<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'curp',
        'telefono',
        'fecha_nacimiento',
        'direccion',
        'user_id'
    ];

    //Relación uno a uno con la tabla de usuarios
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
