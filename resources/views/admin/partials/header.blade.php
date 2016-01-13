<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin">
                <strong>Oral Plus</strong>
                <strong class="text-capitalize">{{ Auth::user()->type }}</strong>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                @if(Auth::user()->type == 'admin' || Auth::user()->type == 'secretaria')

                    <li role="presentation" class="dropdown ajuste-5000">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <strong><span class="icon-cogs"></span> Configurar</strong> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            @if(Auth::user()->type == 'admin' )
                                <li><a href="{!! route('admin.configurar.index') !!}"><span class="icon-alarm"></span><strong> Horas</strong></a></li>
                            @endif

                            @if(Auth::user()->type == 'secretaria')
                                <li><a href="{!! route('secretaria.configurar.index') !!}"><span class="icon-alarm"></span><strong> Horas</strong></a></li>
                            @endif

                        </ul>

                    </li>

                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <strong><span class="icon-clipboard2"></span> Reportes</strong> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            @if(Auth::user()->type == 'admin')
                                <li><a href="{!! route('admin.pdf-usuarios.index') !!}" target="_blank"><span class="icon-user"></span><strong> Usuarios</strong></a></li>
                                <li><a href="{!! route('admin.pdf-proveedores.index') !!}" target="_blank"><span class="icon-user-tie"><strong> Proveedores</strong> </span></a></li>
                                <li><a href="" target="_blank"><span class="icon-aid-kit"><strong> Tratamientos</strong></span></a></li>
                                <li><a href="{!! route('admin/pagosEfectuados') !!}"><span class="icon-coins"><strong> Reporte de Pagos </strong></span></a></li>
                                <li><a href="{!! route('admin/citasEfectuadas') !!}"><span class="icon-calendar"><strong> Reporte de Citas </strong></span></a></li>
                            @endif

                            @if(Auth::user()->type == 'secretaria')
                                <li><a href="{!! route('secretaria.pdf-usuarios.index') !!}" target="_blank"><span class="icon-user"></span><strong> Usuarios</strong></a></li>
                                <li><a href="{!! route('secretaria.pdf-proveedores.index') !!}" target="_blank"><span class="icon-user-tie"><strong> Proveedores</strong> </span></a></li>
                                <li><a href="{!! route('secretaria/pdf-tratamiento') !!}" target="_blank"><span class="icon-aid-kit"><strong> Tratamientos</strong></span></a></li>
                                <li><a href="{!! route('secretaria/pagosEfectuados') !!}"><span class="icon-coins"><strong> Pagos por fecha </strong></span></a></li>
                                <li><a href="" target="_blank"><span class="icon-calendar"><strong> citas </strong></span></a></li>
                            @endif
                        </ul>

                    </li>

                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <strong>Cuenta</strong> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">

                        @if(Auth::user()->type == 'admin')
                            <li class=""><a href="{{ route('admin.userPerfil.index') }}" class="pull-right"><span class="icon-profile4"></span><strong> Perfil de {{ Auth::user()->first_name.' '.Auth::user()->last_name }}</strong></a></li>
                        @endif

                        @if(Auth::user()->type == 'secretaria')
                            <li class=""><a href="{{ route('secretaria.userPerfil.index') }}" class="pull-right"><span class="icon-profile4"></span><strong> Perfil de {{ Auth::user()->first_name.' '.Auth::user()->last_name }}</strong></a></li>
                        @endif
                        @if(Auth::user()->type == 'especialista')
                            <li class=""><a href="{{ route('especialista.userPerfil.index') }}" class="pull-right"><span class="icon-profile4"></span><strong> Perfil de {{ Auth::user()->first_name.' '.Auth::user()->last_name }}</strong></a></li>
                        @endif
                        @if(Auth::user()->type == 'user')
                            <li class=""><a href="{{ route('user.userPerfil.index') }}" class="pull-right"><span class="icon-profile4"></span><strong> Perfil de {{ Auth::user()->first_name.' '.Auth::user()->last_name }}</strong></a></li>
                        @endif
                        <li><a href="/auth/logout" onclick=" return confirm('Si confirma su sesión se cerrará')"><span class="icon-enter"></span><strong> Cerrar Sesi&oacute;n</strong></a></li>

                    </ul>
                </li>

            </ul>

        </div>

    </div>
</nav>