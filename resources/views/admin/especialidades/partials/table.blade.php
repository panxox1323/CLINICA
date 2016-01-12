
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="active text-center">Especialidad N°</th>
        <th class="text-center">Especialidad</th>
        @if(Auth::user()->type == 'admin')
            <th class="text-center">Acciones</th>
        @endif


    </tr>
    @foreach($especialidades as $especialidad)
        <tr data-id="{{ $especialidad->id }}">
            <td class="text-center">{{ $especialidad->id }}</td>
            <td class="text-center">{{ $especialidad->especialidad }}</td>
            @if(Auth::user()->type == 'admin')
            <td class="text-center">
                <a href="{{ route('admin.especialidades.edit', $especialidad) }}" class="btn btn-success btn-xs"><span class="icon-pencil2" title="Editar"></span></a>
            </td>
            @endif
        </tr>
    @endforeach
</table>
