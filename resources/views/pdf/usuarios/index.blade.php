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
            <div class="poner"><p>Fecha {{ $date }}</p></div>
        </div>

    </div>
    <div class="titulo">Reporte de Usuarios del Sistema</div>

    <table class="">
        <thead>
        <tr>
            <th class="subtitulo alinear">Nombre</th>
            <th class="subtitulo alinear">Apellido</th>
            <th class="subtitulo alinear">Tel&eacute;fonno</th>
            <th class="subtitulo alinear">Direcci&oacute;n</th>
            <th class="subtitulo">Saldo</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td class="alinear">{{ $user->first_name }}</td>
                <td class="alinear">{{ $user->last_name }}</td>
                <td class="alinear">{{ $user->telefono }}</td>
                <td class="alinear">{{ $user->direccion }}</td>
                <td class="saldo">$ {{ number_format($user->saldo) }}</td>
            </tr>
        @endforeach

        </tbody>
        <tfoot>

        </tfoot>
    </table>
@endsection
