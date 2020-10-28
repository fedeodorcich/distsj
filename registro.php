<?php 
/*	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$usuario = filter_var(trim(strtolower($_POST['usuario'])), FILTER_SANITIZE_STRING);
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
	
		$errores = '';
	
		if (empty($usuario) or empty($password) or empty($password2)) {
	
			$errores .= '<li>Faltan datos</li>';
		} else {
	
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=dristr', 'root', '');
			} catch (PDOException $th) {
				echo "Error: " . $th->getMessage();
			}
	
			$sentencia = $conexion->prepare('SELECT * FROM usuario WHERE nombre = :nombre LIMIT 1');
	
			$sentencia->execute(array(':nombre' => $usuario));
	
			$resultado = $sentencia->fetch();
	
			if ($resultado != false) {
				$errores .= '<li>El nombre de usuario ya existe</li>';
			}
	
			// las encriptamos
			$password = hash('sha256', $password);
			$password2 = hash('sha256', $password2);
	
			if ($password != $password2) {
				$errores .= '<li>Las contraseñas no coinciden</li>';
			}
	
			if ($errores == '') {
				
				$sentencia = $conexion->prepare('INSERT INTO usuario (id, nombre, correo, telefono, pass) VALUES (null, :nombre, :correo, :telefono, :pass)');
	
				$sentencia->execute(array(
					':nombre' => $usuario,
					'correo' => $correo,
					'telefono' => $telefono,
					':pass' => $password
				));
	
				echo "Gracias por registrarse";
	
			}
		}
	}
	require 'formulario.view.php';*/
 ?>