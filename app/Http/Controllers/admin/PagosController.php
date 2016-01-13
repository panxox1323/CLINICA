<?php

namespace Oral_Plus\Http\Controllers\admin;

use DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Oral_Plus\Consulta;
use Oral_Plus\Factura;
use Oral_Plus\Horas_agendadas;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Pagos;
use Oral_Plus\User;

class PagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pagar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pago = Pagos::create($request->all());

        $message = 'Pago efectuado de: '. $pago->monto . ' al usuario: '. $pago->user->first_name. ' '. $pago->user->last_name;
        Session::flash('message', $message);
        return Redirect::route('admin.users.index');
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
       return 'ok';
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

    public function pagos($id)
    {
        $consultas = Horas_agendadas::where('id_usuario', $id)->groupBy('fecha', 'id_horas')->orderBy('fecha', 'asc')->get();
        $pagos     = Pagos::where('user_id', $id)->orderBy('fecha', 'desc')->get();
        $usuario =   User::findOrFail($id);


        return view('admin.pagar.index', compact('usuario', 'consultas', 'pagos'));
    }


    public function pagando($id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.pagar.create', compact('usuario'));
    }



    public function pagado(Requests\CreatePagoRequest $request,$id)
    {
        $pago = new Pagos($request->all());
        $usuario = User::findOrFail($id);

        if($usuario->saldo >0 && $pago->monto<=$usuario->saldo)
        {

            $saldo = $usuario->saldo;
            $saldo2 =$usuario->saldo = $saldo - $pago->monto;
            DB::table('users')
                ->where('id', $usuario->id)
                ->update(['saldo' => $saldo2]);
            $pago = Pagos::create($request->all());

            $message = 'El Paciente '. $usuario->first_name .' '. $usuario->last_name . ' pago un total de: '.'$'. number_format($pago->monto);
            Session::flash('message', $message);
            return Redirect::route('admin.pagar.index');
        }
        else
        {
            $message =  $usuario->first_name . ' '. $usuario->last_name . ' no registra deuda en el sistema o el monto de ' . '$'. number_format($pago->monto) .' que se quiere pagar es superior al saldo: '.'$'. number_format($usuario->saldo);
            Session::flash('message', $message);

            return Redirect::route('admin.users.index');


        }
    }

    public function pagosEfectuados(Request $request)
    {
        $pagos = Pagos::fecha($request->get('fecha'))->orderBy('id', 'desc')->paginate(12);

        return view('admin.pagos.reportePagos', compact('pagos'));
    }

    public function reportePagos(Requests\PdfPagosRequest $request)
    {
        $consulta = new Factura($request->input());
        $fecha    = $consulta->fecha;
        $pagos    = Pagos::where('fecha', $fecha)->get();
        $suma = 0;
        foreach ($pagos as $pago)
        {
            $suma = $suma + $pago->monto;
        }


        $view =  View::make('pdf.reportePagos.index', compact('invoice', 'fecha', 'suma'))->with('pagos', $pagos)->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //return $pdf->download('usuarios.pdf');
        return $pdf->stream('invoice');
    }
}
