<div class="factura">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 form-group">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                {!! Form::label('id_usuario', 'Paciente', ['class' => '']) !!}
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                @if($errors->all())
                    <div class="" role="alert">
                        <p class="porte2 pull-right">{{ $errors->first('id_usuario') }}</p>
                    </div>
                @endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <select name="id_usuario" class="form-control" id="id_usuario">
                    <option value="">Seleccione Paciente</option>
                    @foreach($pacientes as $paciente)
                        <option value="{{ $paciente->id }}">{{ $paciente->first_name.' '.$paciente->last_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 form-group">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                {!! Form::label('id_especialista', 'Especialista', ['class' => '']) !!}
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                @if($errors->all())
                    <div class="" role="alert">
                        <p class="porte2 pull-right">{{ $errors->first('id_especialista') }}</p>
                    </div>
                @endif
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <select name="id_especialista" class="form-control" id="id_especialista">
                    <option value="">Seleccione Especialista</option>
                    @if(Auth::user()->type == 'especialista')
                        @foreach($especialista as $esp)
                            <option value="{{ $esp->id }}">{{ $esp->first_name.' '.$esp->last_name }}</option>
                        @endforeach
                    @endif
                    @if(Auth::user()->type == 'admin' || Auth::user()->type == 'secretaria')
                        @foreach($especialistas as $especialista)
                            <option value=""></option>
                            <option value="{{ $especialista->id }}">{{ $especialista->first_name.' '.$especialista->last_name }}</option>
                        @endforeach
                    @endif
                </select>
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
</div>
</div>