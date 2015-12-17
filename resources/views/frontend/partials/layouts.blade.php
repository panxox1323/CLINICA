<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0">
    <title>Cl&iacute;nica Denatl Oral Plus</title>
    <link rel=icon href=favicon.png sizes="16x16" type="image/png">
    {!!  Html::style('css/app.css') !!}
    {!!  Html::style('css/style.css') !!}
    {!!  Html::style('icomoon/style.css') !!}
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
</head>
<body>

@include('frontend.partials.header')

@yield('content')

@include('frontend.partials.footer')






{!! Html::script('http://code.jquery.com/jquery-latest.js') !!}
{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') !!}
<a id="toTop" href="#" style="margin-right: -51px; right: 50%; display: block;">
    <span class="icon-arrow-long-up"></span>
</a>
</body>
</html>