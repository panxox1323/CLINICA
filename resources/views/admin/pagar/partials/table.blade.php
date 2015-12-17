
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">D&iacute;a</th>
        <th class="text-center">Hora</th>
        <th class="text-center">Especialista</th>
    </tr>
    @foreach($consultas as $consulta)
        <tr data-id="{{ $consulta->id }}">
            <td class="text-center">{{ $consulta->fecha }}</td>
            <td class="text-center">{{ date("H:i",$hora=strtotime($consulta->obtenerHora->hora)) }}</td>
            <td class="text-center">{{ $consulta->userEspecialista->first_name }} {{ $consulta->userEspecialista->last_name }}</td>
        </tr>
    @endforeach
</table>

