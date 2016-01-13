@extends('layout.admin')


@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Mantenedor de Usuarios</strong></h5></div>
        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">


                            <p class="text-primary">Hay {{ $pagos->total() }} Pagos</p>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 col-md-offset-2 ">

                            {!! Form::model(Request::all(),['route' => 'user/pagosUser', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                                <div class="form-group">

                                    <input type="date" name="fecha" id="datepicker100">

                                </div>



                                <button type="submit" class="btn btn-info"><span class="icon-magnifier"></span><strong>Buscar</strong></button>
                            {!! Form::close() !!}
                        </div>
                    </div>



                    @include('admin.pagosUser.partials.table')
                    <div class="paginacion">
                        {!! $pagos->appends(Request::only(['name', 'type']))->render() !!}
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection





