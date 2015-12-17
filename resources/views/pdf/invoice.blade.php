<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example 2</title>
    {!! Html::style('css/stylePDF.css') !!}
</head>
<body>
    <div id="details" class="clearfi">
        <div id="invoice">
            <h1>INVOICE {{ $invoice }}</h1>
            <div class="date">Date of Invoice: {{ $date }}</div>
        </div>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="">Nombre</th>
                <th class="">Apellido</th>
                <th class="">Email</th>
                <th class="">Edad</th>
                <th class="">Tipo</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ \Carbon\Carbon::parse($user->fecha_nacimiento)->age }} a&ntilde;os</td>
                <td>{{ trans($user->type) }}</td>
            </tr>
        @endforeach

        </tbody>
        <tfoot>

        </tfoot>
    </table>
</body>
</html>