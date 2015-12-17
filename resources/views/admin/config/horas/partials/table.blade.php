
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">ID</th>
        <th class="text-center">Hora Inicio</th>


        <th class="text-center">Acciones</th>
    </tr>
    @foreach($horas as $hora)
        <tr data-id="{{ $hora->id }}">
            <td class="text-center"> {{ $hora->id }}</td>
            <td class="text-center">{{ $hora->hora }}</td>


            <td class="text-center">
                <a href="{{ route('admin.configurar.edit', $hora) }}" class="btn btn-success btn-xs" title="Editar Hora" target=""><span class="icon-pencil2"></span></a>

            </td>
        </tr>
    @endforeach
</table>