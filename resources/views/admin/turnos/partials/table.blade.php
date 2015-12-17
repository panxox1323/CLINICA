<table class="table-responsive">
    <table class="table table-striped">
        <tr class="info">
            <th class="active">#</th>
            <th>Tipo</th>
            <th>Duraci&oacute;n</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        @foreach($turnos as $turno)
            <tr data-id="{{ $turno->id }}">
                <td>{{ $turno->id }}</td>
                <td>{{ $turno->tipo }}</td>
                <td>{{ $turno->duracion }}</td>
                <td>{{ $turno->estado }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.turnos.destroy', $turno], 'method' => 'DELETE']) !!}
                    <a href="{{ route('admin.turnos.edit', $turno) }}" class="btn btn-success"><span class="icon-edit" title="Editar"></span></a>
                    <button type="submit" alt="Eliminar" onclick="return confirm('Seguro que desea eliminar a: {!! $turno->tipo !!}')" class="btn btn-danger"><span class="icon-trash"></span></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</table>
