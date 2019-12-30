<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreHistoria extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            /*'tipo_id' => 'required',
            'departamento_id' => 'required',
            'utilizadoPor' => 'required|min:3|max:100',
            'otrasEspecificaciones' => 'max:1000',
            'frecuenciaMantenimiento' => 'required',
            'image' => 'image'
*/

            'nombre'=> 'required|max:50',
            'telefono' => 'max:20',
            'telefono1' => 'max:20',
            'mano_domin' => 'mano_domin',
            'grupo_sang' => 'grupo_sang',
            'fecha_nac' => 'max:20',
            'estado_civil' => 'max:10',
            'en_caso_emerg' => 'max:200',
            'cedula' => 'max:10',,
            'apellido' => 'required|max:50',
            'cargo' => 'max:15',
            'gerencia' => 'max:15',
            'supervisor' => 'max:50',
            'ficha' => 'max:20',
            'horario' =>'max:15',
            'nivel_educ' => 'max:15',
            't_pantalon' => 'max:2',
            't_camisa' => 'max:1',
            'zapato' => 'max:2',
            'direccion' => 'max:200',
            'primaria' => 'max:50',
            't_primaria' => 'max:50',
            'secundaria' => 'max:50',
            't_secundaria' => 'max:50',
            'univ' => 'max:50',
            't_univ' => 'max:50',
            'dip1' => 'max:50',
            't_dip1' => 't_dip1',
            'dip2' => 'max:50',
            't_dip2' => 'max:50'

        ];
    }

    
    

}