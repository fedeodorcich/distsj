<?php 

	require("conexbd.php");
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	if($user!='admin'){
		$pass = hash('sha256', $pass);
	}
	$result = $conexion->prepare("SELECT * FROM usuario WHERE nombre = '$user' AND pass = '$pass' ");
 
	$result->execute();

	$row = $result->fetchAll();
	
	if(($row!=false)&&($row[0]['nombre']==$user)&&($row[0]['admn']==false)){
		echo 1;
	}
	else{
			if($row[0]['admn']==true){
				echo "2";
			}else{
				echo '<div class="alert alert-danger" role="alert">
				Usuario o contraseña incorrectos
				</div>';}
		 }	  
?>