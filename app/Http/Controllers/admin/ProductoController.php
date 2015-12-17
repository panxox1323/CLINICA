<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Http\Requests\CreateProductoRequest;
use Oral_Plus\Http\Requests\EditProdiuctosRequest;
use Oral_Plus\Http\Requests\EditProductosRequest;
use Oral_Plus\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $productos = Producto::nombre($request->get('nombre'))->orderBy('id', 'DESC')->paginate();
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateProductoRequest $request)
    {
        $producto = new Producto($request->all());
        $producto->save();

        return redirect()->route('admin.productos.index');

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
        $producto = Producto::findOrFail($id);

        return view('admin.productos.edit', compact('producto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(EditProductosRequest $request ,$id)
    {
        $producto = Producto::findOrFail($id);
        $producto->fill($request->all());
        $producto->save();

        return redirect()->route('admin.productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        Producto::destroy($id);
        $message = $producto->nombre.' fue eliminado de la Base de Datos';
        Session::flash('message', $message);
        return redirect()->route('admin.productos.index');
    }

}
