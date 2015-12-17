
<div class="form-group">
    {!! Form::label('nombres', 'Nombres', ['class' => '']) !!}
    {!! Form::text('nombres', null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('apellidos', 'Apellidos', ['class' => '']) !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('run', 'RUT', ['class' => '']) !!}
    {!! Form::text('run', null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('id_especialidad', 'Especialidad') !!}
    {!! Form::select('id_especialidad', config('options.tipoEspecialidad'), null, ['class' => 'form-control']) !!}
</div>


