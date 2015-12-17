<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Oral Plus</title>

	{!!  Html::style('bower_components/bootstrap/dist/css/bootstrap.css') !!}
	{!!  Html::style('bower_components/bootstrap-material-design/dist/css/material.css') !!}
	{!!  Html::style('icomoon/style.css') !!}
	{!!  Html::style('css/backend.css')  !!}
	{!!  Html::style('icomoon/icomoon/style.css')  !!}
	{!!  Html::style('css/boton.css') !!}

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
<div class="imagen-de-fondo">

	<div class="container fondo">
		<div class="row">
			<div class="col-md-6 col-sm-9 col-xs-12 col-md-offset-3 col-offset-sm-3 col-offset-xs-3">
				<div class="panel panel-primary login ">
					<div class="panel-heading text-center titulo-login"><span class="icon-lock"></span> Login Cl&iacute;nica dental Oral Plus</div>

					<div class="effect5">
						<div class="formulario">
							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<strong>Atenci&oacute;n!</strong> Error al logearse.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

							<form class="form-horizontal" role="form" method="POST" action="/auth/login">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="form-group">
									<label class="col-md-4 control-label">{{ trans('validation.attributes.email') }}</label>
									<div class="col-md-6">
										{!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email', 'placeholder' => 'info@123.com']) !!}
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">{{ trans('validation.attributes.password') }}</label>
									<div class="col-md-6">
										{!! Form::password('password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => 'M&iacute;nimo 6 caracteres']) !!}

									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="remember"> Recordar
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary text-center" style="margin-right: 15px;">
											Entrar
										</button>
										<a href="/" class="btn btn-warning"><span class="icon-cancel"></span> Cancelar</a>

									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>


</div>
{!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}
{!! Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
{!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}
{!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') !!}

<script type="text/javascript">
	$(document).on('ready', function () {
		$.material.init();
	});
</script>
</body>
</html>
