@extends('pdf.partials.master')

@section('css')
    {!! Html::style('css/stylePDF.css')  !!}
@endsection
@section('titulo')
    <title>Comprobante de Pago</title>
@endsection

@section('content')
    <div class="logo">
        <div class="pull-left">
            <img src="img/logo2.jpg" alt="Logo Institucional" class="imagen">
        </div>
        <div class="poner">
            <div class="poner"><p>Fecha {{ $date }}</p></div>
        </div>

    </div>
    <div class="titulo">Comprobante de Pago </div>

    <table class="">
        <thead>
        <tr>
            <th class="subtitulo alinear">Paciente</th>
            <th class="subtitulo alinear">Fecha</th>
            <th class="subtitulo alinear">Hora</th>
            <th class="subtitulo alinear">Monto Cnacelado</th>
            <th class="subtitulo alinear">Saldo</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td class="alinear">{{ $pago->user->first_name }} {{ $pago->user->last_name }}</td>
                <td class="alinear">{{ $pago->fecha }}</td>
                <td class="alinear"> {{ date("H:i", $hora=strtotime($pago->created_at)) }}</td>
                <td class="alinear">$ {{ number_format($pago->monto) }}</td>
                <td class="alinear">$ {{ number_format($pago->user->saldo) }}</td>
            </tr>

        </tbody>
        <tfoot>

        </tfoot>
    </table>
@endsection
