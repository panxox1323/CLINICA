<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Http\Requests\CreateTratamientoRequest;
use Oral_Plus\Tratamiento;

class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tratamientos = Tratamiento::nombre($request->get('name'))->paginate(8);

        return view('admin.tratamientos.index', compact('tratamientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tratamientos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTratamientoRequest $request)
    {
        $tratamiento = Tratamiento::create($request->all());

        $message = $tratamiento->nombre  . ' fue creado correctamente';
        Session::flash('message', $message);
        return Redirect::route('admin.tratamiento.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tratamientos = Tratamiento::findOrFail($id);

        return view('admin.tratamientos.edit', compact('tratamientos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tratamiento = Tratamiento::findOrFail($id);
        $tratamiento->fill($request->all());
        $tratamiento->save();
        $message = $tratamiento->nombre_tratamiento. ' fue modificado correctamente';
        Session::flash('message', $message);

        return redirect()->route('admin.tratamiento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
