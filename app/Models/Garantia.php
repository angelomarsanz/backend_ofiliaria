<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garantia extends Model
{
    use HasFactory;

    protected $fillable = [
        'aseguradora',
        'id_propiedad',
        'nombre_propiedad',
        'direccion_propiedad',
        'tipo_propiedad', 
        'moneda_propiedad', 
        'costo_alquiler', 
        'persona', 
        'nombres_arrendatario', 
        'apellidos_arrendatario', 
        'email_arrendatario', 
        'telefono_arrendatario', 
        'monto_ingreso', 
        'ingreso', 
        'sueldo', 
        'identidad',
        'rec_sueldo',
        'contador_rec_sueldo',
        'dgi',
        'contador_dgi',
        'estatus_garantia',
        'estatus_registro'
    ];
}
