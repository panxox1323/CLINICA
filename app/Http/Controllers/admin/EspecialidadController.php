<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Oral_Plus\Especialidad;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Http\Requests\CreateEspecialidadRequest;
use Oral_Plus\Http\Requests\EditEspecialidadRequest;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $especialidades = Especialidad::especialidad($request->get('especialidad'))->orderBy('id', 'DESC')->paginate(8);
        $lista= DB::table('especialidades')->orderBy('especialidad', 'asc')->lists('especialidad', 'id');
        return view('admin.especialidades.index', compact('especialidades', 'lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.especialidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateEspecialidadRequest $request)
    {
        $especialidad = Especialidad::create($request->all());

        $message = $especialidad->especialidad.' fue creado correctamente';
        Session::flash('message', $message);
        if(Auth::user()->type == 'admin')
        {
            return Redirect::route('admin.especialidades.index');
        }
        if(Auth::user()->type == 'secretaria')
        {
            return Redirect::route('secretaria.especialidades.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(CreateEspecialidadRequest $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $especialidad = Especialidad::findOrFail($id);
        return view('admin.especialidades.edit', compact('especialidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(EditEspecialidadRequest $request,$id)
    {
        $especialidad = Especialidad::findOrFail($id);
        $especialidad->fill($request->all());
        $especialidad->save();

        return redirect()->route('admin.especialidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(CreateEspecialidadRequest $request,$id)
    {

    }



}
