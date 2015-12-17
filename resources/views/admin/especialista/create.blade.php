@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong><span class="icon-add-user"></span> Crear Especialista</strong></h5></div>
        <div class="alerta">
            @include('admin.partials.message')
        </div>
        <div class="panel-body">
            <div class="container">
                <div class="col-md-11 col-sm-11 col-xs-11 ajuste3">
                    {!! Form::open(['route' => 'admin.especialistas.store', 'method' => 'POST'  ]) !!}
                        @include('admin.especialista.partials.fields')
                        <button type="submit" class="btn btn-success btn-lg" pull-left><span class="icon-check"></span> Crear especialista</button>

                        <div class="pull-right">
                            @include('admin.especialista.partials.cancelar')
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection