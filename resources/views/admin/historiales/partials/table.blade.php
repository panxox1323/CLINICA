<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">Diagnóstico N°</th>
        <th class="text-center">Especialista</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Total</th>
        <th class="text-center">Acciones</th>
    </tr>
    @foreach($diagnosticos as $diagnostico)
        <tr data-id="{{ $diagnostico->id }}">
            <td class="text-center">{{ $diagnostico->id }}</td>
            <td class="text-center">{{ $diagnostico->userEspecialista->first_name.' '. $diagnostico->userEspecialista->last_name }}</td>
            <td class="text-center">{{ $diagnostico->fecha }}</td>
            <td class="text-center">${{ number_format($diagnostico->total) }}</td>
            <td class="text-center">

                <a href="{{ route('ver-detalle-diagnostico', $diagnostico) }}" class="btn btn-success btn-xs" title="Ver Detalle" target=""><span class="icon-binoculars"></span></a>

            </td>
        </tr>
    @endforeach
</table>

