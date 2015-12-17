<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            {!! Form::label('nombre', 'Nombre Empresa o Persona', ['class' => '']) !!}
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
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

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            {!! Form::label('direccion', 'Direccion') !!}
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            @if($errors->all('direccion'))
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('direccion') }}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('direccion', null, ['class' => 'form-control'] ) !!}</strong>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            {!! Form::label('telefono', 'Ciudad') !!}
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            @if($errors->all('ciudad'))
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('ciudad') }}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('ciudad', null, ['class' => 'form-control'] ) !!}</strong>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            {!! Form::label('email', 'Email') !!}
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            @if($errors->all('email'))
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('email') }}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('email', null, ['class' => 'form-control']) !!}</strong>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            {!! Form::label('telefono', 'Telefono') !!}
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
            @if($errors->all('telefono'))
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('telefono') }}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('telefono', null, ['class' => 'form-control'] ) !!}</strong>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            {!! Form::label('giro', 'Giro') !!}
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            @if($errors->all('giro'))
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('giro') }}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('giro', null, ['class' => 'form-control']) !!}</strong>
        </div>
    </div>

</div>
