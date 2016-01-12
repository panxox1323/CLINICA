<?php

namespace Oral_Plus\Http\Controllers\admin;

use App;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Tratamiento;
use Oral_Plus\User;
use View;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

    public function index()
    {
        $users = $this->getData();
        $date = Carbon::now();
        $date = $date->format('d-m-Y');
        $view =  View::make('pdf.usuarios.index', compact('users', 'date', 'invoice'))->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //return $pdf->download('usuarios.pdf');
        return $pdf->stream('invoice');
    }


    public function getData()
    {
        $users = User::where('saldo', '>', 0)->orderBy('first_name', 'ASC')->paginate(100000);

        return $users;
    }

    public function tratamiento()
    {
        $tratamientos = Tratamiento::orderBy('nombre', 'asc')->paginate(10000000);
        $date = Carbon::now();
        $date = $date->format('d-m-Y');
        $view = View::make('pdf.tratamientos.index', compact('tratamientos', 'date', 'invoice'))->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }


}
