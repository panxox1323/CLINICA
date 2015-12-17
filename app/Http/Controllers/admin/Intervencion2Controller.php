<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Intervencion;
use Oral_Plus\User;

class Intervencion2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.intervencion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $intervenciones = DB::table('intervencions')
                            ->join('consultas', 'intervencions.id_consulta', '=', 'consultas.id')
                            ->join('users', 'consultas.id', '=', 'users.id')
                            ->join('tratamientos', 'intervencions.id_tratamiento', '=', 'tratamientos.id')
                            ->select('users.*', 'intervencions.*', 'consultas.*', 'tratamientos.*')
                            ->where('users.id_especialidad', $id)
                            ->get();

        
        $users = User::Where('id', $id)->first();
        return view('admin.intervenciones.index', compact('users', 'intervenciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
