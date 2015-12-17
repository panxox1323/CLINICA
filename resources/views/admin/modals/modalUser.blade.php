<div class="modal fade" id="myModal" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="gridSystemModalLabel">Pacientes del Sistema</h4>
                <table class="table table-striped table-bordered table-hover">
                    <tr class="info">
                        <th class="text-center">Nombres</th>
                        <th class="text-center">Apellidos</th>
                    </tr>
                </table>
            </div>
            <div class="modal-body modal-porte">
                <div class="row">

                    <table class="table table-striped table-bordered table-hover">

                            @foreach($users as $user)
                            <tr data-id="{{ $user->id }}">
                                <td class="text-center">{{ $user->first_name }}</td>
                                <td class="text-center">{{ $user->last_name }}</td>
                            </tr>
                            @endforeach
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>
