@if(Auth::user()->type == 'admin')
    <a href="{!! route('admin.configurar.index') !!}" class="btn btn-warning btn-md"><span class="icon-cancel2"></span> Cancelar</a>
@endif
@if(Auth::user()->type == 'secretaria')
    <a href="{!! route('secretaria.configurar.index') !!}" class="btn btn-warning btn-md"><span class="icon-cancel2"></span> Cancelar</a>
@endif
