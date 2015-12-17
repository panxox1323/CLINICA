<div class="factura">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 form-group">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                {!! Form::label('numero_factura', 'N&uacute;mero Factura', ['class' => '']) !!}
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                @if($errors->all())
                    <div class="" role="alert">
                        <p class="porte2 pull-right">{{ $errors->first('numero_factura') }}</p>
                    </div>
                @endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                {!! Form::text('numero_factura', null, ['class' => 'form-control', 'onKeyPress' => 'return soloNumeros(event)'] ) !!}
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 form-group">
            <div class="col-sm-12 col-md-12 col-xs-12 form-group">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    {!! Form::label('id', 'Proveedor', ['class' => '']) !!}
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    @if($errors->all('id_proveedor'))
                        <div class="" role="alert">
                            <p class="porte2 pull-right">{{ $errors->first('id_proveedor') }}</p>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    {!! Form::select('id_proveedor', array('' => 'Seleccione un Proveedor') + $data, null, ['class' => 'form-control', 'id' => 'selector']) !!}
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 form-group">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    {!! Form::label('fecha', 'Fecha', ['class' => '']) !!}
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    @if($errors->all('fecha'))
                        <div class="" role="alert">
                            <p class="porte2 pull-right">{{ $errors->first('fecha') }}</p>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {!! Form::text('fecha', null, ['id' => 'datepicker', 'readonly' => "readonly"]) !!}
                </div>
            </div>

        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 form-group">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    {!! Form::label('forma_pago', 'Forma de Pago', ['class' => '']) !!}
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    @if($errors->all('forma_pago'))
                        <div class="" role="alert">
                            <p class="porte2 pull-right">{{ $errors->first('forma_pago') }}</p>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {!! Form::select('forma_pago',config('opciones.formaPago'),null, ['class' => 'form-control', 'id' => 'selector']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
