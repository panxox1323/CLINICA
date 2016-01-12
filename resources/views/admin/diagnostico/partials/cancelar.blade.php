@if(Auth::user()->type == 'admin')
    <a href="{!! route('admin.diagnostico.index') !!}" class="btn btn-warning btn-sm pull-right"><span class="icon-cancel2"></span> Cancelar</a>
@endif
@if(Auth::user()->type == 'secretaria')
    <a href="{!! route('secretaria.diagnostico.index') !!}" class="btn btn-warning btn-sm pull-right"><span class="icon-cancel2"></span> Cancelar</a>
@endif
@if(Auth::user()->type == 'especialista')
    <a href="{!! route('especialista.diagnostico.index') !!}" class="btn btn-warning btn-sm pull-right"><span class="icon-cancel2"></span> Cancelar</a>
@endif