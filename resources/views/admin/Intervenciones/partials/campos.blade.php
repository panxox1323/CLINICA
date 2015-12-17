<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
        {!! Form::label('Usuario', 'Usuario') !!}
        {!! Form::select('',$usuarios,null, ['readonly' => 'readonly']) !!}
    </div>
</div>

<button type="button" data-toggle="modal" data-target="#myModal">Selecciona Paciente</button>

