<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            {!! Form::label('user_id', 'Paciente', ['class' => '']) !!}
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
            @if($errors->all('user_id'))
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('user_id') }}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <select name="user_id" class="form-control">
                <option value="">Seleccione un Paciente</option>
                @foreach($pacientes as $paciente)
                    <option value="{{ $paciente->id }}" >{{ $paciente->first_name.' '.$paciente->last_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            {!! Form::label('monto', 'Monto', ['class' => '']) !!}
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
            @if($errors->all('monto'))
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('monto') }}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('monto', null, ['class' => 'form-control'] ) !!}</strong>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group" style="display: none;">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            {!! Form::label('fecha', 'Fecha', ['class' => '']) !!}
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <strong>{!! Form::text('fecha', \Carbon\Carbon::now(    ), ['class' => 'form-control'] ) !!}</strong>
        </div>
    </div>
</div>
