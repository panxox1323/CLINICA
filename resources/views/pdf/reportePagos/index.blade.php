@extends('pdf.partials.master')
@section('css')
    {!! Html::style('css/stylePDF.css')  !!}
@endsection

@section('content')
    <div class="logo">
        <div class="pull-left">
            <img src="img/logo2.jpg" alt="Logo Institucional" class="imagen">
        </div>
        <div class="poner">
            <div class="poner"><p>Fecha {{ Carbon\Carbon::now()->format('d-m-Y') }}</p></div>
        </div>

    </div>
    <div class="titulo">Reporte de Pagos del día {{ date('d-m-Y', strtotime($fecha)) }}</div>

    <table class="">
        <thead>
            <tr>
                <th class="subtitulo alinear">Paciente</th>
                <th class="subtitulo alinear">Fecha</th>
                <th class="subtitulo alinear">Hora</th>
                <th class="subtitulo alinear">Monto Cancelado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pagos as $pago)
                <tr>
                    <td class="alinear">{{ $pago->user->first_name.' '.$pago->user->last_name }} </td>
                    <td class="alinear">{{ date('d-m-Y', strtotime($pago->fecha)) }}</td>
                    <td class="alinear"> {{ date("H:i", $hora=strtotime($pago->created_at)) }}</td>
                    <td class="alinear">$ {{ number_format($pago->monto) }}</td>
                </tr>
            @endforeach


        </tbody>
        <div class="total">
            <p style="color: #1C2694;">$Total : $ {{ number_format($suma) }}</p>
        </div>
        <tfoot>

        </tfoot>
    </table>
@endsection
