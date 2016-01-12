
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">Paciente</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Hora</th>
        <th class="text-center">Monto Cancelado</th>
        @if(Auth::user()->type == 'admin' || Auth::user()->type == 'secretaria')
            <th class="text-center">Acciones</th>

        @endif

    </tr>
    @foreach($pagos as $pago)
        <tr data-id="{{ $pago->id }}">
            <td class="text-center">{{ $pago->user->first_name }} {{ $pago->user->last_name }}</td>
            <td class="text-center">{{ $pago->fecha }}</td>
            <td class="text-center">{{ date("H:i", $hora=strtotime($pago->created_at)) }}</td>
            <td class="text-center">$ {{ number_format($pago->monto) }}</td>

            @if(Auth::user()->type == 'admin')
                <td class="text-center">
                    <a href="{{ route('admin.pagar.edit', $pago) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil2"></span></a>
                    <a href="{{ route('admin/reportePago', $pago) }}" class="btn btn-warning btn-xs" title="Reporte del Pago" target="_blank"><span class="icon-file-pdf"></span></a>
                </td>
            @endif
            @if(Auth::user()->type == 'secretaria')
                <td class="text-center">
                    <a href="{{ route('secretaria/reportePago', $pago) }}" class="btn btn-warning btn-xs" title="Reporte del Pago" target="_top"><span class="icon-file-pdf"></span></a>
                </td>
            @endif
        </tr>
    @endforeach
</table>
