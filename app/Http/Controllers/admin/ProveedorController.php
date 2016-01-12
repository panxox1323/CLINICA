<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Http\Requests\CreateProveedorRequest;
use Oral_Plus\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $proveedores = Proveedor::nombre($request->get('nombre'))->giro($request->get('giro'))->OrderBy('id', 'DESC')->paginate(7);

        return view('admin.proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateProveedorRequest $request)
    {
        $proveedor = Proveedor::create($request->all());
        $message = $proveedor->nombre. ' fue creado correctamente';
        Session::flash('message', $message);
        if(Auth::user()->type == 'admin')
        {
            return redirect()->route('admin.proveedores.index');
        }
        if(Auth::user()->type == 'secretaria')
        {
            return redirect()->route('secretaria.proveedores.index');
        }

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
        $proveedor = Proveedor::findOrFail($id);
        return view('admin.proveedores.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(CreateProveedorRequest $request, $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->fill($request->all());
        $proveedor->save();
        $message = $proveedor->nombre. ' fue modificado correctamente';
        Session::flash('message', $message);
        if(Auth::user()->type == 'admin')
        {
            return redirect()->route('admin.proveedores.index');
        }
        if(Auth::user()->type == 'secretaria')
        {
            return redirect()->route('secretaria.proveedores.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        Proveedor::destroy($id);
        $message = $proveedor->nombre.' fue eliminado de la Base de Datos';
        Session::flash('message', $message);
        return redirect()->route('admin.proveedores.index');
    }

}
