
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">ID</th>
        <th class="text-center">Hora Inicio</th>
        @if(Auth::user()->type == 'admin')
            <th class="text-center">Acciones</th>
        @endif

    </tr>
    @foreach($horas as $hora)
        <tr data-id="{{ $hora->id }}">
            <td class="text-center"> {{ $hora->id }}</td>
            <td class="text-center">{{ $hora->hora }}</td>
            @if(Auth::user()->type == 'admin')
            <td class="text-center">
                <a href="{{ route('admin.configurar.edit', $hora) }}" class="btn btn-success btn-xs" title="Editar Hora" target=""><span class="icon-pencil2"></span></a>
                <a href="{{ route('admin.configurar.destroy', $hora) }}" class="btn btn-warning btn-xs" title="Eliminar Hora" target="" onclick="return confirm('Esta seguro que desea eliminar la hora')"><span class="icon-cancel"></span></a>
            </td>
            @endif
        </tr>
    @endforeach
</table>