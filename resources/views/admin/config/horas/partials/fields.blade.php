<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-6 form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            {!! Form::label('hora_inicio', 'Hora ', ['class' => '']) !!}
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
            @if($errors->all())
                <div class="" role="alert">
                    <strong><p class="porte2 pull-right">{{ $errors->first('hora') }}</p></strong>
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <div class='input-group date' id='datetimepicker3'>
                    {!! Form::text('hora', null, ['class' => 'form-control']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>

        </div>
    </div>


</div>