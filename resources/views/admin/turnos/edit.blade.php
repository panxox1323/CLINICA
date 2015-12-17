@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center">Editar Turno {{ $turno->id}}</div>


                    <div class="panel-body">

                        @include('admin.partials.message')

                        {!! Form::model($turno, ['route' => ['admin.turnos.update', $turno], 'method' => 'PUT' ]) !!}

                            @include('admin.turnos.partials.fields')

                            <button type="submit" class="btn btn-success btn-lg"><span class="icon-edit"></span> Editar Turno</button>
                            @include('admin.turnos.partials.cancelar')


                        {!! Form::close() !!}
                        <hr>
                        @include('admin.turnos.partials.delete')


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection