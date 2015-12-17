{!! Form::open(['route' => ['admin.turnos.destroy', $user], 'method' => 'DELETE']) !!}

    <button type="submit" onclick="return confirm('Seguro que desea eliminar a: ')" class="btn btn-danger btn-lg"><span class="icon-remove-user"></span> Eliminar Usuario</button>

{!! Form::close() !!}