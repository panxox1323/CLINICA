<?php

namespace Oral_Plus\Http\Requests;

use Oral_Plus\Http\Requests\Request;

class EditTratamientoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool

     */

    private $route;

    /**
     * @param Route $route
     */
    public function __construct(Route $route)
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
            'nombre_tratamiento'      => 'required|unique:tratamientos,'. $this->route->getParameter('tratamientos'),
            'valor_tratamiento'       => 'required'

        ];
    }
}
