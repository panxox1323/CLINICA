@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-capitalize text-center"><span class="icon-pencil2"></span> Editar Proveedor {{ $proveedor->nombre }}</div>
        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 ajuste3">
                    {!! Form::model($proveedor, ['route' => ['admin.proveedores.update', $proveedor], 'method' => 'PUT' ]) !!}

                        @include('admin.proveedores.partials.fields')



                        <div class="pull-right">
                            @include('admin.proveedores.partials.cancelar')
                        </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection