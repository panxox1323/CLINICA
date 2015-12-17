@extends('secretaria.layout')

@section('content')
    <div class="container navbaar">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center">Editar Proveedor {{ $proveedor->nombre }}</div>


                    <div class="panel-body">

                        @include('secretaria.partials.message')

                        {!! Form::model($proveedor, ['route' => ['secretaria.proveedor.update', $proveedor], 'method' => 'PUT' ]) !!}

                            @include('secretaria.proveedores.partials.fields')

                            <button type="submit" class="btn btn-success btn-lg"><span class="icon-edit"></span> Editar Proveedor</button>
                            @include('secretaria.proveedores.partials.cancelar')


                        {!! Form::close() !!}


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection