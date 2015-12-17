
<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        {!! Form::label('first_name', 'Nombres', ['class' => '']) !!}
        <strong>{!! Form::text('first_name', null, ['class' => 'form-control'] ) !!}</strong>
    </div>
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        {!! Form::label('last_name', 'Apellidos', ['class' => '']) !!}
        <strong>{!! Form::text('last_name', null, ['class' => 'form-control']) !!}</strong>
    </div>
</div>


<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        {!! Form::label('password', 'Password', ['class' => '']) !!}
        <strong>{!! Form::password('password', ['class' => 'form-control']) !!}</strong>
    </div>

    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        {!! Form::label('run', 'RUN', ['class' => '']) !!}
        <strong>{!! Form::text('run', null, ['class' => 'form-control']) !!}</strong>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        {!! Form::label('direccion', 'Direcci&oacute;n', ['class' => '']) !!}
        <strong>{!! Form::text('direccion', null, ['class' => 'form-control']) !!}</strong>
    </div>

    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        {!! Form::label('ciudad', 'Ciudad', ['class' => '']) !!}
        <strong>{!! Form::text('ciudad', null,['class' => 'form-control']) !!}</strong>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento', ['class' => '']) !!}
        <strong>{!! Form::date('fecha_nacimiento',null, ['class' => 'form-control']) !!}</strong>
    </div>

    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        {!! Form::label('telefono', 'Tel&eacute;fono', ['class' => '']) !!}
        <strong>{!! Form::text('telefono', null, ['class' => 'form-control']) !!}</strong>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        {!! Form::label('email', 'Correo Electr&oacute;nico', ['class' => '']) !!}
        <strong>{!! Form::email('email',null, ['class' => 'form-control']) !!}</strong>
    </div>
    @if(Auth::user()->type === 'admin')

        <div class="col-sm-6 col-md-6 col-xs-6 form-group">
            {!! Form::label('type', 'Tipo de Usuario', ['class' => '']) !!}
            <strong>{!! Form::select('type',config('opciones.tiposAdmin'),null, ['class' => 'form-control', 'id' => 'select']) !!}</strong>
        </div>
    @else
        <div class="col-sm-6 col-md-6 col-xs-6 form-group">
            {!! Form::label('type', 'Tipo de Usuario', ['class' => '']) !!}
            <strong>{!! Form::select('type',config('opciones.tipoNormal'),null, ['class' => 'form-control']) !!}</strong>
        </div>
    @endif
</div>



