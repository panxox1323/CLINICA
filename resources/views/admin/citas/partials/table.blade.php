
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">Fecha</th>
        <th class="text-center">Hora</th>
        <th class="text-center">Paciente</th>
        <th class="text-center">Especialista</th>
        @if(Auth::user()->type == 'admin' || Auth::user()->type == 'secretaria')
            <th class="text-center">Acciones</th>
        @endif

    </tr>
    @foreach($horas as $hora)
        <tr data-id="{{ $hora->id }}">
            <td class="text-center">{{ $hora->fecha }}</td>
            <td class="text-center">{{ date("H:i",$hora3=strtotime($hora->obtenerHora->hora)) }}</td>
            <td class="text-center">{{ $hora->userUsuario->first_name }} {{ $hora->userUsuario->last_name }}</td>
            <td class="text-center">{{ $hora->userEspecialista->first_name }} {{ $hora->userEspecialista->last_name }}</td>
            <td class="text-center">

                @if(Auth::user()->type == 'admin' || Auth::user()->type == 'secretaria')
                    <a href="#!" class="btn btn-danger btn-delete btn-xs" type="submit" title="Eliminar Cita" target=""><span class="icon-cancel"></span></a>
                @endif

            </td>
        </tr>
    @endforeach
</table>
