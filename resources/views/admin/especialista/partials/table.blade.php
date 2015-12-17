
    <table class="table table-striped table-bordered table-hover">
        <tr class="info">
            <th class="text-center">Nombre</th>
            <th class="text-center">Espacialidad</th>
            <th class="text-center">Rut</th>
            <th class="text-center">Tel&eacute;fono</th>
            <th class="text-center">Acciones</th>
        </tr>
        @foreach($especialistas as $especialista)
            <tr data-id="{{ $especialista->id }}">
                <td class="text-center">{{ $especialista->full_name }}</td>
                <td class="text-center">{{ $especialista->especialidad['especialidad']}}</td>
                <td class="text-center">{{ $especialista->run }}</td>
                <td class="text-center">{{ $especialista->telefono }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.especialistas.edit', $especialista) }}" class="btn btn-success btn-xs"><span class="icon-pencil2" title="Editar"></span></a>
                </td>
            </tr>
        @endforeach
    </table>
