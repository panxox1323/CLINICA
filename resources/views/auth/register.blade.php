@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Registro</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Atenci&oacute;n!</strong> Error al registrarse, intentelo nuevamente .<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/register">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Juan Perez">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="info@tumail.com">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contrase&nacute;a</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password" placeholder="M&iacute;inimo 6 caracteres">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirmar Contrase&nacute;a</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation" placeholder="Repita la contrase&nacute;a">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Registrar
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
