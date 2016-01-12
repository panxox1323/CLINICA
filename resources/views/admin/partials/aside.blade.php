<aside class="main-sidebar prueba33">
    <li class="header text-uppercase text-green "><h3 class="text-center">Menu</h3></li>
    <section class="sidebar">

        <ul class="sidebar-menu ajustes2">

            <li class="{{ Active::pattern('admin')}} prueba icono"><a href="/admin"><span class="icon-home"></span> Home</a></li>
            <li class="{{ Active::pattern('admin/users') }} prueba treeview">
                <a href="#">
                    <span class="icon-users"> Usuarios</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.users.index') !!}"><span class="icon-chevron-thin-right"></span> Ir a Usuarios</a></li>
                    <li class="icono"><a href="{!! route('admin.users.create') !!}"><span class="icon-add-user"></span> Crear Usuario</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/especialidades') }} prueba treeview">
                <a href="#">
                    <span class="icon-briefcase"> Especialidades</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.especialidades.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Especialidades</a></li>
                    <li class="icono"><a href="{!! route('admin.especialidades.create') !!}"><span class="icon-circle-with-plus"></span> Crear Especialidad</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern("admin/agendar") }} prueba treeview">
                <a href="#">
                    <span class="icon-calendar"> Citas</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.agendar.index') !!}"><span class="icon-chevron-thin-right"></span> Agendar Cita</a></li>
                    <li class="icono"><a href="{!! route('horas-agendadas') !!}"><span class="icon-chevron-thin-right"></span> Horas Agendadas</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/diagnostico') }} prueba treeview">
                <a href="#">
                    <span class="icon-health"> Diagnósticos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.diagnostico.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Diagnósticos</a></li>
                    <li class="icono"><a href="{!! route('admin.diagnostico.create')!!}"><span class="icon-plus"></span> Ingresar Diagnósticos</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/pagos') }} prueba treeview">
                <a href="#" class="icono">
                    <span class="icon-moneybag"> Pagos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.pagar.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Pagos</a></li>
                    <li class="icono"><a href="{!! route('admin.pagar.create') !!}"><span class="icon-circle-with-plus"></span> Ingresar Pago</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/tratamiento') }} prueba treeview">
                <a href="#">
                    <span class="icon-injection"> Tratamientos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.tratamiento.index') !!}"><span class="icon-chevron-thin-right"></span> Ir a Tratamientos</a></li>
                    <li class="icono"><a href="{!! route('admin.tratamiento.create') !!}"><span class="icon-circle-with-plus"></span> Crear Tratamiento</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/proveedores') }} prueba treeview">
                <a href="#">
                    <span class="icon-user-tie"> Proveedores</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.proveedores.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Proveedores</a></li>
                    <li class="icono"><a href="{!! route('admin.proveedores.create') !!}"><span class="icon-circle-with-plus"></span> Crear Proveedor</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/insumos')}} prueba treeview">
                <a href="#">
                    <span class="icon-lab"> Insumos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.insumos.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Insumos</a></li>
                    <li class="icono {{ Active::pattern('admin/insumos/create') }}"><a href="{!! route('admin.insumos.create') !!}"><span class="icon-circle-with-plus"></span> Crear Insumo</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern("admin/pedidos") }} prueba treeview">
                <a href="#">
                    <span class="icon-briefcase"> Pedidos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{{ route('admin.pedido.index') }}"><span class="icon-chevron-thin-right"></span> Ir a Pedidos</a></li>
                    <li class="icono"><a href="{!! route('admin.pedido.create') !!}"><span class="icon-chevron-thin-right"></span> Agregar Pedido</a></li>
                </ul>
            </li>

            <li class="{{ Active::pattern('admin/facturas') }} prueba treeview">
                <a href="#" class="icono">
                    <span class="icon-clipboard"> Facturas</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.factura.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Facturas</a></li>
                    <li class="icono"><a href="{!! route('admin.factura.create') !!}"><span class="icon-circle-with-plus"></span> Ingresar factura</a></li>
                </ul>
            </li>





        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
