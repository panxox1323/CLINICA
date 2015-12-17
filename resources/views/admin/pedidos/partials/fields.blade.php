
<div class="factura">
    <div class="row">

        <div class="col-sm-6 col-md-6 col-xs-6 form-group">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                {!! Form::label('Proveedor', 'Proveedor', ['class' => '']) !!}
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                @if($errors->all())
                    <div class="" role="alert">
                        <strong><p class="porte2 pull-right">{{ $errors->first('id_proveedor')}}</p></strong>
                    </div>
                @endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <select name="id_proveedor" class="form-control" id="selector">
                    <option value="">Seleccione Proveedor</option>
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>


        </div>


    </div>

</div>
