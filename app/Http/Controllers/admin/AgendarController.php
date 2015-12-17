<?php

namespace Oral_Plus\Http\Controllers\admin;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Oral_Plus\Consulta;
use Oral_Plus\Hora;
use Oral_Plus\Horas_agendadas as HorasAgendadas;
use Oral_Plus\Horas_agendadas;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Listado_horas;
use Oral_Plus\User;


class AgendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $especialista = User::where('type', 'Especialista')->get(['first_name', 'last_name', 'id']);
        $paciente     = User::where('type', '!=', 'Especialista')->get(['first_name', 'last_name', 'id', 'run']);


        return view('admin.citas.cita', compact('especialista', 'paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateCitaRequest $request)
    {
        $datos = HorasAgendadas::create($request->all());

        $message = 'Hora agendada por: '. $datos->userUsuario->first_name. ' ' .$datos->userUsuario->last_name. ' para el día:'. $datos->fecha. ' y a la hora: ' . date("H:i", $qwerty=strtotime($datos->obtenerHora->hora));

        Session::flash('message', $message);
        return Redirect::route('horas-agendadas');
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
    public function destroy($id, Request $request)
    {
        /** $hora = Horas_agendadas::findOrFail($id);
        $hora->delete();

        $message = 'La hora que estaba agendada a las '.date("H:i", $cons=strtotime($hora->obtenerHora->hora)).' para la fecha '. $hora->fecha.' del paciente '. $hora->userUsuario->first_name.' '. $hora->userUsuario->last_name.' fue eliminado correctamente';
        Session::flash('message', $message);
         *
         */

        $hora = Horas_agendadas::findOrFail($id);

        $hora->delete();
        $message = 'La hora'. date("H:i", $str=strtotime($hora->obtenerHora->hora)).' del paciente '.$hora->userUsuario->first_name. $hora->userUsuario->last_name. ' fue eliminado de nuestros registros';

        if($request->ajax())
        {
            return response()->json([

                'id'      => $hora->id,
                'message' => $message


            ]);
        }



        Session::flash('message', $message);
        return redirect()->route('horas-agendadas');

    }


    /**
     * Funcion para regenerar el arreglo de las citas asignadas a un arreglo valido
     * para la funcion whereNotIn de SQLBuilder.
     *
     * @param $arreglo
     * @return array
     */
    protected function renovarArreglo($arreglo)
    {
        $newArray = [];
        foreach($arreglo as $item)
        {
            array_push($newArray, $item['id_horas']);
        }
        return $newArray;
    }

    /**
     * Funcion para obtener las horas asignadas en un dia especificado
     *
     * @param $id Identificador del especialista
     * @param $date Fecha en que se va a agendar la cita
     */
    public function obtenerHorasAsignadasPDia($id, $date)
    {
        $result = HorasAgendadas::where('id_especialista', $id)
            ->where('fecha', $date)
            ->get(['id_especialista', 'id_horas'])
            ->toArray();
        $newArray = $this->renovarArreglo($result);
        \Debugbar::info($newArray);
        $horas = $this->obtenerTodasHoras($newArray);

        return response()->json([
            'horas_disponibles' => $horas['disponibles'],
            'horas_todas' => $horas['todas']
        ]);
    }

    /**
     * Obtiene todas las horas Libres y Reservadas asi como también solo las Libres
     *
     * @param $arrayAsignadas
     * @return array
     */
    protected function obtenerTodasHoras($arrayAsignadas)
    {
        /**
         * @var $array_horas Esta contiene las horas libres/disponibles
         */
        $array_horas = Hora::whereNotIn('id', $arrayAsignadas)
            ->select(['id', 'hora', DB::raw('0 as active')]); // 0 es Libre

        /**
         * @var $array_asignadas Esta contiene solo las horas reservadas
         */
        $array_asignadas = Hora::whereIn('id', $arrayAsignadas)
            ->select(['id', 'hora', DB::raw('1 as active')]); // 1 es Reservada

        /**
         * @var $disponibles Contiene todas las horas disponibles listas para mostrarlas en la vista
         */
        $disponibles = $array_horas->get()->toArray();

        /**
         * @var $all Esta contiene las horas asignadas y no asignadas
         */
        $all = $array_horas
            ->unionAll($array_asignadas)
            ->orderBy('id', 'asc')
            ->get()
            ->toArray();

        \Debugbar::info($all);

        return array(
            'todas' => $all,
            'disponibles' => $disponibles
        );

    }

    public function ver_horas(Request $request)
    {
        $horas = Horas_agendadas::name($request->get('name'))
                    ->groupBy('fecha', 'id_horas')
                    ->orderBy('fecha', 'desc')
                    ->paginate(8);

        return view('admin.citas.index', compact('horas'));
    }

    public function editar_cita()
    {
        $listado      = Hora::orderBy('hora', 'asc')->get();
        $especialista = User::where('type', 'Especialista')->get(['first_name', 'last_name', 'id']);
        $paciente     = User::where('type', '!=', 'Especialista')->get(['first_name', 'last_name', 'id']);
        $disponibles  = Hora::orderBy('hora', 'asc')->get();

        return view('admin.citas.edit', compact('listado', 'especialista', 'paciente', 'disponibles'));
    }


}
