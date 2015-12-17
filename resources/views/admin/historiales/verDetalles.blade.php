@extends('layout.admin')


@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Detalles del Historial N° {{ $diagnostico->id }}</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="col-md-3 col-sm-3 col-xs-3">


                        <p class="text-primary">Existen {{ $detalles->total() }} Detalles</p>
                    </div>

                    <div class="col-md-7 col-sm-12 col-xs-12 col-md-offset-2 ">

                    </div>

                    @include('admin.historiales.partials.tabla')
                    <div class="paginacion">
                        {!! $detalles->appends(Request::only(['id', 'type']))->render() !!}
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection

