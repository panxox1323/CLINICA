<aside class="main-sidebar prueba33">
    <li class="header text-uppercase text-blue "><h3 class="text-center">Menu</h3></li>
    <section class="sidebar">

        <ul class="sidebar-menu ajustes2">

            <li class="{{ Active::pattern('user')}} prueba icono"><a href="/admin"><span class="icon-home"></span> Home</a></li>


            <li class="{{ Active::pattern("user/agendar") }} prueba treeview">
                <a href="#">
                    <span class="icon-calendar"> Citas</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{{ route('user.agendar.index') }}"><span class="icon-chevron-thin-right"></span> Agendar Cita</a></li>
                    <li class="icono"><a href="{!! route('user/horas-agendadasUser') !!}"><span class="icon-chevron-thin-right"></span> Horas Agendadas</a></li>
                </ul>
            </li>

            <li class="{{ Active::pattern('user/diagnostico') }} prueba treeview">
                <a href="#">
                    <span class="icon-health"> Diagnósticos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('user/diagnosticosUser')!!}"><span class="icon-chevron-thin-right"></span> Ir a Diagnósticos</a></li>
                    <li class="icono"><a href="{!! route('user.diagnostico.create')!!}"><span class="icon-plus"></span> Ingresar Diagnóstico</a></li>
                </ul>
            </li>

            <li class="{{ Active::pattern('admin/pagos') }} prueba treeview">
                <a href="#" class="icono">
                    <span class="icon-moneybag"> Pagos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('user/pagosUser')!!}"><span class="icon-chevron-thin-right"></span> Ir a Pagos</a></li>
                </ul>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
