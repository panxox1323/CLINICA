<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">Pedido N°</th>
        <th class="text-center">Proveedor</th>
        <th class="text-center">Email</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Total</th>
        <th class="text-center">Acciones</th>
    </tr>
    @foreach($pedidos as $pedido)
        <tr data-id="{{ $pedido->id }}">
            <td class="text-center">{{ $pedido->id }}</td>
            <td class="text-center">{{ $pedido->proveedor->nombre }}</td>
            <td class="text-center">{{ $pedido->proveedor->email }}</td>
            <td class="text-center">{{ $pedido->fecha }}</td>
            <td class="text-center">$ {{ number_format($pedido->total) }}</td>

            <td class="text-center">

                <a href="{{ route('admin.pedido.edit', $pedido) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil2"></span></a>
                <a href="{{ route('admin.pedido.show', $pedido) }}" class="btn btn-info btn-xs" title="Ver Detalle del Pedido" target=""><span class="icon-binoculars"></span></a>
                <a href="{{ route('pdfPedido', $pedido->id) }}" class="btn btn-warning btn-xs" title="Ver en PDF" target="_blank"><span class="icon-file-pdf"></span></a>

            </td>
        </tr>
    @endforeach
</table>

