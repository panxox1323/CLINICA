@extends('secretaria.layout')

@section('content')
    <div class="container navbaar">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center"><h4><strong><span class="icon-circle-with-plus"></span> Nuevo Insumo</strong></h4></div>

                    <div class="panel-body">

                        @include('secretaria.partials.message')


                        {!! Form::open(['route' => 'secretaria.insumos.store', 'method' => 'POST'  ]) !!}
                            @include('secretaria.insumos.partials.fields')
                            <button type="submit" class="btn btn-success btn-lg"><span class="icon-check"></span> Crear Insumo</button>
                            @include('secretaria.insumos.partials.cancelar')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection