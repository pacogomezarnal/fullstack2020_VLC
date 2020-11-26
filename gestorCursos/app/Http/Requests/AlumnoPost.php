<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido1' => 'required',
            'apellido2' => 'required',
            'correo' => 'required|unique:App\Models\Alumno,correo'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {

        return [
            'nombre.required' => 'El nombre está vacío',
            'apellido1.required' => 'El primer apellido está vacío',
            'apellido2.required' => 'El segundo apellido está vacío',
            'correo.required' => 'El correo está vacío',
            'correo.unique' => 'El correo que se está utilizando ya existe en la DB'
        ];
    }
}
