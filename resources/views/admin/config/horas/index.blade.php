@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Configurar Horas</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="row">
                        <p>
                            <a href="{{ route('admin.configurar.create') }}" role="button" class="btn btn-info"><span class="icon-alarm"></span> Crear Hora</a>
                        </p>

                        <p class="text-primary">Hay {{ $horas->total() }} Horas registradas</p>
                    </div>
                    <div class="row">
                        @include('admin.config.horas.partials.table')
                    </div>
                    <div class="paginacion">
                        {!! $horas->appends(Request::only(['hora_inicio', 'hora_termino']))->render() !!}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection