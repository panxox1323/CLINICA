<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cl&iacute;nica Dental Oral Plus</title>

    {!!  Html::style('bower_components/bootstrap/dist/css/bootstrap.css') !!}
	{!!  Html::style('bower_components/bootstrap-material-design/dist/css/material.css') !!}
	{!!  Html::style('bower_components/bootstrap-material-design/dist/css/ripples.css') !!}
	{!!  Html::style('bower_components/bootstrap-material-design/dist/css/material-fullpalette.css') !!}

    {!!  Html::style('icomoon/style.css') !!}

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        {!!  Html::script('js/jquery.js') !!}
        {!!  Html::script('js/bootstrap.min.js') !!}
	<![endif]-->
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/admin"><strong>Oral Plus</strong></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/"><span class="icon-home"></span><strong> Home</strong></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestionar <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{!! route('admin.users.index') !!}"><span class="icon-user"></span> <strong> Usuarios</strong></a></li>
							<li><a href="{{ route('admin.especialistas.index') }}"><span class="icon-health"></span> <strong> Especialistas</strong></a></li>
							<li><a href="poiu"><span class="icon-loop2"> <strong> Insumos</strong></span></a></li>
							<li><a href=""><span></span><strong>Facturas</strong></a></li>
							<li><a href="{{ route('admin.proveedores.index') }}"><span class="icon-user-tie"></span> <strong> Proveedores</strong></a></li>
							<li><a href="{{ route('admin.especialidades.index') }}"><span class="icon-addressbook3"></span><strong> Especialidades</strong></a></li>
						</ul>
					</li>
					<li><a href=""><span class="icon-calendar2"> <strong> Agendar Consulta</strong></span></a></li>
					@if(Auth::user()->type == 'user')
						<li><a href=""><span></span><strong>Mi Historial</strong></a></li>
					@else
						<li><a href=""><span></span><strong>Historial Cl&iacute;nico</strong></a></li>
					@endif
					<li><a href="" class="pull-right"><span class=""></span><strong>Perfil</strong></a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
					@else
						<li><a></a></li>
                        <li><a href="/auth/logout"><span class="icon-sign-out"></span> Cerrar Sesi&oacute;n</a></li>

					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	{!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}
	{!! Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') !!}

	<script type="text/javascript">
		$(document).on('ready', function () {
			$.material.init();
		});
	</script>
    @yield('scripts')
</body>
</html>
