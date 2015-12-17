@extends('app')

@section('content')
    <div class="container navbaar">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center">Editar Producto {{ $producto->nombre }}</div>


                    <div class="panel-body">

                        @include('admin.partials.message')

                        {!! Form::model($producto, ['route' => ['admin.productos.update', $producto], 'method' => 'PUT' ]) !!}

                            @include('admin.productos.partials.fields')

                            <button type="submit" class="btn btn-success btn-lg"><span class="icon-edit"></span> Editar Producto</button>
                            @include('admin.productos.partials.cancelar')


                        {!! Form::close() !!}
                        <hr>
                        @include('admin.productos.partials.delete')


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection