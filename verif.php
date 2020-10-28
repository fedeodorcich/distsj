<?php 
	require("conexbd.php");
	$user=$_POST['user'];
	$pass=$_POST['pass'];


	$result = $conexion->prepare("SELECT * FROM usuario WHERE usuario='$user' AND pass='$pass'");
 
	$result->execute();

	$cant = count($result->fetchAll());

	if($cant==0)
	{

	}
	else
		echo "<div class="alert alert-danger" role="alert">
  Usuario o contraseña incorrectos
</div>";


 ?>