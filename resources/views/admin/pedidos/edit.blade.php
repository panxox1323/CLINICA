@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong><span class="icon-pencil2"></span> Editar Pedido N° {{ $pedido->id }}</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 col-lg-11 ajuste3">
                    {!! Form::model($pedido, ['route' => ['admin.pedido.update', $pedido], 'method' => 'PUT', 'autocomplete' => 'off']) !!}

                    @include('admin.pedidos.partials.fields')
                    @include('admin.pedidos.partials.edit')

                    <button type="submit" class="btn btn-success pull-left"><span class="icon-pencil2"></span> Editar Pedido</button>
                    <div class="pull-right">
                        {{--@include('admin.users.partials.cancelar')--}}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection