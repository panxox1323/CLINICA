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

                            <p class="text-primary">Hay {{ $pagos->total() }} Pagos Registrados</p>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 col-lg-offset-2">
                            @if(Auth::user()->type == 'admin')
                                {!! Form::model(Request::all(),['route' => 'admin/pagosEfectuados', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            @endif
                            @if(Auth::user()->type == 'secretaria')
                                {!! Form::model(Request::all(),['route' => 'secretaria/pagosEfectuados', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            @endif
                                <div class="form-group">
                                    <input type="date" name="fecha" id="datepicker100">
                                </div>

                                <button type="submit" class="btn btn-info"><span class="icon-magnifier"></span> <strong>Buscar</strong></button>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    @include('admin.pagos.partials.table')
                    @if(Auth::user()->type == 'admin')
                        {!! Form::model(Request::all(),['route' => 'admin/reporte-pagos', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

                    @endif
                    @if(Auth::user()->type == 'secretaria')
                        {!! Form::model(Request::all(),['route' => 'secretaria/reporte-pagos', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

                    @endif
                    {!! Form::text('fecha', null, ['class' => ' ', 'id' => 'fechaOculta', 'style' => 'display:none;']) !!}
                    @if($errors->all('fecha'))
                        <div class="" role="alert">
                            <strong><p class="porte2 pull-right">{{ $errors->first('fecha') }}</p></strong>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-info btn-md" style="font-weight: bold;" target="_blank"><span class="icon-file-pdf"> Generar Pdf de Pagos</span></button>
                    {!! Form::close() !!}

                    <div class="paginacion">
                        {!! $pagos->appends(Request::only(['name', 'type']))->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection