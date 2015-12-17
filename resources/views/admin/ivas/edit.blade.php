@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center">Editar Iva {{ $iva->id }}</div>


                    <div class="panel-body">

                        @include('admin.partials.message')

                        {!! Form::model($iva, ['route' => ['admin.ivas.update', $iva], 'method' => 'PUT' ]) !!}

                            @include('admin.ivas.partials.fields')

                            <button type="submit" class="btn btn-success btn-lg"><span class="icon-edit"></span> Editar IVA</button>
                            @include('admin.ivas.partials.cancelar')


                        {!! Form::close() !!}
                        <hr>
                        @include('admin.ivas.partials.delete')


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection