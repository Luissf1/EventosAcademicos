<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre_evento'=> 'required|max:155|min:2',
            'enlace_evento'=> 'required|max:155|min:2',
            'fecha_evento'=> 'required',
            'tipo_evento_id'=> 'required',
        ];
    }
}
