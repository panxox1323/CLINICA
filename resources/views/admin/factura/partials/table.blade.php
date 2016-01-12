<table class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <tr class="info">
            <th class="text-center">N&uacute;mero Factura</th>
            <th class="text-center">Proveedor</th>
            <th class="text-center">Fecha</th>
            <th class="text-center">Forma Pago</th>
            <th class="text-center">Total</th>
            <th class="text-center">Acciones</th>
        </tr>
        @foreach($facturas as $factura)

            <tr data-id="{{ $factura->id_factura }}">
                <td class="text-center">{{ $factura->numero_factura }}</td>
                <td class="text-center">{{ $factura->proveedor->nombre }}</td>
                <td class="text-center">{{ $factura->fecha }}</td>
                <td class="text-center">{{ $factura->forma_pago }}</td>
                <td class="text-center">$ {{ number_format($factura->total) }}</td>
                @if(Auth::user()->type == 'admin')
                    <td class="text-center">

                        <a href="{{ route('admin.factura.edit', $factura) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil"></span></a>
                        <a href="{{ route('admin.factura.show', $factura) }}" class="btn btn-info btn-xs" title="Ver Detalle" target=""><span class="icon-binoculars"></span></a>
                        <a href="{{ route('pdfFactura', $factura->numero_factura) }}" class="btn btn-warning btn-xs" title="Ver Factura" target=""><span class="icon-file-pdf"></span></a>
                    </td>
                @endif
                @if(Auth::user()->type == 'secretaria')
                    <td>
                        <a href="{{ route('secretaria.factura.show', $factura) }}" class="btn btn-info btn-xs" title="Ver Detalle" target=""><span class="icon-binoculars"></span></a>
                        <a href="{{ route('secretaria/pdfFactura', $factura->numero_factura) }}" class="btn btn-warning btn-xs" title="Ver Factura" target=""><span class="icon-file-pdf"></span></a>
                    </td>
                @endif
            </tr>

        @endforeach
    </table>
</table>
