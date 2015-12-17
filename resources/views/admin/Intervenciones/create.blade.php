@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Agregar Intervenci&oacute;n</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                {!! Form::open(['route' => 'admin.intervencion.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off']) !!}

                    @include('admin.intervenciones.partials.campos')

                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection

@include('admin.modals.modalUser')