
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th class="text-center">Fecha</th>
        <th class="text-center">Monto</th>
    </tr>
    @foreach($pagos as $pago)
        <tr data-id="{{ $pago->id }}">
            <td class="text-center">{{ $pago->fecha }}</td>
            <td class="text-center">$ {{ number_format($pago->monto) }}</td>
            {{--<td class="text-center">{{ \Carbon\Carbon::parse($user->fecha_nacimiento)->age }} a&ntilde;os</td>--}}

        </tr>
    @endforeach
</table>

