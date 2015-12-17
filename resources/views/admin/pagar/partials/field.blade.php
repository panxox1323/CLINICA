<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            {!! Form::label('pagar', 'Monto a Pagar', ['class' => '']) !!}
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            @if($errors->all())
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('monto') }}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('monto', null, ['class' => 'form-control', 'onkeypress' => 'return soloNumeros(event)'] ) !!}</strong>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group" style="display: none" >
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            {!! Form::label('pagar', 'Usuario', ['class' => '']) !!}
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('user_id', $usuario->id, ['class' => 'form-control'] ) !!}</strong>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group" style="display: none;">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            {!! Form::label('fecha', 'Fecha', ['class' => '']) !!}
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('fecha', \Carbon\Carbon::now(    ), ['class' => 'form-control'] ) !!}</strong>
        </div>
    </div>


</div>