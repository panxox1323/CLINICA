@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Detalles del Diagnóstico {{ $diagnostico->id }}</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">


                            <p class="text-primary">Hay {{ $detalles->total() }} Detalles</p>
                        </div>

                    </div>

                    @include('admin.diagnostico.partials.datos')
                    <div class="paginacion">
                         {!! $detalles->appends(Request::only(['name', 'type']))->render() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection