@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-capitalize text-center"><h4><strong><span class="icon-circle-with-plus"></span> Nueva Especialidad</strong></h4></div>
        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 ajuste3">

                    {!! Form::open(['route' => 'admin.especialidades.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off']) !!}

                        @include('admin.especialidades.partials.fields')

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <button type="submit" class="btn btn-success pull-left btn-sm"><span class="icon-check"></span> Crear especialidad</button>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6-col-xs-6">
                                    @include('admin.especialidades.partials.cancelar')
                                </div>
                            </div>

                        </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection