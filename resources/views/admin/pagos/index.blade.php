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
                                @if(Auth::user()->type == 'admin')
                                    <a href="{{ route('admin.pagar.create') }}" role="button" class="btn btn-info" style="font-weight: bold"><span class="icon-moneybag"></span><span></span> Ingresar Pago</a>
                                @endif
                                @if(Auth::user()->type == 'secretaria')
                                    <a href="{{ route('secretaria.pagar.create') }}" role="button" class="btn btn-info" style="font-weight: bold"><span class="icon-moneybag"></span><span></span> Ingresar Pago</a>
                                @endif
                            </p>

                            <p class="text-primary">Hay {{ $pagos->total() }} Pagos Registrados</p>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 col-lg-offset-2">
                            @if(Auth::user()->type == 'admin')
                                {!! Form::model(Request::all(),['route' => 'admin.pagar.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            @endif
                            @if(Auth::user()->type == 'secretaria')
                                {!! Form::model(Request::all(),['route' => 'secretaria.pagar.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            @endif
                                <div class="form-group">

                                    <select name="paciente" class="form-control">
                                        <option value="">Selecione paciente</option>
                                        @foreach($pacientes as $paciente)
                                            <option value="{{ $paciente->id }}" >{{ $paciente->first_name }} {{ $paciente->last_name }}</option>
                                        @endforeach
                                    </select>
                                    <strong><span class="icon-circle-with-plus"></span></strong>
                                    <input type="date" name="fecha" id="datepicker100">
                                </div>

                                <button type="submit" class="btn btn-info"><span class="icon-magnifier"></span> <strong>Buscar</strong></button>
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