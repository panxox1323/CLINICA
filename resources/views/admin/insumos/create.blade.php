@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        
        @if(Session::has('message'))

            <p class="alert alert-danger">{{ Session::get('message') }}</p>
        @else

            <div class="panel-heading text-center"><h5 class="porte"><strong>Crear Insumo</strong></h5></div>

        @endif

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 ajuste3">
                    {!! Form::open(['route' => 'admin.insumos.store', 'method' => 'POST', 'autocomplete' => 'off'  ]) !!}
                    @include('admin.insumos.partials.fields')
                    <button type="submit" class="btn btn-success btn-sm pull-left"><span class="icon-check"></span> Crear Insumo</button>
                    <div class="pull-right">
                        @include('admin.insumos.partials.cancelar')
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
