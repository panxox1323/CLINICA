<?php

namespace Oral_Plus\Http\Controllers\admin;

use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Oral_Plus\Horas_agendadas;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;

class UserController extends Controller
{
    public function ingresar()
    {
        $fecha = Carbon::now()->format('Y-m-d');
        $consultas = Horas_agendadas::where('fecha', '=', $fecha)
            ->orderBy('id_horas', 'asc')
            ->get();
        return view('admin.index', compact('consultas'));
    }

    public function especialista()
    {
        $fecha = Carbon::now()->format('Y-m-d');
        $consultas = Horas_agendadas::where('fecha', '=', $fecha)
            ->orderBy('id_horas', 'asc')
            ->get();
        return view('admin.index', compact('consultas'));
    }

    public function misCitas()
    {
        $fecha = Carbon::now()->format('Y-m-d');
        $id    = Auth::user()->id;
        $consultas = Horas_agendadas::where('fecha', '>=',$fecha)
                    ->where('id_usuario', $id)
                    ->orderBy('id_horas', 'asc')
                    ->get();

        return view('admin.index', compact('consultas'));
    }
}
