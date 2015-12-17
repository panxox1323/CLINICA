@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Mantenedor de Pagos</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <p>
                                <a href="{{ route('admin.pagar.create') }}" role="button" class="btn btn-info"><span class="icon-moneybag"></span><span></span> Ingresar Pago</a>
                            </p>

                            <p class="text-primary">Hay {{ $pagos->total() }} Pagos Registrados</p>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 col-lg-offset-2">
                            {!! Form::model(Request::all(),['route' => 'admin.pagar.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                                <div class="form-group">

                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Paciente']) !!}

                                </div>

                                <button type="submit" class="btn btn-info"><span class="icon-magnifier"></span></span> <strong>Buscar</strong></button>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    @include('admin.pagos.partials.table')
                    <div class="paginacion">
                        {!! $pagos->appends(Request::only(['name', 'type']))->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection