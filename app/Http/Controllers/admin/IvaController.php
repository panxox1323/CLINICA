<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Http\Requests\CreateIvaRequest;
use Oral_Plus\Http\Requests\EditIvaRequest;
use Oral_Plus\Iva;

class IvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(\Illuminate\Http\Request $request)
    {
        $ivas = Iva::Porcentaje($request->get('porcentaje'))->orderBy('id', 'DESC')->paginate();

        return view('admin.ivas.index', compact('ivas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.ivas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateIvaRequest $request)
    {

        $iva = Iva::create($request->all());

        return \Redirect::route('admin.ivas.index', compact('iva'));
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
        $iva = Iva::findOrFail($id);

        return view('admin.ivas.edit', compact('iva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(EditIvaRequest $request, $id)
    {
        $iva = Iva::findOrFail($id);

        $iva->fill($request->all());

        $iva->save();

        return redirect()->route('admin.ivas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $iva = Iva::findOrFail($id);

        $iva->delete();

        Session::flash('message', $iva->porcentaje_iva ." % de IVA fue eliminado de la base de datos");

        return redirect()->route('admin.ivas.index');
    }

}
