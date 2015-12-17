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
    <div class="titulo">Reporte de Stock de Insumos en el Sistema</div>

    <table class="">
        <thead>
        <tr>
            <th class="subtitulo alinear">Nombre</th>
            <th class="subtitulo alinear">Precio</th>
            <th class="subtitulo">Stock</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td class="alinear">{{ $user->nombre }}</td>
                <td class="alinear">${{ $user->precio_unitario }}</td>
                <td class="saldo"> {{ $user->stock }}</td>
            </tr>
        @endforeach

        </tbody>
        <tfoot>

        </tfoot>
    </table>
@endsection
