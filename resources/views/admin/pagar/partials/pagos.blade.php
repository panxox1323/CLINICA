
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">D&iacute;a</th>
        <th class="text-center">Pago</th>
        @if($usuario->type == 'admin')

            <th class="text-center">Editar</th>

        @endif

    </tr>
    @foreach($pagos as $pago)
        <tr data-id="{{ $pago->id }}">
            <td class="text-center">{{ $pago->fecha }}</td>
            <td class="text-center">${{ number_format($pago->monto) }}</td>
            @if($usuario->type == 'admin')

                <td class="text-center">
                    <a href="{{ route('admin.pagar.edit', $pagos) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil2"></span></a>
                </td>

            @endif
        </tr>
    @endforeach
</table>
