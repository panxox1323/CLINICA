<table class="table-responsive">
    <table class="table table-striped">
        <tr class="info">
            <th class="active">#</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripci&oacute;n</th>
            <th>Acciones</th>
        </tr>
        @foreach($insumo as $insumo)
            <tr data-id="{{ $insumo->id }}">
                <td>{{ $insumo->id }}</td>
                <td>{{ $insumo->nombre }}</td>
                <td>${{ $insumo->precio_unitario }}</td>
                <td>{{ $insumo->descripcion }}</td>
                <td>
                    <a href="{{ route('secretaria.insumos.edit', $insumo) }}" class="btn btn-success"><span class="icon-edit" title="Editar"></span></a>
                </td>
            </tr>
        @endforeach
    </table>
</table>
