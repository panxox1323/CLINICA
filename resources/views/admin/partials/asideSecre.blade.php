<aside class="main-sidebar prueba33">
    <li class="header text-uppercase text-fuchsia "><h3 class="text-center">Menu</h3></li>
    <section class="sidebar">

        <ul class="sidebar-menu ajustes2">

            <li class="{{ Active::pattern('secretaria')}} prueba icono"><a href="/admin"><span class="icon-home"></span> Home</a></li>
            <li class="{{ Active::pattern('secretaria/users') }} prueba treeview">
                <a href="#">
                    <span class="icon-users"> Usuarios</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('secretaria.users.index') !!}"><span class="icon-chevron-thin-right"></span> Ir a Usuarios</a></li>
                    <li class="icono"><a href="{!! route('secretaria.users.create') !!}"><span class="icon-add-user"></span> Crear Usuario</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('secretaria/especialidades') }} prueba treeview">
                <a href="#">
                    <span class="icon-briefcase"> Especialidades</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('secretaria.especialidades.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Especialidades</a></li>
                    <li class="icono"><a href="{!! route('secretaria.especialidades.create') !!}"><span class="icon-circle-with-plus"></span> Crear Especialidad</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern("secretaria/agendar") }} prueba treeview">
                <a href="#">
                    <span class="icon-calendar"> Citas</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="/secretaria/agendar"><span class="icon-chevron-thin-right"></span> Agendar Cita</a></li>
                    <li class="icono"><a href="{!! route('secretaria/horas-agendadas') !!}"><span class="icon-chevron-thin-right"></span> Horas Agendadas</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('secretaria/diagnostico') }} prueba treeview">
                <a href="#">
                    <span class="icon-health"> Diagnósticos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('secretaria.diagnostico.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Diagnósticos</a></li>
                    <li class="icono"><a href="{!! route('secretaria.diagnostico.create')!!}"><span class="icon-plus"></span> Ingresar Diagnósticos</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('secretaria/pagar') }} prueba treeview">
                <a href="#" class="icono">
                    <span class="icon-moneybag"> Pagos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('secretaria.pagar.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Pagos</a></li>
                    <li class="icono"><a href="{!! route('secretaria.pagar.create') !!}"><span class="icon-circle-with-plus"></span> Ingresar Pago</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('secretaria/tratamiento') }} prueba treeview">
                <a href="#">
                    <span class="icon-injection"> Tratamientos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('secretaria.tratamiento.index') !!}"><span class="icon-chevron-thin-right"></span> Ir a Tratamientos</a></li>
                    <li class="icono"><a href="{!! route('secretaria.tratamiento.create') !!}"><span class="icon-circle-with-plus"></span> Crear Tratamiento</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('secretaria/proveedores') }} prueba treeview">
                <a href="#">
                    <span class="icon-user-tie"> Proveedores</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('secretaria.proveedores.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Proveedores</a></li>
                    <li class="icono"><a href="{!! route('secretaria.proveedores.create') !!}"><span class="icon-circle-with-plus"></span> Crear Proveedor</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('secretaria/insumos')}} prueba treeview">
                <a href="#">
                    <span class="icon-lab"> Insumos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('secretaria.insumos.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Insumos</a></li>
                    <li class="icono {{ Active::pattern('secretaria/insumos/create') }}"><a href="{!! route('secretaria.insumos.create') !!}"><span class="icon-circle-with-plus"></span> Crear Insumo</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern("secretaria/pedido") }} prueba treeview">
                <a href="#">
                    <span class="icon-briefcase"> Pedidos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{{ route('secretaria.pedido.index') }}"><span class="icon-chevron-thin-right"></span> Ir a Pedidos</a></li>
                    <li class="icono"><a href="{!! route('secretaria.pedido.create') !!}"><span class="icon-chevron-thin-right"></span> Agregar Pedido</a></li>
                </ul>
            </li>

            <li class="{{ Active::pattern('secretaria/factura') }} prueba treeview">
                <a href="#" class="icono">
                    <span class="icon-clipboard"> Facturas</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('secretaria.factura.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Facturas</a></li>
                    <li class="icono"><a href="{!! route('secretaria.factura.create') !!}"><span class="icon-circle-with-plus"></span> Ingresar factura</a></li>
                </ul>
            </li>





        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
