<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
</head>

<body>
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-danger">
					<div class="panel panel-heading">Registro de Usuario</div>
					<div class="panel panel-body">
						<form id="frmRegistro">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="nombre" id="nombre">
							<label>Apellido</label>
							<input type="text" class="form-control input-sm" name="apellido" id="apellido">
							<label>Email (Usuario)</label>
							<input type="email" class="form-control input-sm" name="usuario" id="usuario">
							<label>Contraseña</label>
							<input type="password" class="form-control input-sm" name="password " id="password">
							<p></p>
							<span class="btn btn-primary">Registrar</span>
							<a href="index.php" class="btn btn-default">Regresar Login</a>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>

	</div>
</body>

</html>