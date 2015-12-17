
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">Fecha</th>
        <th class="text-center">Hora</th>
        <th class="text-center">Paciente</th>
        <th class="text-center">Especialista</th>
        <th class="text-center">Edad</th>
        <th class="text-center">Teléfono</th>
        <th class="text-center">Acciones</th>
    </tr>
    @foreach($horas as $hora)
        <tr data-id="{{ $hora->id }}">
            <td class="text-center">{{ $hora->fecha }}</td>
            <td class="text-center">{{ date("H:i",$hora3=strtotime($hora->obtenerHora->hora)) }}</td>
            <td class="text-center">{{ $hora->userUsuario->first_name }} {{ $hora->userUsuario->last_name }}</td>
            <td class="text-center">{{ $hora->userEspecialista->first_name }} {{ $hora->userEspecialista->last_name }}</td>
            <td class="text-center">{{ \Carbon\Carbon::parse($hora->userUsuario->fecha_nacimiento)->age }} a&ntilde;os</td>
            <td class="text-center">{{ $hora->userUsuario->telefono }}</td>
            <td class="text-center">

                <a href="#!" class="btn btn-danger btn-delete btn-xs" type="submit" title="Eliminar Cita" target=""><span class="icon-cancel"></span></a>

            </td>
        </tr>
    @endforeach
</table>
