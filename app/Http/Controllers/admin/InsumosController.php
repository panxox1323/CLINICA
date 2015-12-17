<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Http\Requests\CreateInsumoRequest;
use Oral_Plus\Http\Requests\EditInsumoRequest;
use Oral_Plus\Insumo;

class InsumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $insumo = Insumo::nombre($request->get('nombre'))->orderBy('id', 'DESC')->paginate(8);

        return view('admin.insumos.index', compact('insumo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.insumos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateInsumoRequest $request)
    {
        $insumo = Insumo::create($request->all());
        $message = $insumo->nombre.' fue creado correctamente';
        Session::flash('message', $message);

        return redirect()->route('admin.insumos.index');
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
        $insumo = Insumo::findOrFail($id);
        return view('admin.insumos.edit', compact('insumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(EditInsumoRequest $request, $id)
    {
        $insumo = Insumo::findOrFail($id);
        $insumo->fill($request->all());
        $insumo->save();
        $message = $insumo->nombre.' fue modificado correctamente';
        Session::flash('message', $message);

        return redirect()->route('admin.insumos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $insumo = Insumo::findOrfail($id);
        Insumo::destroy($id);

        $message = $insumo->nombre.' fue borrado de la Base de Datos';

        Session::flash('message', $message);

        return redirect()->route('admin.insumos.index');
    }

}
