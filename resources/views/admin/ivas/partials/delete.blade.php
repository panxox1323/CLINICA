{!! Form::open(['route' => ['admin.ivas.destroy', $iva], 'method' => 'DELETE']) !!}

    <button type="submit" onclick="return confirm('Seguro que desea eliminar el {!! $iva->porcentaje_iva !!} de IVA ')" class="btn btn-danger btn-lg"><span class="icon-remove-user"></span> Eliminar IVA</button>

{!! Form::close() !!}