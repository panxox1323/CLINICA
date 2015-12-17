@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Mantenedor de Citas</strong></h5></div>
        @include('admin.partials.mensaje')
        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    {!! Form::open(['route' => 'admin.agendar.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off']) !!}
                        <div class="row ajuste-seleccione">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <select name="id_especialista" id="id_especialista" class="form-control">
                                    <option value="">Selecione Especialista</option>
                                    @foreach($especialista as $esp)
                                        <option value="{{ $esp->id }}" >{{ $esp->first_name.' '.$esp->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                <select name="id_usuario" class="form-control">
                                    <option value="">Seleccione Paciente</option>
                                    @foreach($paciente as $pac)
                                        <option value="{{ $pac->id }}" >{{$pac->run .'--------'. $pac->first_name.' '.$pac->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                @if($errors->all())
                                    <div class="" role="alert">
                                        <strong><p class="porte2 pull-right">{{ $errors->first('id_especialista') }}</p></strong>
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                @if($errors->all())
                                    <div class="" role="alert">
                                        <strong><p class="porte2 pull-right">{{ $errors->first('id_usuario') }}</p></strong>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row ajuste11">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <h4 class="text-center color-subtitulo">Seleccione una Fecha</h4>

                                <div style="overflow:hidden;">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div id="datetimepicker12"></div>
                                                {!! Form::text('fecha', null, ['class' => ' ', 'id' => 'fechaOculta']) !!}
                                                @if($errors->all())
                                                    <div class="" role="alert">
                                                        <strong><p class="porte2 pull-right">{{ $errors->first('fecha') }}</p></strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <h4 class="text-center color-subtitulo">Lista de Horarios</h4>
                                <ul id="lista_horas" class="lista scroll-pool">

                                </ul>

                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <select id="select_horas" name="id_horas" class="form-control">
                                    <option value="">Desplegar para ver horas disponibles</option>
                                    {{--@foreach($disponibles as $disponible)--}}
                                        {{--<option value="{{ $disponible->id }}">{{$disponible->hora }}</option>--}}
                                    {{--@endforeach--}}
                                </select>
                                <button type="submit" class="btn btn-info btn-block btn-lg "><span class="icon-calendar"></span></span> <strong>Agendar</strong></button>
                            </div>
                        </div>




                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@endsection