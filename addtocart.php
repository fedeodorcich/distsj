<?php 

//------------------aca hay que hacer la carga de datos en la tabla de carrito----------

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	$user= $_POST['id'];
	$producto = $_POST['productId'];
	$cantidad = $_POST['cant'];
	

	try {
		$conexion = new PDO('mysql:host=localhost;dbname=dristr', 'root', '');
	} catch (PDOException $th) {
		echo "Error: " . $th->getMessage();
	}	
			
	$sentencia = $conexion->prepare('INSERT INTO carro (id, id_usuario, producto, cantidad) VALUES (null,:id_usuario, :producto, :cantidad)');


	$sentencia->execute(array(
      ':id_usuario' => $user,
      ':producto' => $producto,
      ':cantidad' => $cantidad
   ));

	if(!$sentencia) {
		echo 0;
        die("Query failed");
    }
    else
    	echo 1;

}
else
{
	echo 0;
}


 ?>