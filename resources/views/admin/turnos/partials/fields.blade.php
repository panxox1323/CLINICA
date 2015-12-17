
<div class="form-group">
    {!! Form::label('tipo', 'Tipo', ['class' => '']) !!}
    {!! Form::select('tipo', config('options.tipoTurno'), null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('duracion', 'Duraci&oacute;n') !!}
    {!! Form::selectRange('duracion', 1, 8,null, ['class' => 'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('estado', 'Estado', ['class' => '']) !!}
    {!! Form::select('estado', config('options.estado'), null, ['class' => 'form-control']) !!}
</div>