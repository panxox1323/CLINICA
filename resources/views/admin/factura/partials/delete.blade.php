{!! Form::open(['route' => ['admin.users.destroy', $user], 'method' => 'DELETE']) !!}

    <button type="submit" onclick="return confirm('Seguro que desea eliminar a: {!! $user->full_name !!}')" class="btn btn-danger btn-lg"><span class="icon-remove-user"></span> Eliminar Usuario</button>

{!! Form::close() !!}