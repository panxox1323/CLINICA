<table class="table-responsive">
    <table class="table table-striped">
        <tr class="info">
            <th class="active">#</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Giro</th>
            <th>Acciones</th>
        </tr>
        @foreach($proveedores as $proveedor)
            <tr data-id="{{ $proveedor->id }}">
                <td>{{ $proveedor->id }}</td>
                <td>{{ $proveedor->nombre }}</td>
                <td>{{ $proveedor->telefono }}</td>
                <td>{{ $proveedor->email }}</td>
                <td>{{ $proveedor->giro }}</td>
                <td>
                    <a href="{{ route('secretaria.proveedor.edit', $proveedor) }}" class="btn btn-success"><span class="icon-edit" title="Editar"></span></a>
                </td>
            </tr>
        @endforeach
    </table>
</table>
