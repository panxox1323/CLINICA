@if(Auth::user()->type == 'admin')
    <a href="{!! route('admin.users.index') !!}" class="btn btn-warning"><span class="icon-cancel2"></span> Cancelar</a>
@endif
@if(Auth::user()->type == 'secretaria')
    <a href="{!! route('secretaria.users.index') !!}" class="btn btn-warning"><span class="icon-cancel2"></span> Cancelar</a>
@endif