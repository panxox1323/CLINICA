
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">D&iacute;a</th>
        <th class="text-center">Hora</th>
        <th class="text-center">Estado</th>
        <th class="text-center">Especialista</th>
        <th class="text-center">Valor</th>
        <th class="text-center">Acciones</th>
    </tr>
    @foreach($intervenciones as $intervencion)
        <tr data-id="{{ $intervencion->id }}">
            <td class="text-center">{{ $intervencion->fecha_intervencion }}</td>
            <td class="text-center">{{ $intervencion->hora_intervencion }}</td>
            <td class="text-center">{{ $intervencion->estado}}</td>
            <td class="text-center">{{ $intervencion->id_especialista  }}</td>
            <td class="text-center">$ {!! number_format($intervencion->valor_tratamiento) !!}</td>
            <td class="text-center">
                <a href="{{ route('admin.users.edit') }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil2"></span></a>

            </td>
        </tr>
    @endforeach
</table>

