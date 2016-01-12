@extends('pdf.partials.master')

@section('css')
    {!! Html::style('css/stylePDF.css')  !!}
@endsection
@section('titulo')
    <title>Tratamientos del sistema</title>
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
            <div class="poner"><p>Fecha {{ $date }}</p></div>
        </div>

    </div>
    <div class="titulo">Reporte de Tratamientos del Sistema</div>

    <table class="">
        <thead>
        <tr>
            <th class="subtitulo alinear">Nombre</th>
            <th class="subtitulo alinear">Valor</th>
            <th class="subtitulo alinear">N° Sesiones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tratamientos as $tratamiento)
            <tr>
                <td class="alinear">{{ $tratamiento->nombre }}</td>
                <td class="alinear">$ {{ number_format($tratamiento->valor) }}</td>
                <td class="alinear">{{ $tratamiento->sesiones }}</td>
            </tr>
        @endforeach

        </tbody>
        <tfoot>

        </tfoot>
    </table>
@endsection
