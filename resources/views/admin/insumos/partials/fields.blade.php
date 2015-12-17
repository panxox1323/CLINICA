<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            {!! Form::label('nombre', 'Nombre insumo', ['class' => '']) !!}
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            @if($errors->all('nombre'))
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('nombre') }}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('nombre', null, ['class' => 'form-control'] ) !!}</strong>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            {!! Form::label('descripcion', 'Descripci&oacute;n') !!}
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">

        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('descripcion',null, ['class' => 'form-control'] ) !!}</strong>
        </div>
    </div>
</div>

