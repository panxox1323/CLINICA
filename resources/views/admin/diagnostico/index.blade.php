@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Mantenedor de Diagnósticos</strong></h5></div>

        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <p>
                                @if(Auth::user()->type == 'admin')
                                    <a href="{{ route('admin.diagnostico.create') }}" role="button" class="btn btn-info"><span class="icon-plus"></span> <strong>Ingresar Diagnóstico</strong></a>
                                @endif

                                @if(Auth::user()->type == 'especialista')
                                    <a href="{{ route('especialista.diagnostico.create') }}" role="button" class="btn btn-info"><span class="icon-plus"></span> <strong>Ingresar Diagnóstico</strong></a>
                                @endif

                                @if(Auth::user()->type == 'secretaria')
                                    <a href="{{ route('secretaria.diagnostico.create') }}" role="button" class="btn btn-info"><span class="icon-plus"></span> <strong>Ingresar Diagnóstico</strong></a>
                                @endif
                            </p>

                            <p class="text-primary">Hay {{ $diagnosticos->total() }} Diagnosticos</p>
                        </div>

                            <div class="col-md-7 col-sm-12 col-xs-12 col-md-offset-2 ">
                                @if(Auth::user()->type == 'admin')
                                    {!! Form::model(Request::all(),['route' => 'admin.diagnostico.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                                @endif
                                @if(Auth::user()->type == 'secretaria')
                                    {!! Form::model(Request::all(),['route' => 'secretaria.diagnostico.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                                @endif
                                @if(Auth::user()->type == 'especialista')
                                    {!! Form::model(Request::all(),['route' => 'especialista.diagnostico.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                                @endif

                                <div class="form-group">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario']) !!}
                                    <strong><span class="icon-circle-with-plus"></span></strong>
                                    <select name="id_especialista" class="form-control">
                                        <option value="">Selecione Especialista</option>
                                        @foreach($especialistas as $esp)
                                            <option value="{{ $esp->id }}" >{{ $esp->first_name.' '.$esp->last_name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-info"><span class="icon-magnifier"></span><strong>Buscar</strong></button>
                                    {!! Form::close() !!}
                                </div>
                            </div>


                            @include('admin.diagnostico.partials.table')
                            <div class="paginacion">
                                {!! $diagnosticos->appends(Request::only(['name', 'type']))->render() !!}
                            </div>



                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection