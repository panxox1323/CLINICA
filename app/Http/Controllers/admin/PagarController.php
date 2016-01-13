<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Oral_Plus\Consulta;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Intervencion;
use Oral_Plus\Pagos;
use Oral_Plus\User;


class PagarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagos = Pagos::fecha($request->get('fecha'))->paciente($request->get('paciente'))->orderBy('created_at', 'desc')->paginate(8);
        $pacientes = User::where('type', '!=', 'especialista')->get(['first_name', 'last_name', 'id']);

        return view('admin.pagos.index', compact('pagos', 'pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = User::where('type', '!=','Especialista')->orderBy('first_name', 'asc')->get(['first_name', 'last_name', 'id']);

        return view('admin.pagos.create', compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreatePagos2Request $request)
    {
        $pago = new Pagos($request->all());


        $usuario = User::findOrFail($pago->user_id);


        if($usuario->saldo >0 && $pago->monto<=$usuario->saldo)
        {

            $saldo = $usuario->saldo;
            $saldo2 =$usuario->saldo = $saldo - $pago->monto;
            DB::table('users')
                ->where('id', $usuario->id)
                ->update(['saldo' => $saldo2]);
            $pago = Pagos::create($request->all());

            $message = 'El Paciente '. $usuario->first_name .' '. $usuario->last_name . ' pagó un total de: '.'$'. number_format($pago->monto);
            Session::flash('message', $message);
            if(Auth::user()->type == 'admin')
            {
                return Redirect::route('admin.pagar.index');
            }
            if(Auth::user()->type == 'secretaria')
            {
                return Redirect::route('secretaria.pagar.index');
            }
        }
        else
        {
            $message =  $usuario->first_name . ' '. $usuario->last_name . ' no registra deuda en el sistema o el monto de ' . '$'. number_format($pago->monto) .' que se quiere pagar es superior al saldo: '.'$'. number_format($usuario->saldo);
            Session::flash('message', $message);

            if(Auth::user()->type == 'admin')
            {
                return Redirect::route('admin.pagar.index');
            }
            if(Auth::user()->type == 'secretaria')
            {
                return Redirect::route('secretaria.pagar.index');
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'ok';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagos = Pagos::findOrFail($id);
        $pacientes = User::where('type', '!=','Especialista')->orderBy('first_name', 'asc')->get(['first_name', 'last_name', 'id']);

        return view('admin.pagos.edit', compact('pagos', 'pacientes'));

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
        return 'ok';
    }

    public function reporte($id)
    {
        $pago  = Pagos::where('id', $id)->first();
        $date = date('d-m-Y');
        $view =  View::make('pdf.pagos.index', compact('invoice', 'pago', 'date'))->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //return $pdf->download('usuarios.pdf');
        return $pdf->stream('invoice');
    }



}
