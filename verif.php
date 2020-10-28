<?php 
error_reporting(0);
	require("conexbd.php");
	$user=$_POST['user'];
	$pass=$_POST['pass'];


	$result = $conexion->prepare("SELECT * FROM usuario WHERE usuario='$user' AND pass='$pass'");
 
	$result->execute();


	$row = $result->fetchAll();


	if($row[0]['usuario']==$user){
		echo 1;
	}
	else{
	
	echo '<div class="alert alert-danger" role="alert">
  				Usuario o contraseña incorrectos
			</div>';
	}
	
 ?>