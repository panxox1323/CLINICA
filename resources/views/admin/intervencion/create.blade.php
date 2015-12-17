@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong><span class="icon-circle-with-plus"></span> Agregar Intervenci&oacute;n</strong></h5></div>

        <div class="panel-body">
            <div class="container">

                {!! Form::open(['route' => 'admin.intervencion2.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off']) !!}

                    @include('admin.intervencion.partials.campos')

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection