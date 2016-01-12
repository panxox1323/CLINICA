@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Mantenedor de Tratamientos</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <p>
                                @if(Auth::user()->type == 'admin')
                                    <a href="{{ route('admin.tratamiento.create') }}" role="button" class="btn btn-info" style="font-weight: bold;"><span class="icon-circle-with-plus"></span> Crear Tratamiento</a>
                                @endif

                                @if(Auth::user()->type == 'secretaria')
                                    <a href="{{ route('secretaria.tratamiento.create') }}" role="button" class="btn btn-info" style="font-weight: bold;"><span class="icon-circle-with-plus"></span> Crear Tratamiento</a>
                                @endif

                            </p>

                            <p class="text-primary">Hay {!! $tratamientos->total() !!}  Registros</p>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 col-md-offset-2 ">
                            @if(Auth::user()->type == 'admin')
                                {!! Form::model(Request::all(),['route' => 'admin.tratamiento.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            @endif
                            @if(Auth::user()->type == 'secretaria')
                                {!! Form::model(Request::all(),['route' => 'secretaria.tratamiento.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            @endif
                            @if(Auth::user()->type == 'especialista')
                                {!! Form::model(Request::all(),['route' => 'especialista.tratamiento.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            @endif
                                <div class="form-group">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre tratamiento']) !!}
                                </div>

                                <button type="submit" class="btn btn-info"><span class="icon-magnifier"></span><strong>Buscar</strong></button>
                            {!! Form::close() !!}
                        </div>
                    </div>


                    @include('admin.tratamientos.partials.table')
                    <div class="paginacion">
                        {!! $tratamientos->appends(Request::only(['name', 'type']))->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection