
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">Nombres</th>
        <th class="text-center">Apellidos</th>
        <th class="text-center">Edad</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Saldo</th>
        <th class="text-center">Acciones</th>
    </tr>
    @foreach($users as $user)
        <tr data-id="{{ $user->id }}">
            <td class="text-center">{{ $user->first_name }}</td>
            <td class="text-center">{{ $user->last_name }}</td>
            <td class="text-center">{{ \Carbon\Carbon::parse($user->fecha_nacimiento)->age }} a&ntilde;os</td>
            <td class="text-center">{{ $user->type }}</td>
            <td class="text-center">$ {{number_format($user->saldo) }}</td>
            <td class="text-center">
                @if(Auth::user()->type == 'admin')
                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil2"></span></a>
                    <a href="{{ route('ver-historial', $user) }}" class="btn btn-warning btn-xs" title="Historial cl&iacute;nico" target=""><span class="icon-folder2"></span></a>
                    <a href="pagos/{{ $user->id }}" class="btn btn-primary btn-xs" title="Pagar Cuenta" target=""><span class="icon-moneybag"></span></a>
                    <a href="" class="btn btn-info btn-xs" title="Agendar Cita"><span class="icon-calendar"></span></a>
                    <a href="{{ route('admin.intervencion2.show', $user) }}" class="btn btn-danger btn-xs" title="Agendar Intervenci&oacute;n"><span class="icon-health"></span></a>
                @endif

                @if(Auth::user()->type == 'secretaria')
                    <a href="{{ route('secretaria.users.edit', $user) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil2"></span></a>
                    <a href="{{ route('secretaria/ver-historial', $user) }}" class="btn btn-warning btn-xs" title="Historial cl&iacute;nico" target=""><span class="icon-folder2"></span></a>
                    <a href="secretaria/pagos/{{ $user->id }}" class="btn btn-primary btn-xs" title="Pagar Cuenta" target=""><span class="icon-moneybag"></span></a>
                    <a href="{{ route('secretaria.intervencion2.show', $user) }}" class="btn btn-danger btn-xs" title="Agendar Intervenci&oacute;n"><span class="icon-health"></span></a>
                @endif

            </td>
        </tr>
    @endforeach
</table>

