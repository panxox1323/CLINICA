@if($errors->any())
    <div class="alert alert-danger" role="alert">

        <strong><p class="color">Por favor corrige los siguientes errores:</p></strong>
        <ul>
            @foreach($errors->all() as $error)
                <li class="porte2">{{ $error }}</li>
            @endforeach
        </ul>

    </div>
@endif
