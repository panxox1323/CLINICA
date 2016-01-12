
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">N° Diagnóstico</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Paciente</th>
        <th class="text-center">Total</th>
        <th class="text-center">Acciones</th>
    </tr>
    @foreach($misDiagnosticos as $diagnostico)
        <tr data-id="{{ $diagnostico->id }}">
            <td class="text-center">{{ $diagnostico->id }}</td>
            <td class="text-center">{{ $diagnostico->fecha }}</td>
            @if(Auth::user()->type != 'user')
                <td class="text-center">{{ $diagnostico->userUsuario->first_name }} {{ $diagnostico->userUsuario->last_name }}</td>
            @endif

            <td class="text-center">$ {{number_format($diagnostico->total) }}</td>
            <td class="text-center">

                <a href="{{ route('especialista.diagnostico.show', $diagnostico) }}" class="btn btn-success btn-xs" title="Ver Detalle" target=""><span class="icon-binoculars"></span></a>

                <a href="{{ route('especialista/generar-pdf', $diagnostico) }}" class="btn btn-info btn-xs" target="_blank" title="Ver Pdf"><span class="icon-file-pdf"></span></a>

            </td>
        </tr>
    @endforeach
</table>

