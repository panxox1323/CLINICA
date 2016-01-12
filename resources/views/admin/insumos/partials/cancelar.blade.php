@if(Auth::user()->type == 'admin')
    <a href="{!! route('admin.insumos.index') !!}" class="btn btn-warning btn-sm"><span class="icon-cancel2"></span> Cancelar</a>
@endif
@if(Auth::user()->type == 'secretaria')
    <a href="{!! route('secretaria.insumos.index') !!}" class="btn btn-warning btn-sm"><span class="icon-cancel2"></span> Cancelar</a>
@endif
