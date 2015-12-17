
<div class="form-group">
    <strong>{!! Form::text('first_name', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nombres:'] ) !!}</strong>
</div>

<div class="form-group">
    <strong>{!! Form::text('last_name', null, ['class' => 'form-control floating-label', 'placeholder' => 'Apellidos:'] ) !!}</strong>
</div>

<div class="form-group">
    <strong>{!! Form::password('password', ['class' => 'form-control floating-label', 'placeholder' => 'Password'] ) !!}</strong>
</div>

<div class="form-group">
    <strong>{!! Form::text('run', null, ['class' => 'form-control floating-label', 'placeholder' => 'RUN']) !!}</strong>
</div>

<div class="form-group">
    <strong>{!! Form::text('direccion', null, ['class' => 'form-control floating-label', 'placeholder' => 'Direccion']) !!}</strong>
</div>

<div class="form-group">
    <strong>{!! Form::text('ciudad', null, ['class' => 'form-control floating-label', 'placeholder' => 'Ciudad']) !!}</strong>
</div>

<div class="form-group">
    {!! Form::date('fecha_nacimiento') !!}
</div>

<div class="form-group">
    <strong>{!! Form::text('telefono', null, ['class' => 'form-control floating-label', 'placeholder' => 'Tel&eacute;fono']) !!}</strong>
</div>

<div class="form-group">
    <strong>{!! Form::text('email', null, ['class' => 'form-control floating-label', 'placeholder' => 'Correo electr&oacute;nico']) !!}</strong>
</div>

<div class="form-group">
    <strong>{!! Form::select('type', config('opciones.tipos'), null, ['class' => 'form-control floating-label', 'placeholder' => 'Tipo de usuario']) !!}</strong>
</div>
