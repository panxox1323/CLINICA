<table class="table-responsive">
    <table class="table table-striped">
        <tr class="info">
            <th class="active">#</th>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Espacialidad</th>
            <th>Acciones</th>
        </tr>
        @foreach($especialistas as $especialista)
            <tr data-id="{{ $especialista->id }}">
                <td>{{ $especialista->id }}</td>
                <td>{{ $especialista->run }}</td>
                <td>{{ $especialista->full_name }}</td>
                <td>{{ $especialista->id_especialidad }}</td>
                @if(Auth::user()->type == 'admin' || Auth::user()->type == 'secretaria' || Auth::user()->type == 'ooi')
                    <td>
                        <a href="{{ route('secretaria.especialista.edit', $especialista) }}" class="btn btn-success"><span class="icon-edit" title="Editar"></span></a>
                     </td>
                @endif
            </tr>
        @endforeach
    </table>
</table>
