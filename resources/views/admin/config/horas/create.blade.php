@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong><span class="icon-add-user"></span> Crear Horario</strong></h5></div>
        <div class="panel-body">
            <div class="container">
                <div class="col-md-11 col-sm-11 col-xs-11 ajuste3">
                    <div class="row">
                        {!! Form::open(['route' => 'admin.configurar.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off']) !!}

                        @include('admin.config.horas.partials.fields')
                        <button type="submit" class="btn btn-success btn-crear pull-left"><span class="icon-plus"></span> Crear Hora</button>
                        <div class="pull-right">
                            @include('admin.users.partials.cancelar')
                        </div>

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection