<?php

namespace Oral_Plus\Http\Requests;

use Oral_Plus\Http\Requests\Request;

class CreateIvaRequest extends Request
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
            'porcentaje_iva'   => 'required|unique:ivas,porcentaje_iva|in:15,16,17,18,19,20',
            'fecha_inicio'     => 'required',
            'fecha_termino'
        ];
    }
}
