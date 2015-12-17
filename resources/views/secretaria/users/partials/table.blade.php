<table class="table-responsive">
    <table class="table table-striped">
        <tr class="info">
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
        @foreach($users as $user)
            <tr data-id="{{ $user->id }}">
                <td>{{ $user->id }}</td>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ trans($user->type) }}</td>
                <td>
                    {!! Form::open(['route' => ['secretaria.users.destroy', $user], 'method' => 'DELETE']) !!}
                    <a href="{{ route('secretaria.users.edit', $user) }}" class="btn btn-success" title="Editar usuario" target=""><span class="icon-edit"></span></a>
                    <a href="{{ route('secretaria.users.show', $user) }}" class="btn btn-warning" title="Historial cl&iacute;nico" target=""><span class="icon-folder2"></span></a>

                    <a href="" class="btn btn-primary" title="Pagar Cuenta" target=""><span class="icon-moneybag"></span></a>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</table>
