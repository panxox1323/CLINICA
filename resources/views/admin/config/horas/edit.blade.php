@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-capitalize text-center"><h5 class="porte"><span class="icon-pencil2"></span> Editar Bloque Horario {{ $config->hora }}</h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 ajuste3">
                    @if(Auth::user()->type == 'admin')
                        {!! Form::model($config, ['route' => ['admin.configurar.update', $config], 'method' => 'PUT', 'autocomplete' => 'off']) !!}
                    @endif
                    @if(Auth::user()->type == 'secretaria')
                        {!! Form::model($config, ['route' => ['secretaria.configurar.update', $config], 'method' => 'PUT', 'autocomplete' => 'off']) !!}
                    @endif
                        @include('admin.config.horas.partials.fields')

                        <button type="submit" class="btn btn-success pull-left"><span class="icon-pencil2"></span> Editar Bloque</button>
                        <div class="pull-right">
                            @include('admin.config.horas.partials.cancelar')
                        </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection