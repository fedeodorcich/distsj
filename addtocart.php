<?php 

//------------------aca hay que hacer la carga de datos en la tabla de carrito----------

$varsession = $_SESSION['user'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	
	$producto = $_POST['producto'];
	$cantidad = $_POST['cantidad'];
	
	$admn = '';
	$errores = '';

	try {
		$conexion = new PDO('mysql:host=localhost;dbname=dristr', 'root', '');
	} catch (PDOException $th) {
		echo "Error: " . $th->getMessage();
	}	
			
	$sentencia = $conexion->prepare('INSERT INTO usuario (id, id_usuario, producto, cantidad) VALUES ('0','$varsession', '$producto', '$cantidad')');

	$sentencia->execute();

}

 ?>