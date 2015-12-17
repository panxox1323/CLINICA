<table class="table-responsive">
    <table class="table table-striped">
        <tr class="info">
            <th class="active">#</th>
            <th>Especialidad</th>
        </tr>
        @foreach($especialidades as $especialidad)
            <tr data-id="{{ $especialidad->id }}">
                <td>{{ $especialidad->id }}</td>
                <td>{{ $especialidad->especialidad }}</td>
            </tr>
        @endforeach
    </table>
</table>
