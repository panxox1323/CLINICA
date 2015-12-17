{!! Form::open(['route' => ['admin.productos.destroy', $producto], 'method' => 'DELETE']) !!}

    <button type="submit" onclick="return confirm('Seguro que desea eliminar a: {!! $producto->nombre !!}')" class="btn btn-danger btn-lg"><span class="icon-remove-user"></span> Eliminar Producto</button>

{!! Form::close() !!}