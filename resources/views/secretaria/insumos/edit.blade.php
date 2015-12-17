@extends('secretaria.layout')

@section('content')
    <div class="container navbaar">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center">Editar Insumo {{ $insumo->nombre }}</div>


                    <div class="panel-body">

                        @include('admin.partials.message')

                        {!! Form::model($insumo, ['route' => ['admin.insumos.update', $insumo], 'method' => 'PUT' ]) !!}

                            @include('admin.insumos.partials.fields')

                            <button type="submit" class="btn btn-success btn-lg"><span class="icon-edit"></span> Editar Insumo</button>
                            @include('admin.insumos.partials.cancelar')


                        {!! Form::close() !!}


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection