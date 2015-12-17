@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Interveciones de {!! $users->first_name !!} {!! $users->last_name !!}</strong></h5></div>

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>
                            <a href="{{ route('admin.intervencion2.create') }}" role="button" class="btn btn-info"><span class="icon-add-user"></span> Crear Intervenci&oacute;n</a>
                        </p>

                    </div>
                    @include('admin.intervenciones.partials.tabel')
                </div>
            </div>
        </div>
    </div>

@endsection