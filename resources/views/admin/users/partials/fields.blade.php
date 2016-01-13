
<div class="row">

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            {!! Form::label('type', 'Tipo de Usuario', ['class' => '']) !!}
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @if(Auth::user()->type == 'admin')
                <strong>{!! Form::select('type', config('opciones.tiposUsuario'), ['class' => 'form-control', 'selected' => 'selected']) !!}</strong>
            @endif
            @if(Auth::user()->type == 'secretaria')
                <strong>{!! Form::select('type', config('opciones.tiposUsuarioSecre'), '', ['class' => 'form-control']) !!}</strong>
            @endif

        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group" id="Especialidad" style="display: none">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            {!! Form::label('id_especialidad', 'Especialidad', ['class' => '']) !!}
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::select('id_especialidad',$especialidades, null, ['class' => 'form-control', 'id' => 'selector']) !!}</strong>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            {!! Form::label('first_name', 'Nombres', ['class' => '']) !!}
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
            @if($errors->all())
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('first_name') }}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('first_name', null, ['class' => 'form-control'] ) !!}</strong>
        </div>
    </div>

    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            {!! Form::label('last_name', 'Apellidos', ['class' => '']) !!}
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
            @if($errors->all())
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('last_name')}}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('last_name', null, ['class' => 'form-control']) !!}</strong>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            {!! Form::label('password', 'Password', ['class' => '']) !!}
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
            @if($errors->all())
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('password')}}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::password('password', ['class' => 'form-control']) !!}</strong>
        </div>
    </div>

    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            {!! Form::label('run', 'RUN', ['class' => '']) !!}
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
            @if($errors->all())
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('run')}}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('run', null, ['class' => 'form-control', 'id' => 'verifica']) !!}</strong>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            {!! Form::label('direccion', 'Direcci&oacute;n', ['class' => '']) !!}
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('direccion', null, ['class' => 'form-control']) !!}</strong>
        </div>
    </div>

    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            {!! Form::label('ciudad', 'Ciudad', ['class' => '']) !!}
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('ciudad', null,['class' => 'form-control']) !!}</strong>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento', ['class' => '']) !!}
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            @if($errors->all())
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('fecha_nacimiento')}}</p></strong>
                </div>
            @endif
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('fecha_nacimiento',null, ['id' => 'datepicker', 'readonly' => 'readonly']) !!}</strong>
        </div>
    </div>

    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            {!! Form::label('telefono', 'Tel&eacute;fono', ['class' => '']) !!}
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
            @if($errors->all())
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('telefono')}}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('telefono', null, ['class' => 'form-control', 'onKeyPress' => 'return soloNumeros(event)']) !!}</strong>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            {!! Form::label('email', 'Correo Electr&oacute;nico', ['class' => '']) !!}
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            @if($errors->all())
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('email')}}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('email',null, ['class' => 'form-control']) !!}</strong>
        </div>

    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            {!! Form::label('estado', 'Estado', ['class' => '']) !!}
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::select('estado', config('opciones.estadoUsuario'), null, ['class' => 'form-control']) !!}</strong>
        </div>

    </div>

</div>




