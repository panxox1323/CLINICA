<div class="row">

    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            {!! Form::label('', 'Tratamiento', ['class' => '']) !!}
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::select('id', array('' => 'Seleccione un Tratamiento') + $tratamientos, null, ['class' => 'form-control', 'id' => 'selector']) !!}</strong>
        </div>
    </div>
    @if(Auth::user()->type == 'admin')
        <div class="col-sm-6 col-md-6 col-xs-6 form-group">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                {!! Form::label('', 'Precio', ['class' => '']) !!}
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                @if($errors->all('precio'))
                    <div class="" role="alert">
                        <strong><p class="porte2 pull-right">{{ $errors->first('precio') }}</p></strong>
                    </div>
                @endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <strong>{!! Form::text('precio',null , ['class' => 'form-control', 'id' => 'selector', 'onkeypress' => 'return soloNumeros(event)']) !!}</strong>
            </div>
        </div>
    @endif
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            {!! Form::label('', 'Estado', ['class' => '']) !!}
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::select('estado', config('opciones.estadoDetalle'), null , ['class' => 'form-control', 'id' => 'selector']) !!}</strong>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group" id="Especialidad" style="display: none">
        <div class="col-sm-12 col-md-12 col-xs-12 form-group">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                {!! Form::label('id_especialidad', 'Especialidad', ['class' => '']) !!}
            </div>

        </div>
    </div>
</div>

