@extends('layout.admin')
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Perfil de {{ Auth::user()->first_name.' '.Auth::user()->last_name }} </strong></h5></div>

        @include('admin.partials.mensaje')
        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    @if(Auth::user()->type == 'admin')
                        {!! Form::model($user, ['route' => ['admin.userPerfil.update', $user], 'method' => 'PUT' ]) !!}
                    @endif
                    @if(Auth::user()->type == 'secretaria')
                        {!! Form::model($user, ['route' => ['secretaria.userPerfil.update', $user], 'method' => 'PUT' ]) !!}
                    @endif
                    @if(Auth::user()->type == 'especialista')
                        {!! Form::model($user, ['route' => ['especialista.userPerfil.update', $user], 'method' => 'PUT' ]) !!}
                    @endif
                    @if(Auth::user()->type == 'user')
                        {!! Form::model($user, ['route' => ['user.userPerfil.update', $user], 'method' => 'PUT' ]) !!}
                    @endif


                        @include('admin.users.partials.feildsPerfil')

                        <button type="submit" class="btn btn-success btn-sm pull-left"><span class="icon-pencil2"></span> Editar Perfil</button>
                        <div class="pull-right">
                            @include('admin.proveedores.partials.cancelar')
                        </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

@endsection