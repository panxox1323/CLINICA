@extends('layout.admin')


@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Historial del Paciente {{ $paciente->first_name.' '. $paciente->last_name }}</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="col-md-3 col-sm-3 col-xs-3">


                        <p class="text-primary">Existen {{ $diagnosticos->total() }} Diagnósticos</p>
                    </div>

                    <div class="col-md-7 col-sm-12 col-xs-12 col-md-offset-2 ">
                        {!! Form::model(Request::all(),['route' => 'admin.users.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                        <div class="form-group">

                            {!! Form::select('type', config('opciones.types'), null, ['class' => 'form-control']) !!}
                        </div>

                        <button type="submit" class="btn btn-info"><span class="icon-magnifier"></span></span> <strong>Buscar</strong></button>
                        {!! Form::close() !!}
                    </div>

                   @include('admin.historiales.partials.table')
                    <div class="paginacion">
                        {!! $diagnosticos->appends(Request::only(['name', 'type']))->render() !!}
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection

