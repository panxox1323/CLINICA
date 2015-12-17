{!! Form::open(['route' => ['admin.especialidad.destroy', $especialidad], 'method' => 'DELETE']) !!}

    <button type="submit" onclick="return confirm('Seguro que desea eliminar a: {!! $especialidad->name !!}')" class="btn btn-danger btn-lg"><span class="icon-cancel2"></span> Eliminar Especialidad</button>

{!! Form::close() !!}