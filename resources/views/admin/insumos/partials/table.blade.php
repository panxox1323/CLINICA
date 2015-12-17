<table class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <tr class="info">
            <th class="text-center">Nombre</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Stock</th>
            <th class="text-center">Acciones</th>
        </tr>
        @foreach($insumo as $insumos)
            <tr data-id="{{ $insumos->id }}">
                <td class="text-center">{{ $insumos->nombre }}</td>
                <td class="text-center">${{ number_format($insumos->precio_unitario) }}</td>
                <td class="text-center">{{ $insumos->stock }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.insumos.edit', $insumos) }}" class="btn btn-success btn-xs"><span class="icon-pencil2" title="Editar"></span></a>
                </td>
            </tr>
        @endforeach
    </table>
</table>
