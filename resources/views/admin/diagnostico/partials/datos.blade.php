
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">Tratamiento</th>
        <th class="text-center">Valor</th>
        <th class="text-center">Estado</th>
        @if(Auth::user()->type == 'admin' || Auth::user()->type == 'secretaria' || Auth::user()->type == 'especialista')
            <th class="text-center">Acciones</th>
        @endif
    </tr>
    @foreach($detalles as $detalle)
        <tr data-id="{{ $detalle->id }}">
            <td class="text-center">{{ $detalle->tratamiento->nombre }}</td>
            <td class="text-center">$ {{ number_format($detalle->precio) }}</td>
            @if($detalle->estado == 'pendiente')
                <td class="text-center color-1">{{ $detalle->estado }}</td>
            @else
                <td class="text-center color-2">{{ $detalle->estado }}</td>
            @endif

            <td class="text-center">
                @if(Auth::user()->type == 'admin' || Auth::user()->type == 'secretaria' || Auth::user()->type == 'especialista')

                    @if($detalle->estado == 'pendiente')

                        <a href="{{ route('especialista/cambiar-estado', [$detalle, $diagnostico->id_usuario]) }}"
                           onclick="return confirm('Esta Seguro, Esta operación no se podrá deshacer')"
                           class="btn btn-warning btn-xs" title="Editar Detalle" target="">
                            <span class="icon-switch2"></span>
                        </a>

                    @endif
                @endif


                @if (Auth::user()->type == 'admin')

                        <a href="{{ route('admin.diagnostico.edit', $detalle) }}" class="btn btn-success btn-xs" title="Editar Detalle" target=""><span class="icon-pencil2"></span></a>

                @endif



            </td>
        </tr>
    @endforeach
</table>

