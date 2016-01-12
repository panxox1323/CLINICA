@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Perfil de {{ Auth::user()->first_name.' '.Auth::user()->last_name }}</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <table class="table table-striped table-bordered table-hover">
                        <tr class="info">
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Edad</th>
                            <th>Tipo</th>
                            <th class="text-center">Acciones</th>
                        </tr>

                        @foreach($user as $users)
                            <tr data-id="{{ $users->id }}">
                                <td>{{ $users->first_name }}</td>
                                <td>{{ $users->last_name }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ \Carbon\Carbon::parse($users->fecha_nacimiento)->age }} a&ntilde;os</td>
                                <td>{{ trans($users->type) }}</td>
                                <td class="text-center">
                                    @if(Auth::user()->type == 'admin')
                                        <a href="{{ route('admin.userPerfil.edit', Auth::user()) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil2"></span></a>
                                    @endif
                                    @if(Auth::user()->type == 'secretaria')
                                        <a href="{{ route('secretaria.userPerfil.edit', Auth::user()) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil2"></span></a>
                                    @endif
                                    @if(Auth::user()->type == 'especialista')
                                        <a href="{{ route('especialista.userPerfil.edit', Auth::user()) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil2"></span></a>
                                    @endif
                                    @if(Auth::user()->type == 'user')
                                        <a href="{{ route('user.userPerfil.edit', Auth::user()) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil2"></span></a>
                                    @endif

                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection