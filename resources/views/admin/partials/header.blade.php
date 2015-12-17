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
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">

                <li role="presentation" class="dropdown ajuste-5000">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <strong><span class="icon-cogs"></span> Configurar</strong> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{!! route('admin.configurar.index') !!}"><span class="icon-alarm"></span><strong> Horas</strong></a></li>
                        <li><a href="{!! route('admin.configurar-forma-de-pago.index') !!}"><span class="icon-moneybag"><strong> Forma de Pagos</strong> </span></a></li>
                    </ul>

                </li>
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <strong><span class="icon-clipboard2"></span> Reportes</strong> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{!! route('admin.pdf-usuarios.index') !!}" target="_blank"><span class="icon-user"></span><strong> Usuarios</strong></a></li>
                        <li><a href="{!! route('admin.pdf-proveedores.index') !!}" target="_blank"><span class="icon-user-tie"><strong> Proveedores</strong> </span></a></li>
                        <li><a href="" target="_blank"><span class="icon-aid-kit"><strong> Tratamientos</strong></span></a></li>
                        <li><a href="" target="_blank"><span class="icon-coins"><strong> Pagos </strong></span></a></li>
                    </ul>

                </li>


            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <strong>Cuenta</strong> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class=""><a href="{{ route('admin.userPerfil.index') }}" class="pull-right"><span class="icon-profile4"></span><strong> Perfil de {{ Auth::user()->first_name.' '.Auth::user()->last_name }}</strong></a></li>
                        <li><a href="/auth/logout"><span class="icon-enter"></span><strong> Cerrar Sesi&oacute;n</strong></a></li>

                    </ul>
                </li>

            </ul>

        </div>

    </div>
</nav>