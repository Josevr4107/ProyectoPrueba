<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nombre' => ['required', 'string','max:100'],
            'cinit' => ['required','string', 'max:30','unique:clientes,cinit'],
            'direccion' => ['nullable', 'string', 'max:200'],
            'cel1' => ['required', 'string', 'max:20'],
            'cel2' => ['nullable', 'string', 'max:20'],
            'correo' => ['nullable', 'string', 'email', 'max:100', 'unique:clientes,correo']

        ];
    }
}
