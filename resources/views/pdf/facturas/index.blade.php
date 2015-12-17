@extends('pdf.partials.master')

@section('titulo')
    <title>Factura Numero: </title>
@endsection

@section('css')
    {!! Html::style('css/stylePDF.css')  !!}
@endsection


@section('icono')
    <link rel="shortcut icon" href="img/favicon.ico">
@endsection

@section('content')

    <div class="logo">
        <div class="pull-left">
            <img src="img/logo2.jpg" alt="Logo Institucional" class="imagen">
        </div>
        <div class="poner">
            <div class="poner"><p>Fecha {!! $factura->fecha !!}</p></div>
        </div>

    </div>
    <div class="titulo">Factura de Compras N° {!! $factura->numero_factura !!}</div>

    <table border="1">
        <tr class="color-letra-factura">
            <td width="10%" class="color-factura" scope="col"><div align="left">Proveedor:</div></td>
            <td scope="col" class="color-factura"><div align="left">{!! $factura->proveedor->nombre !!}</div></td>
            <td scope="col" class="color-factura">
                Factura:
            </td>
            <td scope="col" class="color-factura">
                {!! $factura->numero_factura !!}
            </td>
        </tr>
        <tr class="color-letra">
            <td width="10%" class="color-factura" scope="col"><div align="left">Fecha:</div></td>
            <td scope="col" class="color-factura"><div align="left">{!! $factura->fecha!!}</div></td>
            <td scope="col" class="color-factura">
                Forma de Pago:
            </td>
            <td scope="col" class="color-factura">
                {!! $factura->forma_pago !!}
            </td>
        </tr>
    </table>
    <table>
        <tr class="tabla-color">
            <td>Insumo</td>
            <td>Cantidad</td>
            <td>Precio</td>
            <td>SubTotal</td>
        </tr>
        @foreach($detalles as $detalle)

            <tr class="color-letra-factura">

                <td>{{ $detalle->insumo->nombre }}</td>
                <td>{{ number_format($detalle->cantidad) }}</td>
                <td>{{ number_format($detalle->precio) }}</td>
                <td>$ {{ number_format($detalle->precio * $detalle->cantidad) }}</td>

            </tr>

        @endforeach
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>

        </tr>

    </table>
    <table style="width: 82%; margin-left: 327px; border: 1px solid blue;" >
       <tr>
           <td>
               <b class="color-texto">Subtotal: $ <a style="color: black;">{{ number_format($factura->total/1.19) }}</a></b>
           </td>
       </tr>
       <tr>
            <td>
                <b class="color-texto">Iva: $ <a style="color: black;">{{ number_format($factura->total - $factura->total/1.19) }}</a></b>
            </td>
       </tr>
       <tr>
            <td>
                <b class="color-texto">Total: $ <a style="color: black;">{{ number_format($factura->total) }}</a></b>
            </td>
       </tr>

    </table>




@endsection