
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">Insumo</th>
        <th class="text-center">Cantidad</th>
        <th class="text-center">Precio</th>
        <th class="text-center">SubTotal</th>
        @if(Auth::user()->type == 'admin')
            <th class="text-center">Acciones</th>
        @endif

    </tr>
    @foreach($detalles as $detalle)
        <tr data-id="{{ $detalle->id }}">
            <td class="text-center">{{ $detalle->insumo->nombre }}</td>

            <td class="text-center">{{ $detalle->cantidad }}</td>

            <td class="text-center">${{ number_format($detalle->precio) }}</td>

            <td class="text-center color-2">${{ number_format($detalle->precio * $detalle->cantidad) }}</td>
            @if (Auth::user()->type == 'admin')
                <td class="text-center">
                    <a href="{{ route('admin.factura.edit', $detalle) }}" class="btn btn-success btn-xs" title="Editar Detalle" target=""><span class="icon-pencil2"></span></a>
                </td>
            @endif
        </tr>
    @endforeach
</table>

