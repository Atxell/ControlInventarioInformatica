<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEquipoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'codigo_activo' => 'required|unique:equipos|max:50',
            'tipo_id' => 'required|exists:tipos_equipo,id',
            'marca_id' => 'required|exists:marcas,id',
            'serial' => 'required|unique:equipos|max:100',
            'estado_id' => 'required|exists:estados_equipo,id',
            'fecha_adquisicion' => 'nullable|date',
            'valor' => 'nullable|numeric'
        ];
    }
}
