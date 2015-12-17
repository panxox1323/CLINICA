<?php

namespace Oral_Plus\Http\Requests;

use Illuminate\Routing\Route;
use Oral_Plus\Http\Requests\Request;

class EditEspecialidadRequest extends Request
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
            'especialidad'    => 'required|unique:especialidades,especialidad,'. $this->route->getParameter('especialidades')

        ];
    }
}
