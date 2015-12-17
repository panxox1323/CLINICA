@extends('pdf.partials.master')

@section('titulo')
    <title class="text-center">Diagnóstico N°{{ $diagnostico->id }}</title>
@endsection

@section('icono')
@endsection
@section('css')
    {!! Html::style('css/stylePDF.css')  !!}
    {!! Html::style('css/bootstrap.css') !!}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img src="img/logo2.jpg" alt="Logo" class="img img-responsive">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <h2 class="text-center" style="margin-left: 200px;">Diagnóstico N°{{ $diagnostico->id }}</h2>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <p>{{ Carbon\Carbon::now()->format('d-m-Y') }}</p>
            </div>
        </div>
        <div class="row" style="background-color: blue">

        </div>
        <div class="row header-diagnostico">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <p><span style="font-size: 14px; font-weight: bold">Paciente: </span> <span class="abc">&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;{{ $diagnostico->userUsuario->first_name.' '.$diagnostico->userUsuario->last_name }}</span></p>
                <p><span style="font-size: 14px; font-weight: bold">Especialista: </span> <span class="abc">&nbsp;{{ $diagnostico->userEspecialista->first_name.' '.$diagnostico->userEspecialista->last_name }}</span></p>
                <p><span style="font-size: 14px; font-weight: bold">Fecha: </span> <span class="abc">&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; {{ $diagnostico->fecha }}</span></p>
                <p><span style="font-size: 14px; font-weight: bold">Total: </span> <span class="abc" style="color: #ac2925;">&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; ${{ number_format($diagnostico->total) }}</span></p>

            </div>

        </div>
        <br>
        <br>

        <table class="table table-striped table-bordered table-hover">
            <tr class="info">
                <th class="text-center">-</th>
                <th class="text-center">Tratamiento</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Estado</th>

            </tr>
            @foreach($detalles as $detalle)
                <tr data-id="{{ $detalle->id }}">
                    <td class="text-center">{{ $detalle->tratamiento->nombre }}</td>
                    <td class="text-center">{{ $detalle->cantidad }}</td>
                    <td class="text-center">${{ number_format($detalle->precio) }}</td>
                    <td class="text-center">{{ $detalle->estado }}</td>

                </tr>
            @endforeach
        </table>


    </div>
@endsection