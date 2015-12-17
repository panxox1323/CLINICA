<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Oral_Plus\DetallePedido;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Pedidos;

class PdfPedidoController extends Controller
{
    public function verPedido($id)
    {
        $pedido = Pedidos::where('id', $id)->first();
        $detalles = DetallePedido::where('id_pedido', $id)->get();

        $view =  View::make('pdf.Pedidos.index', compact('invoice', 'detalles', 'pedido'));
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //return $pdf->download('usuarios.pdf');
        return $pdf->stream('invoice');

    }
}
