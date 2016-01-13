<?php

namespace Oral_Plus\Http\Controllers\admin;

use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Oral_Plus\Detalle_diagnostico;
use Oral_Plus\Diagnostico;
use Oral_Plus\Especialista;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Proveedor;
use Oral_Plus\Tratamiento;
use Oral_Plus\User;

class DiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $requests)
    {
        $diagnosticos   = Diagnostico::paciente($requests->get('paciente'))->fecha($requests->get('fecha'))->orderBy('id', 'desc')->paginate(8);
        $especialistas  = User::where('type', 'especialista')->orderby('first_name', 'asc')->get(['first_name', 'last_name','id']);
        $pacientes      = User::where('type', '!=', 'especialista')->orderBy('first_name', 'asc')->get(['first_name', 'last_name', 'id']);

        return view('admin.diagnostico.index', compact('diagnosticos', 'especialistas', 'pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes     = User::where('type','!=', 'Especialista')->get(['first_name', 'last_name', 'id']);
        $especialistas = User::where('type', 'Especialista')->get(['first_name', 'last_name', 'id']);
        $tratamientos  = Tratamiento::all();
        $id = Auth::user()->id;
        $especialista   = User::where('type', 'especialista')->where('id', $id)->get();

        return view('admin.diagnostico.create', compact('pacientes', 'especialistas', 'tratamientos', 'especialista'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateDiagnosticoRequest $request)
    {
        $diagnostico = Diagnostico::create($request->all());
        $diagnosticos = Diagnostico::orderBy('created_at', 'desc')->first();

        $total = count($request->input('precio'));

        for($i=0; $i< $total; $i++)
        {
            DB::table('detalle_diagnostico')->insert([
                'id_diagnostico'   => $diagnosticos->id,
                'id_tratamiento'   => $request->input('id_tratamiento')[$i],
                'precio'           => $request->input('precio')[$i],
                'cantidad'         => $request->input('cantidad')[$i]
            ]);
        }

        $message = 'El Diagnostico '.$diagnosticos->id. ' fue ingresada en el sistema';
        Session::flash('message', $message);
        if(Auth::user()->type == 'admin')
        {
            return redirect()->route('admin.diagnostico.index');
        }
        if(Auth::user()->type == 'secretaria')
        {
            return redirect()->route('secretaria.diagnostico.index');
        }
        if(Auth::user()->type == 'especialista')
        {
            return redirect()->route('especialista.diagnostico.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $diagnostico = Diagnostico::findOrFail($id);

        $detalles     = Detalle_diagnostico::where('id_diagnostico', $id)->paginate(8);

        return view('admin.diagnostico.ver', compact('diagnostico', 'detalles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalle = Detalle_diagnostico::findOrfail($id);
        $det     = DB::table('detalle_diagnostico')->lists('estado','id');


        $tratamientos = DB::table('tratamientos')->orderBy('nombre', 'asc')->lists('nombre', 'id');



        return view('admin.diagnostico.editar_detalle', compact('detalle', 'tratamientos', 'det'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\editDiagnosticoRequest $request, $id)
    {
        $detalle = Detalle_diagnostico::findOrFail($id);
        dd($detalle);
        $detalle->fill($request->all());
        $detalle->save();

        return redirect()->route('admin.diagnostico.index');
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

    public function cambiarEstado($id, $usuario)
    {
        $detalle = Detalle_diagnostico::findOrfail($id);

        $user = User::findOrFail($usuario);

        $saldo = $user->saldo;


        DB::table('detalle_diagnostico')->where('id', $id)->update([
            'estado'  => 'realizada'
        ]);


        DB::table('users')->where('id', $user->id)->update([
            'saldo'   => $saldo + $detalle->precio,
        ]);



        return redirect()->back();
    }

    public function verDetalle($id)
    {
        $detalles = Detalle_diagnostico::where('id_diagnostico', $id)->orderBy('id', 'asc')->paginate();

        $diagnostico = Diagnostico::findOrFail($id);

        return view('admin.historiales.verDetalles', compact('detalles', 'diagnostico'));
    }

    public function generarPdf($id)
    {
        $diagnostico = Diagnostico::where('id', $id)->first();
        $detalles = Detalle_diagnostico::where('id_diagnostico', $id)->get();
        $view =  View::make('pdf.Diagnosticos.index', compact('invoice', 'detalles', 'diagnostico'));
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //return $pdf->download('usuarios.pdf');
        return $pdf->stream('invoice');

    }


    public function paciente(Request $request)
    {
        $id = Auth::user()->id;
        $diagnosticos = Diagnostico::especialista($request->get('especialista'))->fecha($request->get('fecha'))->Where('id_usuario', $id)->orderBy('fecha', 'asc')->paginate(8);
        $especialistas = User::where('type', 'especialista')->orderBy('first_name', 'asc')->get(['first_name', 'last_name', 'id']);


        return view('admin.diagnostico.paciente', compact('diagnosticos', 'especialistas'));
    }

    public function misdiagnosticos()
    {
        $id = Auth::user()->id;
        $misDiagnosticos = Diagnostico::where('id_especialista', $id)->orderBy('id', 'asc')->paginate(8);

        return view('admin.diagnostico.misDiagnosticos', compact('misDiagnosticos', 'especialistas'));
    }


}
