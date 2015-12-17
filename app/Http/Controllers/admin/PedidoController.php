<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Oral_Plus\DetallePedido;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Insumo;
use Oral_Plus\Pedidos;
use Oral_Plus\Proveedor;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pedidos = Pedidos::ObtenerProveedor($request->get('proveedor'))->orderBy('id', 'desc')->paginate(8);

        return view('admin.pedidos.index',compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::orderBy('nombre', 'asc')->get(['nombre', 'id']);
        $insumos     = Insumo::orderBy('nombre', 'asc')->get(['nombre', 'id']);

        return view('admin.pedidos.create', compact('proveedores', 'insumos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreatePedidoRequest $request)
    {


        DB::table('pedidos')->insert([
            'id_proveedor' => $request->input('id_proveedor'),
            'fecha'  => \Carbon\Carbon::now()->format('Y-m-d'),
            'total'  => $request->input('total')
        ]);

        $detalle = new DetallePedido($request->all());

        $pedido = Pedidos::orderBy('created_at', 'asc')->first();

        $pedidos = Pedidos::orderBy('created_at', 'desc')->first();

        $total = count($request->input('cantidad'));


        for($i=0; $i< $total; $i++)
        {
            DB::table('detalle_pedidos')->insert([
                'id_pedido' => $pedido->id,
                'id_insumo' => $request->input('id_insumo')[$i],
                'cantidad' => $request->input('cantidad')[$i],
                'precio' => $request->input('precio')[$i],
            ]);

        }

        $message = 'La Orden de Compra N° '.$pedido->id. ' fue ingresada en el sistema';
        Session::flash('message', $message);

        return redirect()->route('admin.pedido.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido   = Pedidos::where('id', $id)->first();

        $detalles = DetallePedido::where('id_pedido', $id)->paginate(8);

        return view('admin.pedidos.ver', compact('pedido', 'detalles'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = Pedidos::findOrFail($id);
        $proveedores = Proveedor::orderBy('nombre', 'asc')->get();

        return view('admin.pedidos.edit', compact('pedido', 'proveedores'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CreatePedidoRequest $request, $id)
    {
        $pedido = Pedidos::findOrFail($id);
        $pedido->fill($request->all());
        $pedido->save();


        $message = 'Se modificó correctamente la Orden de Conpra N°'. $pedido->id ;

        Session::flash('message', $message);

        return redirect()->route('admin.pedido.index');
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
