@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong><span class="icon-add-user"></span> Crear Horario</strong></h5></div>
        <div class="panel-body">
            <div class="container">
                <div class="col-md-11 col-sm-11 col-xs-11 ajuste3">
                    <div class="row">
                        @if(Auth::user()->type == 'admin')
                            {!! Form::open(['route' => 'admin.configurar.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off']) !!}
                        @endif
                        @if(Auth::user()->type == 'secretaria')
                            {!! Form::open(['route' => 'secretaria.configurar.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off']) !!}
                        @endif


                            @include('admin.config.horas.partials.fields')
                        <button type="submit" class="btn btn-success btn-crear pull-left"><span class="icon-plus"></span> Crear Hora</button>
                            @include('admin.config.horas.partials.cancelar')

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection