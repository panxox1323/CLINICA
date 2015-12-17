
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="active text-center">#</th>
        <th class="text-center">Especialidad</th>
        <th class="text-center">Acciones</th>
    </tr>
    @foreach($especialidades as $especialidad)
        <tr data-id="{{ $especialidad->id }}">
            <td class="text-center">{{ $especialidad->id }}</td>
            <td class="text-center">{{ $especialidad->especialidad }}</td>
            <td class="text-center">
                <a href="{{ route('admin.especialidades.edit', $especialidad) }}" class="btn btn-success btn-xs"><span class="icon-pencil2" title="Editar"></span></a>
            </td>
        </tr>
    @endforeach
</table>
