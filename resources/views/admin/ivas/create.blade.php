@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center"><h4><strong><span class="icon-circle-with-plus"></span> Nuevo IVA</strong></h4></div>

                    <div class="panel-body">

                        @include('admin.partials.message')


                        {!! Form::open(['route' => 'admin.ivas.store', 'method' => 'POST',  ]) !!}
                        <div class="form-group">
                            {!! Form::label('porcentaje_iva', 'Porcentaje iva', ['class' => '']) !!}
                            {!! Form::select('porcentaje_iva', config('options.ivas'), null, ['class' => 'form-control']) !!}
                        </div>
                            @include('admin.ivas.partials.fields')
                            <button type="submit" class="btn btn-success btn-lg"><span class="icon-check"></span> Crear Iva</button>
                            @include('admin.ivas.partials.cancelar')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection