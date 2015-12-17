@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong><span class="icon-pencil2"></span> Editar Especialista {{ $especialistas->first_name.' '.$especialistas->last_name }}</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 ajuste3">
                    {!! Form::model($especialistas, ['route' => ['admin.users.update', $especialistas], 'method' => 'PUT' ]) !!}

                        @include('admin.especialista.partials.fields')

                        <button type="submit" class="btn btn-success btn-lg pull-left btn-sm"><span class="icon-pencil2"></span> Editar</button>
                        <div class="pull-right">
                            @include('admin.especialista.partials.cancelar')
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection