<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Http\Requests\CreateTurnoRequest;
use Oral_Plus\Iva;
use Oral_Plus\Turno;
use Redirect;

class TurnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $turnos = Turno::orderBy('id', 'DESC')->paginate();
        return view('admin.turnos.index', compact('turnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.turnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateTurnoRequest $turnoRequest)
    {
        $iva = Iva::create($turnoRequest->all());

        return Redirect::route('admin.turnos.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
