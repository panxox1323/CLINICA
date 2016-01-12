@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-capitalize text-center"><h5 class="porte"><span class="icon-pencil2"></span> Editar Insumo {{ $insumo->nombre }}</h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 ajuste3">
                    @if(Auth::user()->type == 'admin')
                        {!! Form::model($insumo, ['route' => ['admin.users.update', $insumo], 'method' => 'PUT', 'autocomplete' => 'off']) !!}
                    @endif
                    @if(Auth::user()->type == 'secretaria')
                        {!! Form::model($insumo, ['route' => ['secretaria.users.update', $insumo], 'method' => 'PUT', 'autocomplete' => 'off']) !!}
                    @endif
                        @include('admin.insumos.partials.campos')

                        <button type="submit" class="btn btn-success pull-left"><span class="icon-pencil2"></span> Editar Insumo</button>
                        <div class="pull-right">
                            @include('admin.insumos.partials.cancelar')
                        </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection