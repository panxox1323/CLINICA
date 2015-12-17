<table class="table-responsive">
    <table class="table table-striped">
        <tr class="info">
            <th class="active">#</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        @foreach($productos as $producto)
            <tr data-id="{{ $producto->id }}">
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->precio }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.productos.destroy', $producto], 'method' => 'DELETE']) !!}
                    <a href="{{ route('admin.productos.edit', $producto) }}" class="btn btn-success"><span class="icon-edit" title="Editar"></span></a>
                    <button type="submit" alt="Eliminar" onclick="return confirm('Seguro que desea eliminar a: {!! $producto->nombre !!}')" class="btn btn-danger"><span class="icon-trash"></span></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</table>
