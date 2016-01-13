<?php

namespace Oral_Plus\Http\Requests;

use Illuminate\Routing\Route;
use Oral_Plus\Http\Requests\Request;

class EditProveedorRequest extends Request
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

            'nombre'           => 'required|unique:proveedors,nombre,'. $this->route->getParameter('proveedores'),
            'direccion'        => 'required',
            'telefono'         => 'required',
            'email'            => 'required',
        ];
    }
}
