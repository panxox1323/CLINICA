@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong><span class="icon-add-user"></span> Crear Tratamiento</strong></h5></div>
        <div class="panel-body">
            <div class="container">
                <div class="col-md-11 col-sm-11 col-xs-11 ajuste3">
                    @if(Auth::user()->type == 'admin')
                        {!! Form::open(['route' => 'admin.tratamiento.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off']) !!}
                    @endif

                    @if(Auth::user()->type == 'secretaria')
                        {!! Form::open(['route' => 'secretaria.tratamiento.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off']) !!}
                    @endif


                        @include('admin.tratamientos.partials.campos')
                        <button type="submit" class="btn btn-success btn-crear pull-left"><span class="icon-user-check"></span> Crear Tratamiento</button>
                        <div class="pull-right">
                            @include('admin.tratamientos.partials.cancelar')
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection