@extends('app')

@section('content')
    <div class="container navbaar">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center">Editar Especialidad {{ $especialidad->nombre }}</div>


                    <div class="panel-body">

                        @include('admin.partials.message')

                        {!! Form::model($especialidad, ['route' => ['admin.insumos.update', $especialidad], 'method' => 'PUT' ]) !!}

                            @include('admin.especialidades.partials.fields')

                            <button type="submit" class="btn btn-success btn-lg"><span class="icon-edit"></span> Editar Especialidad</button>
                            @include('admin.especialidades.partials.cancelar')


                        {!! Form::close() !!}
                        <hr>
                        @include('admin.especialidades.partials.delete')


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection