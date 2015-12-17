<?php

namespace Oral_Plus\Http\Requests;

use Oral_Plus\Http\Requests\Request;

class EditIvaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    private $route;

    public function __Construct(Route $route)
    {

        $this->route = $route;

    }


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
            'porcentaje_iva'   => 'required|unique:ivas,porcentaje_iva,'. $this->route->getParameter('ivas'),
            'fecha_inicio'     => 'required',
            'fecha_termino'
        ];
    }
}
