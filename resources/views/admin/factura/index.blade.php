@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Mantenedor de Facturas de Compra</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg1-col-md-11 col-sm-11 col-xs-11">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            @if(Auth::user()->type == 'admin')
                                <a href="{{ route('admin.factura.create') }}" role="button" class="btn btn-info" style="font-weight: bold;"><span class="icon-clipboard"></span> Ingresar Factura</a>
                            @endif
                            @if(Auth::user()->type == 'secretaria')
                                <a href="{{ route('secretaria.factura.create') }}" role="button" class="btn btn-info" style="font-weight: bold;"><span class="icon-clipboard"></span> Ingresar Factura</a>
                            @endif

                            <p class="text-primary">Hay {{ $facturas->total() }}  Facturas</p>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 col-md-offset-2 ">
                            @if(Auth::user()->type == 'admin')
                                {!! Form::model(Request::all(),['route' => 'admin.factura.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            @endif
                            @if(Auth::user()->type == 'secretaria')
                               {!! Form::model(Request::all(),['route' => 'secretaria.factura.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            @endif
                                <div class="form-group">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'N&uacute;mero Factura']) !!}
                                    <strong><span class="icon-circle-with-plus"></span></strong>
                                    <select name="proveedor" class="form-control">
                                        <option value="">Selecione Proveedor</option>
                                        @foreach($proveedores as $proveedor)
                                            <option value="{{ $proveedor->id }}" >{{ $proveedor->nombre }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <button type="submit" class="btn btn-info"><span class="icon-magnifier"></span></span> <strong>Buscar</strong></button>
                                {!! Form::close() !!}

                        </div>
                    </div>

                    @include('admin.factura.partials.table')
                    <div class="paginacion">
                        {!! $facturas->appends(Request::only(['name', 'proveedor']))->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

