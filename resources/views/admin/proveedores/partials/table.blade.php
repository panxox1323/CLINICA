<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">Nombre</th>
        <th class="text-center">Telefono</th>
        <th class="text-center">Email</th>
        <th class="text-center">Ciudad</th>
        <th class="text-center">Acciones</th>
    </tr>
    @foreach($proveedores as $proveedor)
        <tr data-id="{{ $proveedor->id }}">
            <td class="text-center">{{ $proveedor->nombre }}</td>
            <td class="text-center">{{ $proveedor->telefono }}</td>
            <td class="text-center">{{ $proveedor->email }}</td>
            <td class="text-center">{{ $proveedor->ciudad }}</td>
            <td class="text-center">
                @if(Auth::user()->type == 'admin')
                    <a href="{{ route('admin.proveedores.edit', $proveedor) }}" class="btn btn-success btn-xs"><span class="icon-pencil2" title="Editar"></span></a>
                @endif
                @if(Auth::user()->type == 'secretaria')
                    <a href="{{ route('secretaria.proveedores.edit', $proveedor) }}" class="btn btn-success btn-xs"><span class="icon-pencil2" title="Editar"></span></a>
                @endif
            </td>
        </tr>
    @endforeach
</table>

