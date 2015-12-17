<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('titulo')
    @yield('icono')
    @yield('css')

</head>

<body>

    <div class="">
        @yield('content')
    </div>
    <footer class="color-footer" style="margin-top: -50px;">
        <p class="text-center"></p>
        <p class="text-center centrado">Clínica Dental Oral Plus Chillán</p>
        <p class="text-center centrado">Isabel Riquelme 413, Chillán, Región del Bío Bío, Chile</p>
    </footer>

</body>
</html>
