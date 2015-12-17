
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                {!! Form::label('especialidad', 'Tipo Especialidad', ['class' => '']) !!}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                @if($errors->all())
                    <div class="" role="alert">
                        <strong><p class="porte2 pull-right">{{ $errors->first('especialidad') }}</p></strong>
                    </div>
                @endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                {!! Form::text('especialidad', null, ['class' => 'form-control']) !!}
            </div>
        </div>

    </div>



