@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Bienvenido {{ \Illuminate\Support\Facades\Auth::user()->first_name}} {{ \Illuminate\Support\Facades\Auth::user()->last_name }}</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <table style="margin-top: 5px;" class="table table-striped table-bordered table-hover">
                                <tr class="info">
                                    <th class="text-center">Fecha</th>
                                    <th class="text-center">Hora</th>
                                    <th class="text-center">Paciente</th>
                                    <th class="text-center">Especialista</th>
                                    <th class="text-center">Edad</th>
                                    <th class="text-center">Tel&eacute;fono</th>



                                </tr>

                                @foreach($consultas as $consulta)
                                    <tr data-id="{{ $consulta->id }}">
                                        <td class="text-center">{!! date('d-m-Y', strtotime($consulta->fecha)) !!}</td>
                                        <td class="text-center">{{date("H:i",$hora=strtotime($consulta->obtenerHora->hora)) }}</td>
                                        <td class="text-center">{!! $consulta->userUsuario->first_name !!} {!! $consulta->userUsuario->last_name !!}</td>
                                        <td class="text-center">{!! $consulta->userEspecialista->first_name !!} {!! $consulta->userEspecialista->last_name !!}</td>
                                        <td class="text-center">{{ \Carbon\Carbon::parse($consulta->userUsuario->fecha_nacimiento)->age }} a&ntilde;os</td>
                                        <td class="text-center">{!! $consulta->userUsuario->telefono !!}</td>

                                    </tr>
                                @endforeach
                            </table>


                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div style="text-align:center;width:350px;padding:0.5em 0;">

                                <iframe src="http://www.zeitverschiebung.net/clock-widget-iframe?language=es&timezone=America%2FSantiago" width="100%" height="130" frameborder="0" seamless></iframe>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
