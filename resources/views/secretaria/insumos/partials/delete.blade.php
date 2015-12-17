{!! Form::open(['route' => ['admin.insumos.destroy', $insumo], 'method' => 'DELETE']) !!}

    <button type="submit" onclick="return confirm('Seguro que desea eliminar a: {!! $insumo->name !!}')" class="btn btn-danger btn-lg"><span class="icon-cancel2"></span> Eliminar Insumo</button>

{!! Form::close() !!}