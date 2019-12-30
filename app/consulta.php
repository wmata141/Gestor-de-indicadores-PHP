<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consulta extends Model
{
    protected $fillable = [//permite que se llenen los campos de la base de datos
        'motivo','nombre', 'apellido','situacion_actual',
        'plan_tratamiento', 'hallazgo', 'id_trabajador',
        'impresiones', 'antecedentes', 'ta', 'mm', 'fc',
        'rp', 'peso', 'imc', 'talla', 'sugerencias',
        'referido', 'reposo_ini', 'reposo_fin', 'tipo_consulta',
         'cedula', 'edad', 'dias', 'motivo2', 'impresiones2', 'impresiones3',
         'plan_tratamiento1', 'plan_tratamiento2', 'plan_tratamiento3', 'plan_tratamiento4',
         'plan_tratamiento5', 'plan_tratamiento6', 'plan_tratamiento7', 'plan_tratamiento8', 
         'doctor',];

     public function enfermedades(){
        return $this->belongsTo(enfermedad::class);
    }

     public function tratamientos(){
        return $this->belongsTo(tratamiento::class);
    }
}
