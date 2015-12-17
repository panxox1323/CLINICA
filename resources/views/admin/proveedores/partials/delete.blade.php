{!! Form::open(['route' => ['admin.proveedores.destroy', $proveedor], 'method' => 'DELETE']) !!}

    <button type="submit" onclick="return confirm('Seguro que desea eliminar a: {!! $proveedor->id !!}')" class="btn btn-danger btn-lg"><span class="icon-remove-user"></span> Eliminar Proveedor</button>

{!! Form::close() !!}