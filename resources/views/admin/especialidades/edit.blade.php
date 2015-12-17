@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong><span class="icon-pencil2"></span> Editar Especialidad</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 ajuste3">

                    {!! Form::model($especialidad, ['route' => ['admin.especialidades.update', $especialidad], 'method' => 'PUT', 'autocomplete' => 'off' ]) !!}

                        @include('admin.especialidades.partials.fields')

                        <button type="submit" class="btn btn-success pull-left"><span class="icon-edit"></span> Editar Especialidad</button>
                        @include('admin.especialidades.partials.cancelar')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection