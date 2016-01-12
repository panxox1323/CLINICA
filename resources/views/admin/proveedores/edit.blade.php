@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-capitalize text-center"><span class="icon-pencil2"></span> Editar Proveedor {{ $proveedor->nombre }}</div>
        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 ajuste3">
                    @if(Auth::user()->type == 'admin')
                        {!! Form::model($proveedor, ['route' => ['admin.proveedores.update', $proveedor], 'method' => 'PUT' ]) !!}
                    @endif
                    @if(Auth::user()->type == 'secretaria')
                        {!! Form::model($proveedor, ['route' => ['secretaria.proveedores.update', $proveedor], 'method' => 'PUT' ]) !!}
                    @endif

                        @include('admin.proveedores.partials.fields')
                        <button type="submit" class="btn btn-success pull-left"><span class="icon-pencil2"></span> Editar Proveedor</button>
                        <div class="pull-right">
                            @include('admin.proveedores.partials.cancelar')
                        </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection