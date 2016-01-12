@if(Auth::user()->type == 'admin')
    <a href="{!! route('admin.proveedores.index') !!}" class="btn btn-warning btn-md"><span class="icon-cancel2"></span> Cancelar</a>
@endif
@if(Auth::user()->type == 'secretaria')
    <a href="{!! route('secretaria.proveedores.index') !!}" class="btn btn-warning btn-md"><span class="icon-cancel2"></span> Cancelar</a>
@endif