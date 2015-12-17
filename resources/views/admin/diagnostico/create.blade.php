@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong><span class="icon-plus"></span> Ingresar Diagnóstico</strong></h5></div>

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 ajuste3">

                        {!! Form::open(['route' => 'admin.diagnostico.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off']) !!}

                            @include('admin.diagnostico.partials.fields')
                            @include('admin.diagnostico.partials.camposs')

                        {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection