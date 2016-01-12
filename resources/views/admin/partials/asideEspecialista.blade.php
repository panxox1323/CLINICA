<aside class="main-sidebar prueba33">
    <li class="header text-uppercase text-aqua "><h3 class="text-center">Menu</h3></li>
    <section class="sidebar">

        <ul class="sidebar-menu ajustes2">

            <li class="{{ Active::pattern('especialista')}} prueba icono"><a href="/especialista"><span class="icon-home"></span> Home</a></li>

            <li class="{{ Active::pattern("secretaria/agendar") }} prueba treeview">
                <a href="#">
                    <span class="icon-calendar"> Citas</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('especialista/horas-agendadas-del-especialista') !!}"><span class="icon-chevron-thin-right"></span> Horas Agendadas</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('especialista/diagnostico') }} prueba treeview">
                <a href="#">
                    <span class="icon-health"> Diagnósticos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('especialista/misDiagnosticos')!!}"><span class="icon-chevron-thin-right"></span> Ir a Diagnósticos</a></li>
                    <li class="icono"><a href="{!! route('especialista.diagnostico.create')!!}"><span class="icon-plus"></span> Ingresar Diagnósticos</a></li>
                </ul>
            </li>

            <li class="{{ Active::pattern('especialista/tratamiento') }} prueba treeview">
                <a href="#">
                    <span class="icon-injection"> Tratamientos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('especialista.tratamiento.index') !!}"><span class="icon-chevron-thin-right"></span> Ir a Tratamientos</a></li>
                </ul>
            </li>

            <li class="{{ Active::pattern('especialista/insumos')}} prueba treeview">
                <a href="#">
                    <span class="icon-lab"> Insumos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('especialista.insumos.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Insumos</a></li>
                </ul>
            </li>



        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
