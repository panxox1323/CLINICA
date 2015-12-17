<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Oral_Plus\detalle_Compra;
use Oral_Plus\Factura;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Http\Requests\CreateFacturaRequest;
use Oral_Plus\Insumo;
use Oral_Plus\Proveedor;

class FacturarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $detalleFactura;

    function __construct()
    {
        $this->detalleFactura = array();
    }

    public function agregarDetalle($id_insumo, $cantidad, $precio)
    {
        $this->detalleFactura[] = array(
            'id_insumo'   => $id_insumo,
            'cantidad'    => $cantidad,
            'precio'      => $precio,
        );
    }


    public function index(Request $request)
    {
        $array = array('Lista de Proveedores');
        $proveedores = Proveedor::lists('nombre', 'id')->toArray();
        array_unshift($array,$proveedores);

        $facturas = Factura::name($request->get('name'))->nombre($request->get('proveedor'))->OrderBy('created_at', 'Desc')->paginate(8);

        return view('admin.factura.index', compact('proveedores', 'facturas'));

    }


    public function create()
    {
        $data =   DB::table('proveedors')->orderBy('nombre', 'asc')->lists('nombre','id');
        $insumo = DB::table('insumos')->orderBy('nombre', 'asc')->lists('nombre', 'id');

        return view('admin.factura.create', compact('data', 'insumo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateFacturaRequest $request, Requests\CreateDetalle_FacturaRequest $request2)
    {
        $fac = new Factura($request->input());



        if($fac->numero_factura > 0)
        {

            $voucher2 = Factura::whereIn('numero_factura', [$fac->numero_factura])->get();

            $voucher = Factura::where('numero_factura', $fac->numero_factura)
                       ->where('id_proveedor', $fac->id_proveedor)
                       ->first();


            if($voucher2->count() > 0)
            {


                if($fac->id_proveedor == isset($voucher->id_proveedor) )
                {
                    $message =  'No se pudo ingresar la Factura'. $fac->numero_factura.' del Proveedor '. $fac->proveedor->nombre.' Ya se encuentra registrada';

                    Session::flash('message', $message );
                    return redirect()->route('admin.factura.index');
                }

                else
                {
                    $factura = Factura::create($request->all());

                    $facturas = Factura::orderBy('created_at', 'desc')->first();

                    $total = count($request->input('id_insumo'));


                    for($i = 0; $i< $total; $i++) {

                        DB::table('detalle__compras')->insert([
                            'id_factura' => $facturas->id,
                            'numero_factura' => $request->input('numero_factura'),

                            'id_insumo' => $request->input('id_insumo')[$i],
                            'cantidad' => $request->input('cantidad')[$i],
                            'precio' => $request->input('precio')[$i],
                        ]);
                        $id_insumo = $request->input('id_insumo')[$i];
                        $stock = Insumo::where('id', $id_insumo )->first();



                        DB::table('insumos')->where('id', $id_insumo)->update([
                            'stock'  => $stock->stock + $request->input('cantidad')[$i],
                            'precio_unitario' => $request->input('precio')[$i]
                        ]);

                    }




                    $message = 'La factura '.$factura->numero_factura. ' fue ingresada en el sistema';
                    Session::flash('message', $message);

                    return redirect()->route('admin.factura.index');
                }
            }
            else
            {
                $factura = Factura::create($request->all());

                $facturas = Factura::orderBy('created_at', 'desc')->first();

                $total = count($request->input('id_insumo'));


                for($i = 0; $i< $total; $i++) {

                    DB::table('detalle__compras')->insert([
                        'id_factura' => $facturas->id,
                        'numero_factura' => $request->input('numero_factura'),

                        'id_insumo' => $request->input('id_insumo')[$i],
                        'cantidad' => $request->input('cantidad')[$i],
                        'precio' => $request->input('precio')[$i],
                    ]);
                    $id_insumo = $request->input('id_insumo')[$i];
                    $stock = Insumo::where('id', $id_insumo )->first();



                    DB::table('insumos')->where('id', $id_insumo)->update([
                        'stock'  => $stock->stock + $request->input('cantidad')[$i],
                        'precio_unitario' => $request->input('precio')[$i]
                    ]);

                }




                $message = 'La factura '.$factura->numero_factura. ' fue ingresada en el sistema';
                Session::flash('message', $message);

                return redirect()->route('admin.factura.index');
            }




        }

        else{

            $message = 'El n&uacute;mero de la f&aacute;tura debe ser mayor a 0';
            Session::flash('message', $message);
            return redirect()->route('admin.factura.index');

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
        $factura = Factura::findOrFail($id);
        $detalles = detalle_Compra::where('id_factura', $id)->paginate(8);

        return view('admin.factura.ver', compact('factura', 'detalles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $factura = Factura::findOrFail($id);
        $data =   DB::table('proveedors')->orderBy('nombre', 'asc')->lists('nombre','id');
        $insumo = Insumo::lists('nombre', 'id');

        return view('admin.factura.edit', compact('factura', 'data', 'insumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
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
