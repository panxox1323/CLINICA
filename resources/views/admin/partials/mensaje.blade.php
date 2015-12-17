<div class="prueba2">
    @if(Session::has('message'))
        <div class="prueba2">
            <strong><p class="prueba3">{{ Session::get('message') }}</p></strong>
        </div>
    @endif

</div>