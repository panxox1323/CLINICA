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
    <div class="titulo2">Reporte de Citas de {{ $especialista->first_name.' '.$especialista->last_name }} para el día {{ date('d-m-Y', strtotime($fecha)) }}</div>

    <table class="">
        <thead>
        <tr>
            <th class="subtitulo alinear">Fecha</th>
            <th class="subtitulo alinear">Hora</th>
            <th class="subtitulo alinear">Paciente</th>
            <th class="subtitulo alinear">Edad</th>
            <th class="subtitulo alinear">Teléfono</th>
        </tr>
        </thead>
        <tbody>
        @foreach($citas as $cita)
            <tr>
                <td class="alinear">{{ date('d-m-Y', strtotime($cita->fecha)) }} </td>
                <td class="alinear">{{ date("H:i",$hora=strtotime($cita->obtenerHora->hora)) }}</td>
                <td class="alinear">{{ $cita->userUsuario->first_name.' '.$cita->userUsuario->last_name }} </td>
                <td class="alinear">{{ \Carbon\Carbon::parse($cita->userUsuario->fecha_nacimiento)->age }} a&ntilde;os</td>
                <td class="alinear">{{ $cita->userUsuario->telefono }} </td>
            </tr>
        @endforeach


        </tbody>

        <tfoot>

        </tfoot>
    </table>
@endsection
