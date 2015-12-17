@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-capitalize text-center"><h4><strong><span class="icon-add-user"></span> Nuevo Proveedor</strong></h4></div>
        @include('admin.partials.mensaje')
        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 ajuste3">

                    {!! Form::open(['route' => 'admin.proveedores.store', 'method' => 'POST', 'autocomplete' => 'off' ]) !!}
                        @include('admin.proveedores.partials.fields')
                        <button type="submit" class="btn btn-success pull-left"><span class="icon-check"></span> Crear Proveedor</button>

                        <div class="pull-right">
                            @include('admin.proveedores.partials.cancelar')
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>


        </div>
    </div>

@endsection