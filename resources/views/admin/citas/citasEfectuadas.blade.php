@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Reporte de Citas</strong></h5></div>

        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">

                            <p class="text-primary">Hay {{ $horas->total() }} Citas</p>
                        </div>

                        <div class="col-md-7 col-sm-12 col-xs-12 col-md-offset-2 ">
                            @if(Auth::user()->type == 'admin')
                                {!! Form::model(Request::all(),['route' => 'admin/citasEfectuadas', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            @endif
                            @if(Auth::user()->type == 'secretaria')
                                {!! Form::model(Request::all(),['route' => 'secretaria/citasEfectuadas', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            @endif
                            @if(Auth::user()->type == 'especialista')
                                {!! Form::model(Request::all(),['route' => 'especialista/citasEfectuadas', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            @endif

                            <div class="form-group">

                                <select name="especialista" class="form-control">
                                    <option value="">Selecione Especialista</option>
                                    @foreach($especialistas as $especialista)
                                        <option value="{{ $especialista->id }}" >{{ $especialista->first_name.' '.$especialista->last_name }}</option>
                                    @endforeach
                                </select>
                                <strong><span class="icon-circle-with-plus"></span></strong>
                                <input type="date" name="fecha" id="datepicker100">
                                <button type="submit" class="btn btn-info"><span class="icon-magnifier"></span><strong>Buscar</strong></button>
                                {!! Form::close() !!}
                            </div>
                        </div>


                        @include('admin.citas.partials.tabledos')

                        @if(Auth::user()->type == 'admin')
                            {!! Form::model(Request::all(),['route' => 'admin/reporte-citas', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

                        @endif
                        @if(Auth::user()->type == 'secretaria')
                            {!! Form::model(Request::all(),['route' => 'secretaria/reporte-citas', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

                        @endif
                        {!! Form::text('fecha', null, ['class' => ' ', 'id' => 'fechaOculta', 'style' => 'display:none;']) !!}
                        {!! Form::text('especialista', null, ['class' => ' ', 'id' => 'especialistaOculto', 'style' => 'display:none;']) !!}
                        @if($errors->all('fecha'))
                            <div class="" role="alert">
                                <strong><p class="porte2 pull-right">{{ $errors->first('fecha') }}</p></strong>
                            </div>
                        @endif
                        <button type="submit" class="btn btn-info btn-md" style="font-weight: bold;" target="_blank"><span class="icon-file-pdf"> Generar Pdf de Pagos</span></button>
                        {!! Form::close() !!}


                            <div class="paginacion">
                                {!! $horas->appends(Request::only(['name', 'type']))->render() !!}
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection