<?php

namespace Oral_Plus\Http\Controllers\admin;

use Bican\Roles\Models\Role;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Oral_Plus\Diagnostico;
use Oral_Plus\Especialidad;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Oral_Plus\Http\Requests\CreateUserRequest;
use Oral_Plus\Http\Requests\EditUserRequest;
use Oral_Plus\User;
use Redirect;

class UsersController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->beforeFilter('@findUser', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findUser(Route $route)
    {
        $this->user = User::findOrFail($route->getParameter('users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    public function index(Request $request)
    {
        $users = User::name($request->get('name'))->type($request->get('type'))->orderBy('id', 'DESC')->paginate(8);


        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $especialidades = Especialidad::lists('especialidad', 'id')->toArray();

        return View('admin.users.create', compact('especialidades'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {

        $user = User::create($request->all());
        $user->attachRole($request->get('type'));

        $message = $user->first_name . ' ' . $user->last_name . ' fue creado correctamente';
        Session::flash('message', $message);
        if(Auth::user()->type == 'admin')
        {
            return Redirect::route('admin.users.index');
        }
        if(Auth::user()->type == 'secretaria')
        {
            return Redirect::route('secretaria.users.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $users = User::findOrFail($id);
        return view('admin.users.pagar', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */

    public function edit($id)
    {
        $data2 = ['especialidad' => DB::table('especialidades')->lists('especialidad', 'id')];
        $especialidades = Especialidad::lists('especialidad', 'id');
        $roles  = Role::lists('name', 'id' );
        $selected = array();


        $usuario = User::findOrFail($id);
        return View('admin.users.edit', $data2, compact('roles', 'especialidades', 'selected'))->with('user', $this->user);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(EditUserRequest $request, $id)
    {
        $especialista = User::findOrFail($id);
        $especialista->fill($request->all());
        $especialista->save();


        $message = $this->user->first_name . ' ' . $this->user->last_name . ' fue editado en la Base de Datos';

        Session::flash('message', $message);

        if(Auth::user()->type == 'admin')
        {
            return redirect()->route('admin.users.index');
        }
        if(Auth::user()->type == 'secretaria')
        {
            return redirect()->route('secretaria.users.index');
        }
        if(Auth::user()->type == 'especialista')
        {
            return redirect()->route('especialista.users.index');
        }
        if(Auth::user()->type == 'user')
        {
            return redirect()->route('user.users.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        return 'Ok';
    }


    public function verHistorial($id)
    {
        $paciente = User::findOrFail($id);
        $diagnosticos = Diagnostico::where('id_usuario', $id)->paginate();

        return view('admin.historiales.index', compact('paciente', 'diagnosticos'));
    }
}
