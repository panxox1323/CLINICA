@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong><span class="icon-plus"></span> Ingresar Orden de Compra</strong></h5></div>

        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 padding">

                    {!! Form::open(['route' => 'admin.pedido.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off']) !!}

                    @include('admin.pedidos.partials.fields')
                    @include('admin.pedidos.partials.campos')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection