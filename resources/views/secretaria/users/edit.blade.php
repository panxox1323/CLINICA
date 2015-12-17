@extends('secretaria.layout')

@section('content')
    <div class="container navbaar">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center">Editar Usuario {{ $user->first_name }}</div>


                    <div class="panel-body">

                        @include('admin.partials.message')

                        {!! Form::model($user, ['route' => ['secretaria.users.update', $user], 'method' => 'PUT' ]) !!}

                            @include('secretaria.users.partials.fields')

                            <button type="submit" class="btn btn-success"><span class="icon-edit"></span> Editar Usuario</button>
                            @include('secretaria.users.partials.cancelar')


                        {!! Form::close() !!}


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection