@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong><span class="icon-pencil2"></span> Editar Factura {{ $factura->numero_factura }}</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-md-11 col-sm-11 col-xs-11 col-lg-11 padding">
                    {!! Form::model($factura, ['route' => ['admin.factura.update', $factura], 'method' => 'PUT', 'autocomplete' => 'off']) !!}

                    @include('admin.factura.partials.fields')
                    @include('admin.factura.partials.edit')

                    <button type="submit" class="btn btn-success pull-left"><span class="icon-pencil2"></span> Editar factura</button>
                    <div class="pull-right">
                        {{--@include('admin.users.partials.cancelar')--}}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection