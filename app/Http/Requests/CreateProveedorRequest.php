<?php

namespace Oral_Plus\Http\Requests;

use Oral_Plus\Http\Requests\Request;

class CreateProveedorRequest extends Request
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
            'nombre'           => 'required',
            'direccion'        => 'required',
            'telefono'         => 'required|numeric|digits_between:7,12',
            'email'            => 'required|email',
            'ciudad'           => 'required'
        ];
    }
}
