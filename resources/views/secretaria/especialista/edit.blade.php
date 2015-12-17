@extends('secretaria.layout')

@section('content')
    <div class="container navbaar">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center">Editar Especialidad {{ $especialista->nombre }}</div>


                    <div class="panel-body">

                        @include('admin.partials.message')

                        {!! Form::model($especialista, ['route' => ['secretaria.especialista.update', $especialista], 'method' => 'PUT' ]) !!}

                            @include('secretaria.especialista.partials.fields')

                            <button type="submit" class="btn btn-success btn-lg"><span class="icon-edit"></span> Editar Especialidad</button>
                            @include('admin.especialidades.partials.cancelar')


                        {!! Form::close() !!}

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection