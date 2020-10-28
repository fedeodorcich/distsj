<!DOCTYPE html>
<html>
<head>
	<title>Distribuidora San Juan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
</head>

<body>
	
	<div id="left" class=" col-12">
				
	</div>

	<div id="right" class="container col-md-12 col-12">
    
		<!-------------------------------------------FORMULARIO DE LOGIN
		<form id="login" name="login" class="col-md-8 container">
			<img src="img/logo-primary.png" class="img-fluid marbot">
			<input id="login-user" type="text" placeholder="Usuario" class="col-md-12 form-control martopmin">
			<input id="login-pass" type="password" placeholder="Contraseña" class="col-md-12 form-control martopmin">
			<button id="login-btn" class="col-md-12 btn btn-custom martopmax">Ingresar</button>
            <a href="#" id="to-reg" class="text-center secondary-link center-block">Registrar</a>			
        </form> 
-->
		<!-------------------------------------------FORMULARIO DE REGISTRO-->
		<form id="signup2" name="login" class="col-md-8 container" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<img src="img/logo-primary.png" class="img-fluid marbot">
			<input type="text" name="usuario" class="col-md-12 form-control martopmin" placeholder="Nombre completo">
			<input type="text" name="correo" class="col-md-12 form-control martopmin" placeholder="Correo electrónico">
			<input type="text" name="telefono" class="col-md-12 form-control martopmin" placeholder="Teléfono">
			<input type="password" name="password" class="col-md-12 form-control martopmin" placeholder="Contraseña">
			<input type="password" name="password2" class="col-md-12 form-control martopmin" placeholder="Repetir contraseña">
			<div class="row text-center">
				<button class="btn btn-custom" name="submit">Registrar</button>
				<a href="index.html" class="secondary-link">Volver</a>
			</div>
			<!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores-->
			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>						
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
        </form>

    </div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="ajax.js"></script>
</body>
</html>