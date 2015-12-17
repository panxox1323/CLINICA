<table class="table-responsive">
    <table class="table table-striped">
        <tr class="info">
            <th class="active">#</th>
            <th>Porcentaje iva</th>
            <th>Fecha inicio</th>
            <th>Fecha termino</th>
            <th>Acciones</th>
        </tr>
        @foreach($ivas as $iva)
            <tr data-id="{{ $iva->id }}">
                <td>{{ $iva->id }}</td>
                <td>{{ $iva->porcentaje_iva }}</td>
                <td>{{ $iva->fecha_inicio }}</td>
                <td>{{ $iva->fech_termino}}</td>
                <td>
                    {!! Form::open(['route' => ['admin.ivas.destroy', $iva], 'method' => 'DELETE']) !!}
                    <a href="{{ route('admin.ivas.edit', $iva) }}" class="btn btn-success"><span class="icon-edit" title="Editar"></span></a>
                    <button type="submit" alt="Eliminar" onclick="return confirm('Seguro que desea eliminar el {!! $iva->porcentaje_iva !!} de IVA')" class="btn btn-danger"><span class="icon-trash"></span></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    </table>
</table>
