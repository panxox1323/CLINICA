<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Http\Requests\CreateEspecialistaRequest;
use Oral_Plus\Http\Requests\CreateUserRequest;
use Oral_Plus\User;

class EspecialistaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $especialistas = User::name($request->get('name'))->filtro($request->get('filtro'))->type($request->get('type'))->orderBy('id', 'DESC')->paginate(8);

        return view('admin.especialista.index', compact('especialistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.especialista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateEspecialistaRequest $request
     * @return Response
     */
    public function store(CreateEspecialistaRequest $request)
    {
        $especialista = new User($request->all());
        $especialista->save();

        $message = $especialista->nombres.' '.$especialista->apellidos.' fue creado correctamente';
        Session::flash('message', $message);
        return \Redirect::route('admin.especialistas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $especialistas = User::findOrFail($id);
        return view('admin.especialista.edit', compact('especialistas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CreateUserRequest $request)
    {
        $especialista = User::findOrFail($id);
        $especialista->fill($request->all());
        $especialista->save();

        return redirect()->route('admin.especialistas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return '7777';
    }

}
