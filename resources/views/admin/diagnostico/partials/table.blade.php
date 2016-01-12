
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">N° Diagnóstico</th>
        @if(Auth::user()->type != 'user')
            <th class="text-center">Paciente</th>
        @endif

        <th class="text-center">Especialista</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Total</th>
        <th class="text-center">Acciones</th>
    </tr>
    @foreach($diagnosticos as $diagnostico)
        <tr data-id="{{ $diagnostico->id }}">
            <td class="text-center">{{ $diagnostico->id }}</td>
            @if(Auth::user()->type != 'user')
                <td class="text-center">{{ $diagnostico->userUsuario->first_name }} {{ $diagnostico->userUsuario->last_name }}</td>
            @endif

            <td class="text-center">{{ $diagnostico->userEspecialista->first_name }} {{ $diagnostico->userEspecialista->last_name }}</td>
            <td class="text-center">{{ $diagnostico->fecha }}</td>
            <td class="text-center">$ {{number_format($diagnostico->total) }}</td>
            <td class="text-center">

                @if(Auth::user()->type == 'admin')
                    <a href="{{ route('admin.diagnostico.show', $diagnostico) }}" class="btn btn-success btn-xs" title="Ver Detalle" target=""><span class="icon-binoculars"></span></a>
                @endif
                @if(Auth::user()->type == 'secretaria')
                    <a href="{{ route('secretaria.diagnostico.show', $diagnostico) }}" class="btn btn-success btn-xs" title="Ver Detalle" target=""><span class="icon-binoculars"></span></a>
                @endif
                @if(Auth::user()->type == 'especialista')
                    <a href="{{ route('especialista.diagnostico.show', $diagnostico) }}" class="btn btn-success btn-xs" title="Ver Detalle" target=""><span class="icon-binoculars"></span></a>
                @endif
                @if(Auth::user()->type == 'user')
                    <a href="{{ route('user.diagnostico.show', $diagnostico) }}" class="btn btn-success btn-xs" title="Ver Detalle" target=""><span class="icon-binoculars"></span></a>
                @endif

                @if(Auth::user()->type != 'user')
                    <a href="{{ route('generar-pdf', $diagnostico) }}" class="btn btn-info btn-xs" title="Ver Pdf"><span class="icon-file-pdf"></span></a>
                @endif
            </td>
        </tr>
    @endforeach
</table>

