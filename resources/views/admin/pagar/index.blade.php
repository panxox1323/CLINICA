@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center">
            <h5 class="porte">Estado de cuenta de  <label class="">{!! $usuario->first_name !!} {!! $usuario->last_name !!}</label> </h5>
        </div>
        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="col-lg-12 col-md-12 col-sm12 col-xs-12 pull-left">

                        <a href="{{ route('ingresar-pago',  $usuario->id) }}" class="btn btn-success btn-sm pull-left"><span class="icon-moneybag"></span>    Ingresar Pago</a>


                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="contenedor">
                            <div class="panel-de-pago-cabecera">
                                <h5 class="formato-cabecera">Consultas</h5>
                            </div>
                            <div class="panel-de-pago">
                                @include('admin.pagar.partials.table')
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="contenedor">
                            <div class="panel-de-pago-cabecera">
                                <h5 class="formato-cabecera">pagos</h5>
                            </div>
                            <div class="panel-de-pago">
                                @include('admin.pagar.partials.pagos')
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-right saldo">
                        <p>Su saldo es: {!! number_format($usuario->saldo) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection