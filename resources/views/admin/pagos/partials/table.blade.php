
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">Paciente</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Hora</th>
        <th class="text-center">Monto Cancelado</th>
        <th class="text-center">Acciones</th>
    </tr>
    @foreach($pagos as $pago)
        <tr data-id="{{ $pago->id }}">
            <td class="text-center">{{ $pago->user->first_name }} {{ $pago->user->last_name }}</td>
            <td class="text-center">{{ $pago->fecha }}</td>
            <td class="text-center">{{ date("H:i", $hora=strtotime($pago->created_at)) }}</td>
            <td class="text-center">$ {{ number_format($pago->monto) }}</td>
            <td class="text-center">
                <a href="{{ route('admin.pagar.edit', $pago) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil2"></span></a>
            </td>
        </tr>
    @endforeach
</table>
