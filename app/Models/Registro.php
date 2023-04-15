<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $fillable = [
        'Fecha',
        'Hora',

        'Cliente',
        'Telefono',
        'Domicilio',
        'Correo',


        'Marca',
        'Modelo',
        'Codigo_de_desbloqueo',
        'Accesorios',
        

        'Servicio',
        'Observaciones',
        'Descripcion_de_la_falla',
    ];
}
