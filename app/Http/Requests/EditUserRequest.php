<?php

namespace Oral_Plus\Http\Requests;

use Illuminate\Routing\Route;
use Oral_Plus\Http\Requests\Request;

class EditUserRequest extends Request
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
        return[

            'email'              => 'required|unique:users,email,'. $this->route->getParameter('users'),
            'first_name'         => 'required',
            'last_name'          => 'required',
            'password'           => '',
            'type'               => 'required||in:user,admin,especialista,secretaria',
            'run'                => 'required|min:8',
            'telefono'           => 'required|numeric|min:7',
            'fecha_nacimiento'   => 'date'

        ];
    }

}
